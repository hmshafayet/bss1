<?php

namespace App\Providers;
use App\Models\Borrow;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
 
        view()->composer('*', function ($view) 
        {
            if(auth()->user())
            {
                $borrowNotify=Borrow::where('user_id',auth()->user()->id)->where('status','Approved')
                ->where('is_seen',0)->get()->count();
              
                //...with this variable
                $view->with('notify', $borrowNotify );    
            }
          
        });  
      
       


    }
}
