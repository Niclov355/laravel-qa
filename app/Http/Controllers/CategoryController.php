<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CategoryController extends Controller
{
    //
    public function index()
    {
        $categories = DB::table('categories') //FROM `categories
        ->orderBy('name')                       //ORDER BY `name`
        ->get();                                //SELCT *

        $view = view('categories/index', compact('categories'));

        return $view;
    }
}
