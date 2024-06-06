<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\user;
use Illuminate\Support\Facades\hash;


class RegisterController extends Controller
{
    public function register(Request $request){


            $validated = $request->validate([
                    'first_name' => 'required|max:25|min:3',
                    'last_name' => 'required|max:25|min:3',
                    'email' => 'required|email|unique:users',
                    'password' => 'required|max:15|min:3',
                    'mo_no' => 'required|digits:10|integer',
            ]);



if($request->file('image')){
    $image = $request->file('image');
    $img_name = rand(1000,9999). time().$image->getClientOriginalName();
    $image->move('images/', $img_name);
    $img_name = 'images/' . $img_name;
}
        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->mo_no = $request->mo_no;
        $user->gender = $request->gender;
        $user->city_id = $request->city_id;
        $user->hobby = ($request->hobby) ? implode(',',$request->hobby) : null;
        $user->image = isset($img_name) ? $img_name : null;
        $user->save();

         return redirect('/')->with('success', "user created successfully");

    }
}
