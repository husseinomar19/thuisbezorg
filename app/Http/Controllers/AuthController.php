<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $userName = "Hussein";
        $userpas = "123";
        
        if ($request->has('inlog')) {
            if ($request->input('username') === $userName && $request->input('password') === $userpas) {
                return redirect('/dash'); // Doorsturen naar "/dash" na succesvolle login
            } else {
                return "onjuiste gegevens";
            }
        }
        
        // Voeg hier eventueel extra logica toe voor het weergeven van het inlogformulier
    }
}
