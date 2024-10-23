<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('nombre_de_tu_vista'); // Cambia esto por el nombre de la vista que contiene tu formulario.
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Autenticación exitosa, redirige a la ruta deseada
            return redirect()->intended('ruta_deseada'); // Cambia esto por la ruta a la que quieras redirigir.
        }

        // Autenticación fallida, redirige de nuevo con un mensaje de error
        return back()->withErrors([
            'email' => 'Las credenciales no coinciden con nuestros registros.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/'); // Cambia esto por la ruta a la que quieras redirigir después de cerrar sesión.
    }
}

