@extends('layouts.app')

@section('content')
    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <form method="POST" action="/contact">
        @csrf
        <div>
            <label for="name">Nom :</label>
            <input type="text" name="name" id="name" required>
        </div>
        <div>
            <label for="email">Email :</label>
            <input type="email" name="email" id="email" required>
        </div>
        <div>
            <label for="message">Message :</label>
            <textarea name="message" id="message" required></textarea>
        </div>
        <button type="submit">Envoyer</button>
    </form>
@endsection