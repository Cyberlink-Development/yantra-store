<?php

use App\Http\Controllers\Admin\BrandDiscountController;
use App\Http\Controllers\Auth\GoogleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GlobalController;
use App\Http\Controllers\Admin\Tags\TagController;
// use App\Http\Controllers\Admin\Ads\AdController;

/******************** By Sangam Starts ***********/
// use App\Http\Controllers\Admin\CategoryController;
/******************** By Sangam Ends ***********/
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'Front\FrontController@index')->name('index');
Route::get('/product-details', function () {return view('frontend/pages/product-details');});
Route::get('/product-list', function () {
    return view('frontend/pages/product-list');
});
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

Route::group(['namespace' => 'Front'], function () {
    //social login
    Route::get ( '/redirect/{service}', 'SocialAuthController@redirect');
    Route::get ( '/callback/{service}', 'SocialAuthController@callback' );
    //footer
    Route::get('about', 'FooterController@about')->name('about');
    Route::get('contact', 'FooterController@contact')->name('contact');
    Route::get('refund-policy', 'FooterController@refund')->name('refund');
    Route::get('terms-and-conditions', 'FooterController@terms')->name('terms');
    Route::get('privacy-policy', 'FooterController@privacy')->name('privacy');
    Route::get('faq', 'FooterController@faq')->name('faq-page');
    Route::get('products/results', 'SearchController@search_results')->name('search.results');

    //CMS
    Route::get('{uri}.html', 'FrontController@pagedetail')->name('page.pagedetail');
    Route::get('type-{uri}', 'FrontController@posttype')->name('page.posttype_detail');

    //cart details//
    Route::get('/product-{slug?}', 'ProductController@product_details')->name('product-single');
    Route::post('/product-search', 'ProductController@product_search')->name('product-search');
    Route::post('/quotation-submit', 'FrontController@quotation_submit')->name('quotation-submit');

    Route::get('/product-details/{slug?}', 'CategoryController@product_details')->name('product-details');
    Route::get('/product-stock/{id}/{color_id}/{size_id}', 'ProductController@product_stock')->name('product-stock');
    Route::get('/category/{slug?}', 'CategoryController@product_list')->name('product-list');
    Route::get('/brand/{slug?}', 'CategoryController@brand_list')->name('brand-list');
    Route::get('/popular-products', 'CategoryController@popular_products')->name('popular-products');

    Route::post('/cart', 'CartController@add_cart')->name('cart-add');
    Route::get('/cart-filter', 'CartController@cart_filter')->name('cart-filter');
    Route::get('/cart-page', 'CartController@cart_item')->name('cart-item');
    Route::get('/cart-remove/{id?}', 'CartController@cart_remove')->name('cart-remove');
    Route::post('/cart-update/{id?}', 'CartController@cart_update')->name('cart-update');
//wishlist//
    Route::get('wishlist', 'CartController@show_wishlist')->name('wishlist');
    Route::get('wishlist/{id?}', 'CartController@add_wishlist')->name('add-wishlist');
    Route::get('delete-wishlist/{id}', 'CartController@delete_wishlist')->name('delete-wishlist');
    //search results
    Route::get('search-results', 'SearchController@search_results')->name('search-results');
    Route::post('search-results', 'SearchController@search_results')->name('search-results');
    //Product review
    Route::post('product-review', 'ReviewController@add_review')->name('add-review');

    // Blog Routes
    Route::get('blog-single/{slug}', 'FrontController@blog_single')->name('blog-single');
    Route::get('blog-all', 'FrontController@blog_all')->name('blog-all');


//checkout details//
    Route::get('/checkout-address', 'CheckoutController@checkout_address')->name('checkout-address');
    Route::post('/checkout-page', 'CheckoutController@checkout_address')->name('checkout-page');

    // Checkout Without Login
    Route::get('/checkout/{uri}', 'CheckoutController@direct_checkout')->name('checkout-process');
    Route::post('/checkout-success', 'CheckoutController@direct_checkout_success')->name('checkout-success');

    Route::get('/checkout-shipping', 'CheckoutController@shipping_page')->name('shipping-page');
    Route::get('/checkout-payment/{id?}', 'CheckoutController@checkout_payment')->name('checkout-payment');
    Route::post('/checkout-payment', 'CheckoutController@checkout_payment')->name('checkout-payment');
    Route::get('/checkout-review/{id?}', 'CheckoutController@checkout_review')->name('checkout-review');
    Route::get('/checkout-complete', 'CheckoutController@checkout_complete')->name('checkout-complete');
    Route::get('/track-form', 'CheckoutController@track_form')->name('track-form');
    Route::get('/track-order', 'CheckoutController@track_order')->name('track-order');

    // Order Now
    Route::any('/order-now', 'CheckoutController@order_now')->name('order-now');

    // Get city when country changes
    Route::get('/getcity/{slug?}', 'CheckoutController@get_city')->name('get-city');
    Route::get('/getshippingprice/{city?}', 'CheckoutController@get_shipping_price')->name('get-shipping-price');

    Route::get('stripe', 'PaymentController@stripe');
    Route::post('stripe', 'PaymentController@stripePost')->name('stripe.post');
    Route::get('payment/verify/', 'PaymentController@verification')->name('payment-verify');
    Route::get('/payment-method','PaymentController@payment_method')->name('payment.method');
    Route::post('/payment-method','PaymentController@payment_method')->name('payment.method');
    //user dashboard
    Route::group(['prefix' => 'user','middleware' => ['auth']], function () {
        Route::get('/account-dashboard', 'UserController@user_dashboard')->name('user-dashboard');
        Route::get('/account-address', 'UserController@address')->name('user-address');
        Route::get('/order-details-modal/{id?}', 'UserController@order_details')->name('order-detail-modal');
        Route::post('/account-address', 'UserController@address')->name('user-address');
        Route::get('/change-password', 'UserController@change_password')->name('change-password');
        Route::post('/change-password', 'UserController@change_password')->name('change-password');
        Route::get('/account-orders/{id?}', 'UserController@orders')->name('user-orders');
        Route::get('/account-wishlist/{id?}', 'UserController@wishlist')->name('user-wishlist');
        Route::delete('/account-remove-wishlist/{id?}', 'UserController@wishlist_remove')->name('remove-wishlist');
        Route::get('/account-password-recovery', 'UserController@password_recovery')->name('password-recovery');
    //    Route::get('/account-payment', function () {return view('frontend/pages/account-payment');});
        Route::get('/account-profile', 'UserController@user_profile')->name('user-profile');
        Route::post('/account-profile', 'UserController@user_profile')->name('user-profile');
    //Route::get('/account-signin', function () {return view('frontend/pages/account-signin');});
    //    Route::get('/account-signup', function () {return view('frontend/pages/account-signup');});
        Route::get('/account-tickets', function () {
            return view('frontend/pages/account-tickets');
        });
        // Route::get('/account-wishlist', function () {
        //     return view('frontend/pages/account-wishlist');
        // });
    });

});

Route::group(['namespace' => 'Auth'], function () {
    /************************* By Sangam Starts ************************/
    Route::get('/adminisclient', 'LoginController@adminLogin')->name('admin.login');
    Route::post('/adminisclient', 'LoginController@adminAuthenticate')->name('admin.authenticate');
    /************************* By Sangam Ends ************************/
    Route::post('/login', 'LoginController@login')->name('login');


    Route::get('/register-page', 'RegisterController@register_page')->name('register');
    Route::post('/register', 'RegisterController@store')->name('user-registration');
    Route::get('/login', 'LoginController@login_page')->name('login-page');

    Route::any('/logout', 'LoginController@logout')->name('logout');
    Route::get('/user/verify/{token}', 'RegisterController@verifyUser')->name('verify-user');
    Route::get('/forgot-password', 'ForgotPasswordController@forgot_password_page')->name('forgot-password');
    Route::post('/recovery-mail', 'ForgotPasswordController@recovery_mail')->name('recovery-mail');
    Route::any('/reset-password/{token}', 'ForgotPasswordController@reset_password')->name('reset-password');
});


Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'usercheck']], function () {
    /******************************* By Sangam Starts ******************************************/
    Route::post('update-status', [GlobalController::class,'updateStatus'])->name('global.update.status');
    Route::get('image-delete', [GlobalController::class,'deleteImage'])->name('global.image.delete');
    Route::resource('tags', TagController::class);
    Route::resource('ads', AdController::class);
    /******************************* By Sangam Ends ********************************************/


    Route::get('all-user', 'AdminController@all_user')->name('all-user');
    Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');
    Route::post('/wholesale-user', 'AdminController@wholesale_user')->name('wholesale-user');
    Route::get('/wholesale-user', 'AdminController@wholesale_user')->name('wholesale-user');
    Route::get('/admin-password', 'AdminController@admin_password')->name('admin-password');
    Route::post('/admin-password', 'AdminController@admin_password')->name('admin-password');

    // CMS
    // Posttype
    Route::get('type', 'PostTypeController@index')->name('type.posttype.index');
    Route::get('type/create', 'PostTypeController@create')->name('type.posttype.create');
    Route::post('type/store', 'PostTypeController@store')->name('type.posttype.store');
    Route::get('type/{id}/edit', 'PostTypeController@edit')->name('type.posttype.edit');
    Route::put('type/{id}', 'PostTypeController@update')->name('type.posttype.update');
    Route::delete('type/{id}', 'PostTypeController@destroy')->name('type.posttype.destroy');
    Route::delete('types/{id}/banner', 'PostTypeController@deleteBanner')->name('type.posttype.deleteBanner');
    Route::post('types/{id}/toggle-status', 'PostTypeController@toggleStatus')->name('type.posttype.toggleStatus');

    // For post
    Route::get('posts/{post}', 'PostController@index')->name('admin.post.index');
    Route::get('posts/{post}/create', 'PostController@create')->name('admin.post.create');
    Route::post('posts/{post}/store', 'PostController@store')->name('admin.post.store');
    Route::put('posts/{post}/{id}', 'PostController@update')->name('admin.post.update');
    Route::get('posts/{post}/{id}/edit', 'PostController@edit')->name('admin.post.edit');
    Route::delete('posts/{post}/{id}', 'PostController@destroy')->name('admin.post.destroy');
    Route::delete('post/{id}/thumbnail', 'PostController@deleteThumbnail')->name('admin.post.deleteThumbnail');
    Route::delete('post/{id}/banner', 'PostController@deleteBanner')->name('admin.post.deleteBanner');
    Route::post('post/{id}/toggle-status', 'PostController@toggleStatus')->name('admin.post.toggleStatus');


    // Route::resource('category',CategoryController::class);

    Route::group(['prefix' => 'category'], function () {
        Route::get('index', 'CategoryController@index')->name('category.index');
        Route::get('create/{id?}', 'CategoryController@create')->name('category.create');
        Route::post('store', 'CategoryController@store')->name('category.store');
        Route::any('show-category', 'CategoryController@show_category')->name('show-category');
        Route::get('edit/{id?}', 'CategoryController@edit')->name('category.edit');
        Route::any('update/{id?}', 'CategoryController@update')->name('category.update');
        Route::any('delete-category/{id}', 'CategoryController@delete_category')->name('delete-category');
        Route::any('update-category', 'CategoryController@update_category')->name('update-category');
        Route::get('category-image-delete/{id}', 'CategoryController@category_image_delete')->name('category-image-delete');
        Route::get('category-banner-delete/{id}', 'CategoryController@category_banner_delete')->name('category-banner-delete');
    });

    Route::group(['prefix' => 'product'], function () {
        Route::get('index', 'ProductController@index')->name('product.index');
        Route::get('create', 'ProductController@create')->name('product.create');
        Route::post('store-product', 'ProductController@store')->name('store-product');
        Route::any('show-product/{slug?}', 'ProductController@show_product')->name('show-product');
        Route::get('edit/{id}', 'ProductController@edit')->name('product.edit');
        Route::post('update/{id?}', 'ProductController@update')->name('product.update');
        Route::any('delete-product/{id}', 'ProductController@delete_product')->name('delete-product');
        Route::any('delete-specification/{id}', 'ProductController@delete_specification')->name('delete-specification');
        Route::any('show-review', 'ProductController@show_review')->name('show-review');
        Route::any('deal-status', 'ProductController@deal_status')->name('deal-status');
        Route::get('deal-products', 'ProductController@deal_products')->name('deal-products');
        Route::post('deal-date', 'ProductController@deal_products')->name('deal-date');

        Route::get('image_delete/{id}', 'ProductController@delete')->name('delete-img');
        Route::get('is_main_edit/{id}', 'ProductController@change_main')->name('change-main');
        //---------------------------------------------------------Sizes------------------
        Route::post('add-size', 'SizeController@store')->name('add-size');
        Route::get('add-size', 'SizeController@view')->name('add-size');
        Route::get('delete_size/{id?}', 'SizeController@delete')->name('delete-size');
//        Colors
        Route::post('add-color', 'ColorController@store')->name('add-color');
        Route::get('add-color', 'ColorController@view')->name('add-color');
        Route::get('delete_color/{id?}', 'ColorController@delete')->name('delete-color');
        //---------------------------------------------------------Brands------------------
        Route::any('add-brand', 'BrandController@manage_brand')->name('add-brand');
        Route::get('brands', 'BrandController@brand_index')->name('brand-index');
        Route::get('delete_brand/{id?}', 'BrandController@delete_brand')->name('delete-brand');
        Route::post('edit_brand/{id?}', 'BrandController@edit_brand')->name('edit-brand');

        // Delete description
        Route::get('delete-description/{id?}', 'ProductController@delete_description')->name('delete-description');

    });

    //Custom Build PC
    Route::group(['prefix' => 'componenttype'], function () {
        //Component Types
        Route::get('show', 'ComponentTypeController@view')->name('show-componenttype');
        Route::get('add', 'ComponentTypeController@create')->name('add-componenttype');
        Route::post('store', 'ComponentTypeController@store')->name('store-componenttype');
        Route::get('edit/{id}', 'ComponentTypeController@edit')->name('edit-componenttype');
        Route::post('update/{id}', 'ComponentTypeController@update')->name('update-componenttype');
        Route::get('delete/{id}', 'ComponentTypeController@destroy')->name('delete-componenttype');

    });
    Route::group(['prefix' => 'component'], function () {
        Route::get('show-componenttype', 'ComponentController@view')->name('show-active-componenttype');
        Route::get('show-component/{id}', 'ComponentController@viewComponent')->name('view-component');
        Route::get('create-component/{id}', 'ComponentController@create')->name('create-component');
        Route::post('store-component', 'ComponentController@store')->name('store-component');

    });

//Shipping
    Route::group(['prefix' => 'shipping'], function () {
        /* Old shipping route */
        // Route::get('/shipping-location', 'ShippingController@add_location')->name('add-location');
        // Route::post('/shipping-location', 'ShippingController@post_location')->name('post_location');
        // Route::get('delete-location/{id}', 'ShippingController@delete_location')->name('delete-location');
        // Route::post('/add-country', 'ShippingController@add_country')->name('add-country');
        // Route::get('/add-country', 'ShippingController@add_country')->name('add-country');
        // Route::any('edit-country/{id?}', 'ShippingController@edit_country')->name('edit-country');
        // Route::get('delete-country/{id}', 'ShippingController@delete_country')->name('delete-country');
        // Route::post('/add-city', 'ShippingController@add_city')->name('add-city');
        // Route::get('/add-city', 'ShippingController@add_city')->name('add-city');
        // Route::post('edit-city/{id?}', 'ShippingController@edit_city')->name('edit-city');
        // Route::get('delete-city/{id}', 'ShippingController@delete_city')->name('delete-city');
        // Route::any('shipping-status', 'ShippingController@deal_status')->name('shipping-status');

        Route::get('/add-medium', 'ShippingController@add_medium')->name('add-medium');
        Route::post('/add-medium', 'ShippingController@add_medium')->name('add-medium');
        Route::get('delete-medium/{id}', 'ShippingController@delete_medium')->name('delete-medium');
        Route::any('edit-medium/{id?}', 'ShippingController@edit_medium')->name('edit-medium');
        Route::get('delete-medium/{id}', 'ShippingController@delete_medium')->name('delete-medium');

        Route::get('/add-weight', 'ShippingController@add_weight')->name('add-weight');
        Route::post('/add-weight', 'ShippingController@add_weight')->name('add-weight');
        Route::get('delete-weight/{id}', 'ShippingController@delete_weight')->name('delete-weight');
        Route::any('edit-weight/{id?}', 'ShippingController@edit_weight')->name('edit-weight');
        Route::get('delete-weight/{id}', 'ShippingController@delete_weight')->name('delete-weight');

        Route::get('/shipping-price', 'ShippingController@add_price')->name('add-price');
        Route::post('/shipping-price', 'ShippingController@post_price')->name('post_price');
        Route::get('delete-price/{id}', 'ShippingController@delete_price')->name('delete-price');
        Route::any('shipping-status', 'ShippingController@deal_status')->name('shipping-status');
        Route::post('/edit-price', 'ShippingController@edit_price')->name('edit-price');

        Route::get('/payment-method','PaymentController@payment_method')->name('payment.method');
        Route::get('/payment-method/{id?}','PaymentController@delete_method')->name('delete.payment');
        Route::post('/payment-method','PaymentController@payment_method')->name('payment.method');
        Route::any('payment-status', 'PaymentController@deal_status')->name('payment-status');


    });

    Route::group(['prefix' => 'orders'], function () {
        Route::get('/all-orders', 'OrderController@all_orders')->name('view-orders');
        Route::any('order-details/{id}', 'OrderController@order_details')->name('order-details');
        Route::any('order-delete/{id}', 'OrderController@order_delete')->name('order-delete');
        Route::any('order-status', 'OrderController@order_status')->name('order-status');
        Route::get('generate-pdf/{id}','OrderController@generatePDF')->name('pdf-generate');

    });

    Route::group(['prefix' => 'Setting'], function () {
        Route::get('setting-page', 'SettingController@index')->name('setting.index');
        Route::post('setting-page/update/{id}', 'SettingController@update')->name('setting.update');
        Route::get('logo-delete/{field}', 'SettingController@logoDelete')->name('logo.delete');
        Route::get('faq', 'SettingController@faq')->name('faq');
        Route::post('faq', 'SettingController@faq')->name('faq');
    });

    // Blog routes
    Route::group(['prefix' => 'blog'], function () {
        Route::get('/all-blogs', 'BlogController@all_blogs')->name('all-blogs');
        Route::get('/add-blog', 'BlogController@add_blog')->name('add-blog');
        Route::post('/add-blog', 'BlogController@add_blog')->name('add-blog');
        Route::get('/delete-blog/{id}', 'BlogController@delete_blog')->name('delete-blog');
        Route::any('edit-blog/{id?}', 'BlogController@edit_blog')->name('edit-blog');
        //Route::post('/edit-blog', 'BlogController@edit_blog')->name('edit-blog');
    });

    // Quotation routes
    Route::group(['prefix' => 'quotation'], function () {
        Route::get('/delete-quotation/{id}', 'QuotationController@delete_quotation')->name('delete-quotation');
        Route::get('/view-quotation/{id}/{uri}', 'QuotationController@view_quotation')->name('view-quotation');
        Route::get('{uri}', 'QuotationController@quotation_all')->where('uri', 'product|service')->name('quotation-all');
        //Route::post('/edit-blog', 'BlogController@edit_blog')->name('edit-blog');
    });

    // Review routes
    Route::group(['prefix' => 'review'], function () {
        Route::get('/all-review/{id}', 'ReviewController@all_review')->name('all-review');
        Route::get('/delete-review/{id}', 'ReviewController@delete_review')->name('delete-review');
        Route::get('/update-review/{id}/{value}', 'ReviewController@update_review')->name('update-review');
        //Route::post('/edit-blog', 'BlogController@edit_blog')->name('edit-blog');
    });
    //Subir Routes
    Route::resources([
        'banner'=>'BannerController'
    ]);
    Route::resource('brand-discounts', 'BrandDiscountController'::class);

    Route::get('banner/{id}/destroy','BannerController@destroy')->name('banner.delete');
});



