<div class="article-card">
    <h3>{{ $article->title }}</h3>
    <p>{{ Str::limit($article->content, 100) }}</p>
    <a href="{{ route('articles.show', $article->id) }}">Lire la suite</a>
</div>
