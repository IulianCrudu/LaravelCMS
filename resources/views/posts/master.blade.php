<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/blog.css">
    <title>Add Post</title>
</head>
<body>
@include ('layouts.nav')

<main class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <br>
    <br>
    <div class="align-items-center pt-3 pb-2 mb-3 border-bottom">
        @yield('content')
    </div>
</main>

</body>
</html>
