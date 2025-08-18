<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Model\BannerModel;
use App\Model\Brand;
use App\Model\Category;
use App\Model\OrderDetail;
use App\Model\Product;
use App\Model\Blog;
use App\Model\Post;
use App\Model\PostType;
use App\Model\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    protected $frontendPath = 'frontend.';
    protected $frontendPagePath = 'null';

    public function __construct()
    {
        $this->frontendPagePath = $this->frontendPath.'pages.';

    }

    public function index()
    {
        $banners= BannerModel::active()->get();
        $categories=Category::active()->home()->orderBy('created_at','desc')->get();
        $brand=Brand::orderBy('created_at','desc')->take(16)->get();
        $product=Product::where('is_popular','popular')->orderBy('created_at','desc')->limit(8)->get();
        $featured_category=Category::where('is_special',1)->where('status', 1)->orderBy('updated_at','desc')->limit(5)->get();
        $featured_category2=Category::where('is_special',1)->where('status', 1)->orderBy('updated_at','desc')->skip(1)->first();

        $latest_blogs = Blog::orderBy('created_at', 'desc')->limit(3)->get();

//       $id=OrderDetail::all()->pluck('product_id');
//       dd($id->sortByDesc('occurrences'));
//       $best_seller=OrderDetail::()->groupBy('product_id')->sortBy(count($id))->take(5);
//       foreach ($best_seller as $value)
//       {
//           dd($value->products());
//       }
//       dd($best_seller->first()->products);
        $result = DB::table('order_details')
            ->select(DB::raw('product_id'), DB::raw('count(*) as count'))
            ->groupBy('product_id')
            ->orderBy('count', 'desc')
            ->take(8)
            ->pluck('product_id');
//       dd($result);
        $best=Product::wherein('id',$result)->get();
        $new=Product::orderby('created_at','desc')->take(5)->get();
        $popular=Product::where('is_popular','popular')->orderBy('updated_at','desc')->take(5)->get();


        return view('frontend.pages.index',compact('banners','categories','popular','new','best','brand','product','featured_category','featured_category2', 'latest_blogs'));
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

}
