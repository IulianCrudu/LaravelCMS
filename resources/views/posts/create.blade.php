@extends('posts.master')

@section('content')
<form action="/posts" method="POST">
    {{csrf_field()}}
    <div class="form-group">
        <label for="title">Title: </label>
        <input type="text" required name="title" class="form-control">
    </div>
    <div class="form-group">
        <label for="title">Body: </label>
        <textarea name="body" class="form-control" required></textarea>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Add Post</button>
    </div>
</form>
@endsection('content')
