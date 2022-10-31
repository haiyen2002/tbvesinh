<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
Auth::routes();

Route::group(
    [
        'prefix' => 'admin',
        'namespace' => 'Admin',
        'middleware' => ['admin'],
    ],
    function () {
         Route::get('/', 'AdminController@index')->name('admin');
         Route::get('/images-public', 'CkfinderController@index')->name('admin.get_images_public');
         Route::get('/images-pages', 'CkfinderController@pages')->name('admin.get_images_pages');
         Route::get('/images-products', 'CkfinderController@products')->name('admin.get_images_products');
         Route::post('/upload', 'UploadController@upload')->name('admin.upload');
         Route::post('/upload-pages', 'UploadController@uploadPages')->name('admin.upload_pages');
         Route::post('/upload-products', 'UploadController@uploadProducts')->name('admin.upload_image_products');
         Route::group(
            [
                'prefix' => 'users',
            ],
            function () {
                 Route::get('/', 'UserController@index')->name('admin.users');
                 Route::get('/create', 'UserController@create')->name('admin.users.create');
                 Route::post('/create', 'UserController@create')->name('admin.users.create');
                 Route::get('/edit/{id}', 'UserController@edit')->name('admin.users.edit');
                 Route::post('/edit/{id}', 'UserController@update')->name('admin.users.edit');
                 Route::get('/ban/{id}', 'UserController@ban')->name('admin.users.band');
                 Route::get('/delete/{id}', 'UserController@delete')->name('users.delete');
            },
        );
         Route::group(
            [
                'prefix' => 'categories',
            ],
            function () {
                 Route::get('/', 'CategoryController@index')->name('admin.categories');
                 Route::get('/create', 'CategoryController@create')->name('admin.create_category');
                 Route::post('/create', 'CategoryController@store')->name('admin.create_category');
                 Route::get('/edit/{id}', 'CategoryController@edit')->name('admin.edit_category');
                 Route::post('/update/{id}', 'CategoryController@update')->name('admin.update_category');
                 Route::get('/delete/{id}', 'CategoryController@delete')->name('admin.delete_category');
            },
        );
         Route::group(
            [
                'prefix' => 'brands',
            ],
            function () {
                 Route::get('/', 'BrandController@index')->name('admin.brands');
                 Route::get('/create', 'BrandController@create')->name('admin.create_brand');
                 Route::post('/create', 'BrandController@store')->name('admin.create_brand');
                 Route::get('/edit/{id}', 'BrandController@edit')->name('admin.edit_brand');
                 Route::post('/update/{id}', 'BrandController@update')->name('admin.update_brand');
                 Route::get('/delete/{id}', 'BrandController@delete')->name('admin.delete_brand');
            },
        );
         Route::group(
            [
                'prefix' => 'products',
            ],
            function () {
                 Route::get('/', 'ProductController@index')->name('admin.products');
                 Route::get('/create', 'ProductController@create')->name('admin.create_product');
                 Route::post('/create', 'ProductController@store')->name('admin.create_product');
                 Route::get('/edit/{id}', 'ProductController@edit')->name('admin.edit_product');
                 Route::post('/update/{id}', 'ProductController@update')->name('admin.edit_product');
                 Route::get('/delete/{id}', 'ProductController@delete')->name('admin.delete_product');
            },
        );
         Route::group(
            [
                'prefix' => 'orders',
            ],
            function () {
                 Route::get('/', 'OrderController@index')->name('admin.orders');
                 Route::get('/create', 'OrderController@create')->name('admin.create_order');
                 Route::post('/create', 'OrderController@create')->name('admin.create_order');
                 Route::get('/edit/{id}', 'OrderController@edit')->name('admin.edit_order');
                 Route::post('/edit/{id}', 'OrderController@edit')->name('admin.edit_order');
                 Route::get('/delete/{id}', 'OrderController@delete')->name('admin.delete_order');
            },
        );
        Route::group(
            [
                'prefix' => 'footerInfos',
            ],
            function () {
                 Route::get('/', 'FooterInfoController@index')->name('admin.footerInfos');
                 Route::get('/create', 'FooterInfoController@create')->name('admin.create_footerInfo');
                 Route::post('/create', 'FooterInfoController@store')->name('admin.create_footerInfo');
                 Route::get('/edit/{id}', 'FooterInfoController@edit')->name('admin.edit_footerInfo');
                 Route::post('/update/{id}', 'FooterInfoController@update')->name('admin.edit_footerInfo');
                 Route::get('/delete/{id}', 'FooterInfoController@delete')->name('admin.delete_footerInfo');
            },
        );
         Route::group(
            [
                'prefix' => 'slides',
            ],
            function () {
                 Route::get('/', 'SlideController@index')->name('admin.slides');
                 Route::get('/create', 'SlideController@create')->name('admin.create_slide');
                 Route::post('/create', 'SlideController@store')->name('admin.create_slide');
                 Route::get('/edit/{id}', 'SlideController@edit')->name('admin.edit_slide');
                 Route::post('/edit/{id}', 'SlideController@update')->name('admin.edit_slide');
                 Route::get('/delete/{id}', 'SlideController@delete')->name('admin.delete_slide');
            },
        );
         Route::group(
            [
                'prefix' => 'news',
            ],
            function () {
                 Route::get('/', 'NewsController@index')->name('admin.news');
                 Route::get('/create', 'NewsController@create')->name('admin.create_news');
                 Route::post('/store', 'NewsController@store')->name('admin.store_news');
                 Route::get('/edit/{news_id}', 'NewsController@edit')->name('admin.edit_news');
                 Route::post('/update/{news_id}', 'NewsController@update')->name('admin.update_news');
                 Route::get('/delete/{news_id}', 'NewsController@delete')->name('admin.delete_news');
            },
        );
         Route::group(
            [
                'prefix' => 'pages',
            ],
            function () {
                 Route::get('/', 'PageController@index')->name('admin.pages');
                 Route::get('/create', 'PageController@create')->name('admin.create_page');
                 Route::post('/store', 'PageController@store')->name('admin.store_page');
                 Route::get('/edit/{page_id}', 'PageController@edit')->name('admin.edit_page');
                 Route::post('/update/{page_id}', 'PageController@update')->name('admin.update_page');
                 Route::get('/delete/{page_id}', 'PageController@delete')->name('admin.delete_page');
            },
        );
         Route::group(
            [
                'prefix' => 'settings',
            ],
            function () {
                 Route::get('/', 'SettingController@index')->name('admin.site_settings');
                 Route::post('/save', 'SettingController@save')->name('admin.save_site_settings');
                 Route::group(
                    [
                        'prefix' => 'navs',
                    ],
                    function () {
                         Route::get('/', 'NavController@index')->name('admin.navs_manager');
                         Route::get('/create', 'NavController@create')->name('admin.create_nav');
                         Route::post('/save', 'NavController@save')->name('admin.create_nav');
                         Route::get('/edit/{id}', 'NavController@edit')->name('admin.edit_nav');
                         Route::post('/edit/{id}', 'NavController@update')->name('admin.edit_nav');
                         Route::get('/delete/{id}', 'NavController@delete')->name('admin.delete_nav');
                    },
                );
            },
        );
    },
);
Route::group(
    [
        'namespace' => 'Frontend',
    ],
    function () {
         Route::get('/', 'IndexController@index')->name('home');
         Route::group(
            [
                'prefix' => 'account',
            ],
            function () {
                 Route::get('/', 'IndexController@account')->name('home');
                 Route::get('/password', 'IndexController@password')->name('account_password');
                 Route::post('/update', 'IndexController@updateAccount')->name('account_update');
            },
        );
         Route::group(
            [
                'prefix' => 'categories',
            ],
            function () {
                 Route::get('/{category}', 'ProductController@category')->name('show_category');
                 Route::get('/', 'ProductController@index')->name('categories');
            },
        );
         Route::group(
            [
                'prefix' => 'products',
            ],
            function () {
                 Route::get('/', 'ProductController@index')->name('products');
                 Route::get('/brand/{slug}', 'ProductController@brand')->name('brand_product');
                 Route::get('/{slug}', 'ProductController@detail')->name('show_product');
            },
        );
         Route::group(
            [
                'prefix' => 'news',
            ],
            function () {
                 Route::get('/', 'NewsController@index')->name('news');
                 Route::get('/{slug}', 'NewsController@detail')->name('show_news');
            },
        );
         Route::group(
            [
                'prefix' => 'cart',
            ],
            function () {
                 Route::get('/', 'InvoiceController@index')->name('cart');
                 Route::post('/add', 'InvoiceController@addCart')->name('add_to_cart');
                 Route::get('/remove/{id}', 'InvoiceController@removeCart')->name('delete_from_cart');
            },
        );
         Route::get('/search', 'IndexController@search')->name('search');
         Route::get('/{page}', 'PageController@index')->name('page');
    },
);
