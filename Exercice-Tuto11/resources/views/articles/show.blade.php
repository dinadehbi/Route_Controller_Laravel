<h3>Tags de l'article : {{ $article->title }}</h3>
<ul>
    @foreach($article->tags as $tag)
        <li>
            {{ $tag->name }} - {{ $tag->pivot->description }}
        </li>
    @endforeach
</ul>
