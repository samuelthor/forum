<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
  public function index(){
    $profilethreads = DB::select('select * from threads');

    return view('profile.profile ',compact('profilethreads'));
  }


  public function threads(){

  $threadsinfo = [
    ['nafn' => 'Samúel Þór Traustason', ],
    ['published' => 'Laravel Controller', 'anchor' => 'https://laravel.com/docs/5.5/controllers' ],
    ['published' => 'Laravel 5.5', 'anchor' => 'https://laravel.com/docs/5.5/releases'],
    ['body' => 'Hvernig býr maður til controller í Laravel?', ],
    ['body' => 'Hver er munurinn á Laravel útgáfu 5.4 og 5.5?', ],
];

  return view('profile.profile', compact('threadsinfo'));
}


}
