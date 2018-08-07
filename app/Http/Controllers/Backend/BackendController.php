<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\CommonController;
class BackendController extends CommonController
{
    public function index()
    {
        echo "this is backend";
        //return view('frontend.index',['data' => $data]);
    }
}
