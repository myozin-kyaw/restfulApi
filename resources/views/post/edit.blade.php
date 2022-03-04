@extends('layouts.post')

@section('title')
    Edit Post
@endsection

@section('content')

    <div class="row">

        <div class="d-flex justify-content-between my-3">

            <h2>Edit Post Blade</h2>
            <a href="{{ route('posts.index') }}" class="btn btn-success">Back</a>

        </div>

        <form action="{{ route('posts.update', [$post->id]) }}" method="POST">
        @csrf
        @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="{{ $post->title }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" name="desc" class="form-control" id="description" placeholder="Description" value="{{ $post->description }}">
            </div>
            <div class="mb-3">
                <label for="author" class="form-label">Author Name</label>
                <input type="text" name="author" class="form-control" id="author" placeholder="Author Name" value="{{ $post->author }}">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Post</button>
            </div>

        </form>

    </div>

@endsection