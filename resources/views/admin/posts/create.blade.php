@extends('layouts.app')


@section('content')
    <div class="container">

        <form method="POST" action="{{ route('admin.posts.store') }}">
            @csrf
            <div class="form-group">
                <label for="title">Post title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="title">
            </div>
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group">
                <label for="slug">Slug</label>
                <input type="text" class="form-control" id="slug" name="slug" placeholder="slug">
            </div>
            @error('slug')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group">
                <label for="content">Description</label>
                <textarea class="form-control" id="content" rows="4" placeholder="content" name="content"></textarea>
            </div>
            @error('content')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <a class="btn btn-dark" href="{{ url()->previous() }}">BACK</a>
    </div>
@endsection
