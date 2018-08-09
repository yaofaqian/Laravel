<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\CommonController;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
class BaseBackendController extends CommonController
{
    public function __construct()
    {
        if(\Auth::check() == false){
            redirect('/login');
        }
    }
}
