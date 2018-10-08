@extends ('posts.master')

@section('content')
    <div class="col-sm-8 blog-main">
        <h1 >{{$post->title}}</h1>
        <h5 class="blog-post-meta">Created by: {{$post->user->name}}</h5>
        <p >{{$post->body}}</p>

        <hr>
        <div>
            <ul class="list-group">
                @foreach($post->comments as $comment)
                    <li class="list-group-item">
                        <strong>
                            {{$comment->created_at->diffForHumans()}}
                        </strong>
                        by
                        <i>
                            {{$comment->user->name}}
                        </i>

                        <p>{{$comment->body}}</p>
                    </li>
                @endforeach
            </ul>
        </div>
        <form action="/posts/{{$post->id}}/comments" method="POST">
            {{csrf_field()}}

            <div class="form-group">
                <label for="comment">Write Your Comment: </label>
                <textarea name="comment" class="form-control" required placeholder="Your Comment Here"></textarea>
            </div>

            <div class="form-group">
                <button class="btn btn-primary" type="submit">Add Comment</button>
            </div>
        </form>
    </div>
@endsection
