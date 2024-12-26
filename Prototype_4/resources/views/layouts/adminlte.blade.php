<!-- Assuming you are extending AdminLTE layout in your view -->
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@endsection

@section('content')
    <p>Welcome to the Admin Dashboard!</p>
@endsection

@section('adminlte_navbar')
    <!-- Add a new item to the navbar -->
    <li class="nav-item">
        <a href="{{ url('/') }}" class="nav-link">
            <i class="fas fa-home"></i>
            <p>Home</p>
        </a>
    </li>
    <!-- You can add more links below -->
    <li class="nav-item">
        <a href="{{ route('articles.index') }}" class="nav-link">
            <i class="fas fa-newspaper"></i>
            <p>Articles</p>
        </a>
    </li>
@endsection
