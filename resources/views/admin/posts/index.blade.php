@extends('layouts.app')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Slug</th>
                <th scope="col">Created_at</th>
                <th scope="col">Updated_at</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>

                    <th scope="row">{{ $post->id }}</th>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->slug }}</td>
                    <td>{{ date('d/m/Y', strtotime($post->created_at)) }}</td>
                    <td>{{ date('d/m/Y', strtotime($post->updated_at)) }}</td>

                    <td><a href="{{ route('admin.posts.show', $post) }}">SHOW</a></td>
                    <td><a href="{{ route('admin.posts.edit', $post) }}">EDIT</a></td>
                    <td><button>DELETE</button></td>

                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $posts->links() }}

@endsection
