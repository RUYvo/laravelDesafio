<?php

// app/Http/Controllers/AuthController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
// app/Http/Controllers/AuthController.php

public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        // Autenticação bem-sucedida, redirecionar para a página inicial
        return redirect()->intended('/');
    }

    // Falha na autenticação, redirecionar de volta para o formulário de login
    return back()->withErrors([
        'email' => 'As credenciais fornecidas não são válidas.',
    ]);
}
}


