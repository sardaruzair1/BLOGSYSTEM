@extends('layouts.app')
@section('content')
<div class="container">
    <form action="{{route('upload_blog')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Blog Title</label>
            <input name="title" type="text" class="form-control" id="exampleFormControlInput1" placeholder="title here..">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Blog Content</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="content"></textarea>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Blog Image/label>
                <input type="file" name="image" class="form-control">
        </div>
        <button class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
