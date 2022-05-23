@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>{{ $post->title }}</h1>
                <b>{{ $post->user->name }}</b>
                <small>{{ date('d/m/Y' , strtotime($post->created_at)) }}</small>

                {{-- if post updated --}}
                @if ($post->created_at != $post->updated_at)
                    <small>{{ date('d/m/Y' , strtotime($post->updated_at)) }}</small>
                @endif

                {{-- TODO: non trova la classe App/InfoUser --}}
                {{-- <b>{{ $post->user->infouser }}</b> --}}

                <p>{{ $post->content }}</p>
            </div>
        </div>
    </div>
@endsection
