<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $userName = "hussein";
        $userpas = "123";

        
        
       if ($request->has('inlog')) {
           echo $request->input('username');
           echo $request->input('password');
            if ($request->input('username') == $userName && $request->input('password') == $userpas) {
                return redirect('/dash'); // Doorsturen naar "/dash" na succesvolle login
            } else {
                return "onjuiste gegevens";
            }
       }
        
        
    }
}
