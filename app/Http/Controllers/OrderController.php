<?php

namespace App\Http\Controllers;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
    
        return view('admin.order.recent.index');
    }
    public function show()
    {
    
        return view('admin.order.recent.command');
    }
    public function edit()
    {
    
        return view('admin.order.recent.edit');
    }
}
