<?php

namespace Theo\UsersRetriver;
use Illuminate\Support\ServiceProvider;


class UsersRetriverServiceProvider extends ServiceProvider
{

    public function boot(){


    
    
    }
    public function register(){

$this->app->singleton( UsersRetriver::class, function(){
return new UsersRetriver();

});
        
        
        }

}