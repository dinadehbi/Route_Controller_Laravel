<form action="{{ route('articles.attachTags', $article->id) }}" method="POST">
    @csrf
    <label for="tags">Choisissez des tags :</label>
    @foreach($tags as $tag)
        <div>
            <input type="checkbox" name="tags[]" value="{{ $tag->id }}">
            <input type="text" name="descriptions[]" placeholder="Description">
            {{ $tag->name }}
        </div>
    @endforeach
    <button type="submit">Associer</button>
</form>
