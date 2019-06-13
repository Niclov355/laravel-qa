<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class questionController extends Controller
{
    //
    public function index()
    {
        // return 'This is the list of questions';
        $table = DB::table('questions')
            ->orderBy('created_at','desc')
            ->get();
        var_dump($table);
    }

    public function show()
    {
        // return 'This is a detail of a question';
        
        $table = DB::table('questions')
            ->where('id', 1)
            ->get();
        var_dump($table);

        $table2= DB::table('answers')
        ->where('question_id',1)
        ->get();

        $result = $table2;
        var_dump($result);

        $table3 = DB::table('answers')
        ->orderBy('created_at','asc')
        ->get();
        var_dump($table3);


    }

    // public function test()
    // {
    //     DB::table('questions')
    // }
}
