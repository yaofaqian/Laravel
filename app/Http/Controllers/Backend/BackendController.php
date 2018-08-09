<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Support\Facades\View;
class BackendController extends BaseBackendController
{
    public function index()
    {
        return view('backend.index');
    }
}
