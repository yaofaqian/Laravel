<?php

namespace App\Http\Middleware;

use App\Http\Models\UsercenterContent;
class Usercenter extends BaseMiddleware
{
    public static function BackendUsercenterContentloginDetail($postdata)
    {
        $data = UsercenterContent::BackendUsercenterContentloginDetail($postdata);
        return $data;
    }
}
