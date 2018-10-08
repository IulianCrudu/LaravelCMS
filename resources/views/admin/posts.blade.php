@extends('admin.master')

@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

        <div class=" align-items-center pt-3 pb-2 mb-3 border-bottom">

            <h1 >Posts page</h1>
            <a href="/posts/add" class="btn btn-primary">Add Post</a>
            <hr>
            <div class="list-group-item">
                @foreach($posts as $post)

                    <div class="list-group">
                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a> by {{$post->user->name}}</h3>
                        <h5>Created at: {{$post->created_at->toFormattedDateString()}}</h5>
                        <p>{{$post->body}}</p>
                    </div>
                    <hr>

                @endforeach
            </div>
        </div>
    </main>
@endsection
