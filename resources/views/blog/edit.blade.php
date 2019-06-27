@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <h1>Blog Post Update</h1>
            <hr>
            
            <form action="{{route('blog.update', $blog->id)}}" method="POST">
                @csrf
                @method('PATCH')

                <div class="form-group">
                    <input type="text" class="form-control" name="judul" placeholder="judul" required value="{{$blog->judul}}">
                </div>
                <div class="form-group">
                    <textarea name="deskripsi" id="" cols="30" rows="10" class="form-control" placeholder="Deskripsi">{{$blog->judul}}</textarea>
                </div>
                <button class="btn btn-success">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
