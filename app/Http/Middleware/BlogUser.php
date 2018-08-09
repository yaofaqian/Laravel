<?php

namespace App\Http\Middleware;

use App\Http\Models\User;
use Illuminate\Http\Request;
class BlogUser extends BaseMiddleware
{
    /**
     * [用户登录接口]
     * @param  [number] $id [id]
     * @author 姚发前
     * @throws Exception
     * @access public
     * @return [json]     [data]
     */
    public static function BackendUserloginDetail($postdata)
    {

        $data = $request->session()->get($postdata['username']);
        if(empty($data))
        {
            $data = User::BackendUserloginDetail($postdata);
            if($data)
            {
                $request->session()->put($data['username'], $data);
            }
        }
        return $data;
    }
}
