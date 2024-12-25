@extends('adminlte::page')

@section('title', 'Create Article')

@section('content_header')
    <h1>Create a New Article</h1>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Create New Article</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('articles.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea name="content" id="content" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label for="category_id">Category</label>
                    <select name="category_id" id="category_id" class="form-control" required>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
               
                <button type="submit" class="btn btn-success">Save Article</button>
            </form>
        </div>
    </div>
@endsection
