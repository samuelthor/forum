<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Thread;
use Validator;


class ThreadsController extends Controller
{




      public function index(){
        $threads = Thread::all();
        // $threads = DB::table('threads')->get();

        return view('threads.index',compact('threads'));
      }




      public function create(){

      return view('threads.create');
    }




    public function show($id){

      $thread = Thread::find($id);
      // $thread = DB::table('threads')->where('id', $id)->first();
      // dd($thread);

      return view('threads.show', compact('thread'));
    }

    public function store(Request $request){
      $thread = new Thread;
      $thread->title = $request->title;
      $thread->message = $request->message;
      $thread->eigandi = 1;

      $validator = Validator::make($request->all(), [
        'title' => 'required|unique:threads|max:40',
        'message' => 'required|min:20'
      ]);


      if ($validator->fails()){
        return redirect('/threads/create')
              ->withInput()
              ->withErrors($validator);
      }

      $thread->save();

      return redirect('/threads');
    }



}
