<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use  App\Models\User;
use SebastianBergmann\Type\VoidType;
use App\Models\contact;

class AuthController extends Controller

{
    
    public function login(Request $request)
    {
    //     $userName = "hussein";
    //     $userpas = "123";

    session_start();   
        
    //    if ($request->has('inlog')) {
    //        echo $request->input('username');
    //        echo $request->input('password');
    //         if ($request->input('username') == $userName && $request->input('password') == $userpas) {
    //             return redirect('/dash'); // Doorsturen naar "/dash" na succesvolle login
    //         } else {
    //             return "onjuiste gegevens";
    //         }
    //    }
    // $credentials = $request->only('name', 'password');

    // if (Auth::attempt($credentials)) {
    //     // Authenticated successfully
    //     return redirect('/dash');
    // } else {
    //     // Authentication failed
    //     return "Onjuiste gegevens";
    // }
    $users = User::all();

if ($request->has('inlog')){
    $username = $request->input('username');
    $password = $request->input('password');

    foreach ($users as $user) {
        $userName = $user->name;
        $userpas = $user->password;

        if ($username == $userName && $password == $userpas) {
            $_SESSION['admin_logged_in'] = true;
            return redirect('/dash');
            
           
        }
    }

    echo "<script>alert('Onjuiste gegevens'); window.location='/admin';</script>";
}
    }


    // contact function

    public function contact(Request $request){
        if($request->has('verzenden')){
        $menu = new contact;
        $menu->name =  $request->input( 'name' );
        $menu->email = $request->input( 'email' );
        $menu->massage = $request->input( 'message' );
        // $menu->foto = $request->input( 'afbeelding' );
        $menu->save();
        
        return redirect('/');
        }
    }
    public function showmassage(){
        $pageTitle = "Massage";
        $massage = contact::all();
        return view('massage', compact('pageTitle', 'massage'));
    }
   
}

