@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <a class="btn btn-secondary" href="{{ route('admin.posts.myindex') }}">My Posts</a>

                    <a class="btn btn-primary" href="{{ route('admin.posts.create') }}">New Post</a>
                </div>
            </div>
        </div>
    </div>

    {{-- last post created/updated --}}
    <div class="row">
        <div class="col">
            @foreach ($posts as $post)
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1>{{ $post->title }}</h1>
                        <small>{{ date('d/m/Y' , strtotime($post->created_at)) }}</small>

                        {{-- if post updated --}}
                        @if ($post->created_at != $post->updated_at)
                            <small>{{ date('d/m/Y' , strtotime($post->updated_at)) }}</small>
                        @endif
                        <p>{{ $post->content }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        {{ $posts->links() }}
    </div>
</div>
@endsection
