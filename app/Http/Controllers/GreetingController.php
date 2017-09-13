<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingController extends Controller
{
    public function show(){
      $name = 'Samuel';
      return view('messages.hello', compact('name'));
    }
}
