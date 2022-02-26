<?php

namespace App\Http\Controllers;
use App\Models\InKitchen;
use Illuminate\Http\Request;

class InKitchenController extends Controller
{
    public function index()
    {
    
        return view('admin/order/inKitchen.index');
    }
}
