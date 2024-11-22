<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Mon Blog - @yield('title')</title>
</head>
<body>
    <header>
        <h1>Mon Blog</h1>
        <nav>
            <a href="{{ route('articles.index') }}">Accueil</a>
            <a href="{{ route('articles.create') }}">Créer un Article</a>
        </nav>
    </header>

    @yield('content')

    @yield('sidebar')  <!-- Cette section sera remplacée dans les vues qui l'utilisent -->

    <footer>
        <p>© 2024 Mon Blog Minimaliste</p>
    </footer>
</body>

</html>
