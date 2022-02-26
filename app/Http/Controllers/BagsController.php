<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BagsController extends Controller
{
    public function bags()
    {
        return view('admin/order/delivered.bags');
    }
}
