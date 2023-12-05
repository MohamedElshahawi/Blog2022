<?php

namespace App\Providers;

use App\View\Composers\MainSideBarComposer;
use App\View\Composers\SidebarComposer;
use Illuminate\Support\Facades\View;

use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('layouts.inc2.sec-sidebar', SidebarComposer::class);
        View::composer('layouts.inc2.main-sidebar', MainSideBarComposer::class);
        View::composer('layouts.inc2.master', MainSideBarComposer::class);
        View::composer('website.contact', MainSideBarComposer::class);
        View::composer('website.about', MainSideBarComposer::class);

    }
}
