@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <h1>Blog Post Details</h1>
            <hr>
            
            <h2>{{$blog->judul}}</h2>
            <p>
                {{$blog->deskripsi}}
            </p>

        </div>
    </div>
</div>
@endsection
