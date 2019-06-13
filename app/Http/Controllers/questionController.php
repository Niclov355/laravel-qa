<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\questions;
use App\answers;

class questionController extends Controller
{
    //
    public function index()
    {
        // return 'This is the list of questions';
        $table = DB::table('questions')
            ->orderBy('created_at','desc')
            ->get();
        // var_dump($table);

        return $view = view('questions/index');

        // questions::orderBy('created_at', 'desc')->get();  /this is eloquent, does need $table
    }

    public function show()
    {
        // return 'This is a detail of a question';
        
        $table = DB::table('questions')
            ->where('id', 1)
            ->get();
        var_dump($table);

        // questions:: where('id', 1)->get();  /eloquent
        // dd($table->$answer);     /this shows us the result beacuse of what's in questions.php

        $table2= DB::table('answers')
        ->where('question_id', 1)
        ->get();

        // questions::where('question_id', 1)->get();  eloquent

        $result = $table2;
        var_dump($result);

        $table3 = DB::table('answers')
        ->orderBy('created_at','asc')
        ->get();
        var_dump($table3);

        // answers::orderBy('created_at', 'desc')->get(); eloquent
    }
}
