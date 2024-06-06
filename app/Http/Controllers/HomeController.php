<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    public function index(){
        $user = Auth::user();
        if(!$user){
            return redirect('/');
        }
return view ('home',compact('user'));
    }
}
