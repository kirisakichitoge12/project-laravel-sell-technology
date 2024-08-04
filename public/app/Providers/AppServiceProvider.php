<?php

namespace App\Providers;

use App\Models\Cart;
use App\Models\Products_Type;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        
        view()->composer(['frontend/layouts/header','frontend/pages/cart','frontend/pages/thanhtoan'],function($view){
            if(Session('cart')){
                $old_cart=Session::get('cart');
                $cart =new Cart($old_cart);
                $view->with(['cart'=>Session::get('cart'),'product_cart'=>$cart->items,'totalprice'=>$cart->totalPrice,'totalqty'=>$cart->totalQty]);
            }
         });
         $danhmucsp = Products_Type::all();
         View::share("danhmucsp", $danhmucsp);
    }

}
