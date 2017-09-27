<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{


  public function index(){
    return('comments.index');
  }


  public function show(){
    return('comments.show');
}

  public function store(){
    return('comments.store');
}


}
