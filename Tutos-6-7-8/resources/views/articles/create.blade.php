{{-- @extends('layouts.app')

@section('content')
    <h1>Créer un Article</h1>
    <form action="{{ route('articles.store') }}" method="POST">
        @csrf
        <label for="title">Titre :</label>
        <input type="text" name="title" required>
        <label for="content">Contenu :</label>
        <textarea name="content" required></textarea>
        <button type="submit">Enregistrer</button>
    </form>
@endsection --}}


@extends('layouts.app')

@section('content')
    <h1>Créer ou Modifier un Article</h1>
    <form action="{{ isset($article) ? route('articles.update', $article->id) : route('articles.store') }}" method="POST">
        @csrf
        @if(isset($article))
            @method('PUT')
        @endif
        <label for="title">Titre :</label>
        <input type="text" name="title" value="{{ old('title', $article->title ?? '') }}" required>
        
        <label for="content">Contenu :</label>
        <textarea name="content" required>{{ old('content', $article->content ?? '') }}</textarea>
        
        <button type="submit">{{ isset($article) ? 'Mettre à jour' : 'Créer' }}</button>
    </form>
@endsection

