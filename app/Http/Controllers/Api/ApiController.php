<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\View;
use App\Http\Controllers\CommonController;
use Illuminate\Http\Request;
class ApiController extends CommonController
{
    public $request;
    public function __construct(Request $request)
    {
        $this->request = $request;
    }
}
