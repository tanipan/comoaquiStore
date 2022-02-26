<?php

namespace App\Http\Controllers;
use App\Models\CreateCategory;
use Illuminate\Http\Request;

class CreateCategoryController extends Controller
{
    public function index()
    {
        return view('admin.letter.createCategory.index');
    }
}
