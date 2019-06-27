@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <h1>Blog Post Create</h1>
            <hr>

            <form action="{{route('blog.store')}}" method="POST">
                @csrf
                {{-- @method('PATCH') --}}

                <div class="form-group">
                    <input type="text" class="form-control" name="judul" placeholder="judul" required value="{{old('judul')}}">
                </div>
                <div class="form-group">
                    <textarea name="deskripsi" id="" cols="30" rows="10" class="form-control" placeholder="Deskripsi" required></textarea>
                </div>
                <button class="btn btn-success">Save</button>
            </form>

        </div>
    </div>
</div>
@endsection
