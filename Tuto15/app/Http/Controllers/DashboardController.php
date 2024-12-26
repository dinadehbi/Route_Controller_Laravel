<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();  // Get the authenticated user

        // Ensure the user has the HasRoles trait
        if ($user->hasRole('admin')) {  // Check if the user has the 'admin' role
            return view('dashboard');  // Show the dashboard
        } else {
            return redirect()->route('home')->with('error', 'You do not have admin access.');
        }
    }
}