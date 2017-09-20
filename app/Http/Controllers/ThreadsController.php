<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ThreadsController extends Controller
{




      public function index(){
        $threads = DB::select('select * from threads');


        return view('threads.index',compact('threads'));
      }




      public function create(){

      $tasks = [
      ['title' => 'Fara ut i bud', 'complete' => true, 'anchor' => 'http://bonus.is'],
      ['title' => 'Kaupa nammi', 'complete' => false, 'anchor' => 'http://ungo.is/'],
      ['title' => 'Fara i gymmid', 'complete' => true, 'anchor' => 'http://sporthusid.is'],
      ['title' => 'Þrifa husid', 'complete' => false, 'anchor' => 'http://þrif.is'],
      ['title' => 'Kaupa dót', 'complete' => true, 'anchor' => 'https://www.toysrus.is/']
    ];

      return view('threads.create', compact('tasks'));
    }




    public function show($id){

      $thread = DB::select('select * from threads where id=?' , [$id]);
      // dd($thread);

      return view('threads.show', compact('thread'));
    }
}
