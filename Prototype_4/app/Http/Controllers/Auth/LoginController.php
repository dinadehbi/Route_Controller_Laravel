<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function logout(Request $request)
    {
        // Logout the user
        Auth::logout();

        // Invalidate the session to clear any session data
        $request->session()->invalidate();

        // Regenerate the session token to prevent session fixation attacks
        $request->session()->regenerateToken();

        // Redirect the user to the home page (or wherever you want)
        return redirect('/');
    }
}
