<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThreadsController extends Controller
{
      public function index(){
        $threads = [
          ['title' => 'Titill A', 'body' => 'Þetta er A'],
          ['title' => 'Titill B', 'body' => 'Þetta er B'],
          ['title' => 'Titill C', 'body' => 'Þetta er C']
        ];
        return view('threads.index',compact('threads'));
      }

      public function create(){

      $countries = ['Ísland','Ísland','Írland','Ísland','Írland'];

      return view('threads.create', compact('countries'));
    }
}
