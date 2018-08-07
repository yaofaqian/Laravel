<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Support\Facades\View;
use App\Http\Controllers\CommonController;
class FrontendController extends CommonController
{
    public function index()
    {
        echo "this is frontend";
        //return view('frontend.index',['data' => $data]);
    }
}
