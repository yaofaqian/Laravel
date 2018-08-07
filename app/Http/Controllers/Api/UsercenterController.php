<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\View;
use App\Http\Middleware\Usercenter;
use Illuminate\Http\Request;
class UsercenterController extends ApiController
{
    public function BackendUsercenterContentloginDetail(Request $request)
    {
        $data = Usercenter::BackendUsercenterContentloginDetail($this->request);
        return $data;
    }
}
