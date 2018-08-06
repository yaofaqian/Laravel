<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use App\Http\Models\Admin;
use App\Http\Models\User;
class UserController extends CommonController
{
    public function user($id)
    {
        $data = User::getUser($id);
        return view('user.profile',['data' => $data]);
    }
}
