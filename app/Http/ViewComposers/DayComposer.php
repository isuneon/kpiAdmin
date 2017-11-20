<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;

class DayComposer
{
    
    protected $user;

   
    public function __construct()
    {
        $this->user = session('user')[0];
    }

    
    public function compose(View $view)
    {
        $user = $this->user;
       
        $view->with(compact("user"));
    }
}