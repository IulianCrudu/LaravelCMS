@extends('admin.master')

@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class=" align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Users Page</h1>
            <hr>
            <form action="/users" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="name">Name: </label>
                    <input type="text" name="name" class="form-control"required>
                </div>
                <div class="form-group">
                    <label for="name">Email: </label>
                    <input type="email" name="email" class="form-control"required>
                </div>
                <div class="form-group">
                    <label for="password">Password: </label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>

                <div class="form-group">
                    <label for="password_confirmation">Password Confirmation: </label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add User</button>
                </div>
            </form>
            <ul class="list-group">
                @foreach($users as $user)
                    <div class="list-group-item">
                        {{--<p >{{$user->name}}</p>--}}
                        <form action="/users/{{$user->id}}" method="POST">
                            @method('PATCH')
                            {{csrf_field()}}
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" value="{{$user->name}}" required>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" value="{{$user->email}}" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary">Edit</button>
                            </div>
                        </form>
                        <form action="/users/{{$user->id}}" method="POST">
                            @method('DELETE')
                            {{csrf_field()}}
                            <div class="form-group">
                                <button type="submit" class="btn btn-danger form-control">Delete</button>

                            </div>
                        </form>
                    </div>
                @endforeach
            </ul>
        </div>
    </main>
@endsection
