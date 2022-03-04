@extends('layouts.post')

@section('title')
    Posts
@endsection

@section('content')

    <div class="row">

        <div class="d-flex justify-content-between my-3">

            <h2>Post Blade</h2>
            <a href="{{ route('posts.create') }}" class="btn btn-success">Create</a>

        </div>

        @if (session('status'))
            <div class="alert alert-success my-3" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <table class="table">

            <thead>

                <tr>

                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Author</th>
                    <th scope="col">Action</th>

                </tr>
                
            </thead>

            <tbody>
                
                @if ($posts->count() == 0)

                    <tr>

                        <td>No posts here...</td>

                    </tr>
                
                @else

                    @foreach($posts as $post)

                        <tr>

                            <th scope="row">{{ $post->id }}</th>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->description }}</td>
                            <td>{{ $post->author }}</td>
                            <td>

                                <div class="d-flex">

                                    <div class="me-3">
                                        <a href="{{ route('posts.edit', [$post->id]) }}" class="btn btn-warning">Edit</a>
                                    </div>
                                    <div>
                                        <form action="{{ route('posts.destroy', [$post->id]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>

                                        </form>
                                    </div>

                                </div>

                            </td>

                        </tr>

                    @endforeach
                
                @endif

            </tbody>

        </table>

    </div>

@endsection