@extends('layouts.app')

@section('content')
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
@endsection
