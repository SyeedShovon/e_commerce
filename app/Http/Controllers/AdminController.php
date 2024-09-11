<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use PhpParser\Builder\Function_;

class AdminController extends Controller
{
    public function index(){
        return view("admin.category");
    }

    public function add_category(Request $request){
        $category = new Category;
        $category->category_name = $request->category_name_input;
        $category->save();

        return redirect()->back()->with('message','Added successfully');
    }
}
