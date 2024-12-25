@extends('layouts.app')

@section('content')

@if(session('success'))

<p class="alert alert-succes" role="alert">{{session('success')}}</p>

@endif
<div>
    <form method="POST" action="{{url('/contact')}}">
        @csrf
        <h3>Contacter nous ! </h3>
        <label for="name">Nom :</label>
        <input type="text" name="name" required><br>
        <label for="">Email :</label>
        <input type="email" name="email" required><br>
        <label for="">Message</label>
        <textarea name="" id="" cols="30" rows="10"></textarea>
        <button type="submit">Envoyer</button>
    </form>
</div>

@endsection
