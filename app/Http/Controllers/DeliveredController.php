<?php

namespace App\Http\Controllers;
use App\Models\Delivered;
use Illuminate\Http\Request;

class DeliveredController extends Controller
{
    public function index()
    {
        return view('admin.order.delivered.index');
    }
 
}
