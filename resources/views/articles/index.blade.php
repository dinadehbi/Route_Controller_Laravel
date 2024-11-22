@extends('layouts.app')

@section('title', 'Liste des Articles')

@section('content')

        @include('partials.flash-message')


    <h2>Liste des Articles</h2>
    
    @if($articles->count())
            @foreach ($articles as $article)
              
                    <x-article-card :article="$article" />
               
            @endforeach
    @else
        <p>Aucun article trouvé.</p>
    @endif
@endsection

