<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Nav;
use App\Models\Category;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use App\Models\Site;
use App\Models\FooterInfo;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
        view()->composer('*',function($view) {
            $view->with('currentUser',Auth::user());
            $view->with('site',Site::getSite());
            $view->with('footerInfos',FooterInfo::all());
        });
        view()->composer('frontend.*',function($view) {
            $view->with('categoriesNav',Category::getAllAndMergeChildrentCategories());
            $view->with('headerNav',Nav::getAllAndMergeChildrentNavs());
        });
    }
}
