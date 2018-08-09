<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\View;
use App\Http\Middleware\BlogUser;
use Illuminate\Http\Request;
class BlogUserController extends ApiController
{
    /**
     * [用户登录接口]
     * @param  [number] $id [id]
     * @author 姚发前
     * @throws Exception
     * @access public
     * @return [json]     [data]
     */
    public function BackendUserloginDetail(Request $request)
    {
        $data = BlogUser::BackendUserloginDetail($this->request);
        return $data;
    }
}
