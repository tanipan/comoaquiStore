<?php

namespace App\Http\Controllers;
use App\Models\CreatePlate;
use Illuminate\Http\Request;

class CreatePlateController extends Controller
{
    public function index()
    {
        return view('admin.letter.createPlate.index');
    }
}
