<?php

namespace App\Http\Controllers;
use App\Models\Rejected;
use Illuminate\Http\Request;

class RejectedController extends Controller
{
    public function index()
    {
        return view('admin/order/rejected.index');
    }
    public function show()
    {
        return view('admin/order/rejected.rejected');
    }
}
