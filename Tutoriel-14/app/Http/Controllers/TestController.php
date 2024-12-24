<?php

namespace App\Http\Controllers;

use App\Services\RoleService;
use Illuminate\Http\Request;

class TestController extends Controller
{
    protected $roleService;

    public function __construct(RoleService $roleService)
    {
        $this->roleService = $roleService;
    }

    public function index(Request $request)
    {
        // Exemple simple bach njarbo le service
        $user = (object) ['role' => 'admin'];

        // Test de la méthode hasRole
        $hasRole = $this->roleService->hasRole('admin', $user);

        return response()->json(['hasRole' => $hasRole]);
    }
}
