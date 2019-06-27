@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-2">
            <h1>Menu</h1>
            <hr>
            <a href="{{route('blog.create')}}" class="">New Post</a>
        </div>
        <div class="col-md-10">
            <h1>Blog Post</h1>
            <hr>
            @foreach ($blog as $item)
                <h2>
                    <a href="{{route('blog.show', $item->id)}}">{{$item->judul}}</a>
                </h2>
                <p>
                    {{$item->deskripsi}}
                </p>
                <a href="{{route('blog.edit', $item->id)}}" class="btn btn-warning d-inline">Edit</a>
                <form action="{{route('blog.destroy', $item->id)}}" method="post" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                <hr>
            @endforeach
        </div>
    </div>
</div>
@endsection
