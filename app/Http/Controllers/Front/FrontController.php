<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Mail\QuotationMail;
use App\Model\BannerModel;
use App\Model\Brand;
use App\Model\Category;
use App\Model\OrderDetail;
use App\Model\Product;
use App\Model\Blog;
use App\Model\Post;
use App\Model\PostType;
use App\Model\Quotation;
use App\Model\Setting;
use App\Model\Ad\Ad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;
use Exception;

class FrontController extends Controller
{
    protected $frontendPath = 'frontend.';
    protected $frontendPagePath = 'null';

    public function __construct()
    {
        $this->frontendPagePath = $this->frontendPath.'pages.';

    }

    private function getHomePageAds()
    {
        $positions = [
            'after_hot_deals',
            'after_categories',
            'gone_in_seconds_sidebar',
            'after_brands'
        ];
        $ads = collect();
        foreach ($positions as $position) {
            $positionAds = Ad::active()
                ->byPosition($position)
                // ->currentlyActive()  //if need to do date based filtering
                ->orderBy('ordering')
                ->get();

            if ($positionAds->count() > 0) {
                $ads->put($position, $positionAds);
            }
        }
        return $ads;
    }

    public function index()
    {
        /********************** By Sangam Starts ************************/
        $banners= BannerModel::active()->get();
        $ads = $this->getHomePageAds();
        $categories = Category::active()->home()->where('in_moving_text','!=','1')->orderBy('created_at','desc')->get();
        $categoriesSlider = Category::active()->where('in_slider', '1')->latest()->get();
        $categoriesMovingText = Category::active()->where('in_moving_text','1')->latest()->get();

        $flashSales = Product::where('on_sale','1')->active()
                        ->with(['categories' => function ($query){
                          $query->where('in_moving_text','!=','1');
                        }])->latest()->take(5)->get();
        $latestProducts = Product::where('latest','1')->active()
                        ->with(['categories' => function ($query){
                          $query->where('in_moving_text','!=','1');
                        }])->latest()->take(10)->get();
        $productsForYou = Product::where('is_popular','popular')->active()
                        ->with(['categories' => function ($query){
                          $query->where('in_moving_text','!=','1');
                        }])->latest()->take(15)->get();
        $goneInSeconds = Product::where('is_special','1')->active()
                        ->with(['categories' => function ($query){
                          $query->where('in_moving_text','!=','1');
                        }])->latest()->get();
        $featuresProducts = Product::where('is_featured','1')->active()
                        ->with(['categories' => function ($query){
                          $query->where('in_moving_text','!=','1');
                        }])->latest()->take(5)->get();
        $hotProducts = Product::where('hot','1')->active()
                        ->with(['categories' => function ($query){
                          $query->where('in_moving_text','!=','1');
                        }])->latest()->take(5)->get();
        $brands=Brand::active()->latest()->get();
        /********************** By Sangam Ends **************************/

        $featured_category=Category::where('is_special',1)->where('status', 1)->orderBy('updated_at','desc')->limit(5)->get();
        $featured_category2=Category::where('is_special',1)->where('status', 1)->orderBy('updated_at','desc')->skip(1)->first();
        $latest_blogs = Blog::orderBy('created_at', 'desc')->limit(3)->get();
        $result = DB::table('order_details')
            ->select(DB::raw('product_id'), DB::raw('count(*) as count'))
            ->groupBy('product_id')
            ->orderBy('count', 'desc')
            ->take(8)
            ->pluck('product_id');
        $best=Product::wherein('id',$result)->get();
        $new=Product::orderby('created_at','desc')->take(5)->get();


        return view('frontend.pages.index',compact('banners','ads','categories','categoriesSlider','categoriesMovingText','flashSales','latestProducts','featuresProducts','hotProducts','productsForYou','goneInSeconds','brands',  'new','best','featured_category','featured_category2', 'latest_blogs'));
    }

    public function blog_single($slug){
        $blog = Blog::where('slug', $slug)->first();
        $related_blogs = Blog::orderBy('created_at', 'desc')->get();
        $related_blogs = $related_blogs->except($blog->id);

        return view('frontend.pages.blog-single', compact('blog', 'related_blogs'));
    }

    public function blog_all(){
        $blogs = Blog::orderBy('created_at', 'DESC')->paginate(6);
        return view('frontend.pages.blog-all', compact('blogs'));
    }

    public function posttype(Request $request, $uri)
    {
        if (!check_posttype_uri($uri)) {
            abort(404);
        }
        $data = PostType::where('uri', $uri)->first();
        $posts = Post::where(['post_type' => $data->id, 'status' => '1'])->orderBy('post_order', 'asc')->paginate(8);

        $tmpl['template'] = 'page';
        if ($data['template']) {
            $tmpl['template'] = $data['template'];
        }
        // dd($uri,$data,$posts,$data['template']);
        return view('frontend.cms.' . $tmpl['template'] . '', compact('data','posts'));
    }

    public function pagedetail($uri)
    {
        if (!check_post_uri($uri)) {
            abort(404);
        }
        $tmpl['template'] = 'single';
        $data = Post::where('uri', $uri)->orWhere('page_key', $uri)->first();

        // dd($uri,$data );
        if ($data['template']) {
            $tmpl['template'] = $data['template'];
        }
        if ($data->id) {
            $data->visitor = $data->visitor + 1;
            $data->save();
        }
        $post_type = PostType::where('id', $data['post_type'])->first();
        $related = Post::where('post_type', $data['post_type'])->orderBy('post_order', 'desc')->get();

        return view('frontend.cms.' . $tmpl['template'] . '', compact('data','post_type'));
    }

    public function quotation_submit(Request $request)
    {
        try{
            $request->validate([
                'full_name' => 'required',
                'email' => 'required',
                'phone'=>'required|max:10',
                'country'=>'required',
                'type'   => 'required|in:service,product',
                'service_id' => 'required_if:type,service|exists:cl_posts,id',
                'product_id' => 'required_if:type,product|exists:products,id',
                'price' => 'nullable',
            ]);

            $quote = Quotation::create([
                'full_name' => $request->full_name,
                'email' => $request->email,
                'phone' => $request->phone,
                'country' => $request->country,
                'type' => $request->type,
                'service_id'=> $request->service_id ?? null,
                'product_id'=> $request->product_id ?? null,
                'message'=> $request->message,
                'price'=> $request->price,
            ]);

            if ($quote ) {
                return new QuotationMail( $quote->id);
                // Mail::send(new QuotationMail( $quote->id));
            }
            return redirect('/')->with([
                'success' => true,
                'message' => 'Quotation Sent Successfully. One of our member will contact you soon.'
            ]);
        }catch(ValidationException $e){
            return redirect()->back()->with([
                'error' => true,
                'message' => $e->validator->errors()->all()
            ]);
        }catch(Exception $e){
            return redirect()->back()->with([
                'error' => true,
                'message' => app()->isLocal() ? $e->getMessage() : 'Something went wrong. Please try again.'
            ]);
        }
    }

}
