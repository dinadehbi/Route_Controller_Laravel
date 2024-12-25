<!-- resources/views/dashboard.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Bienvenue, {{ $user->name }}!</h1>
        <p>Voici votre tableau de bord.</p>
        <!-- Autres informations du tableau de bord -->
    </div>
@endsection
