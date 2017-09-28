<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ThreadsController extends Controller
{




      public function index(){
        $threads = DB::table('threads')->get();

        return view('threads.index',compact('threads'));
      }




      public function create(){

      return view('threads.create');
    }




    public function show($id){

      $thread = DB::table('threads')->where('id', $id)->first();
      // dd($thread);

      return view('threads.show', compact('thread'));
    }

    public function store(){
      dd('Store method');
    }
}
