<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class questionController extends Controller
{
    //
    public function index()
    {
        return 'This is the list of questions';
    }

    public function show()
    {
        return 'This is a detail of a question';
    }

    // public function test()
    // {
    //     DB::table('questions')
    // }
}
