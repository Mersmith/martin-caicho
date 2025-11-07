<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Models\Menu;

class LayoutWebServiceProvider extends ServiceProvider
{
    public function boot()
    {
        View::composer('layouts.app', function ($view) {
            $menus = Menu::whereNull('parent_id')
                ->where('estado', true)
                ->orderBy('orden')
                ->get();

            $view->with('menus', $menus);
        });
    }
}
