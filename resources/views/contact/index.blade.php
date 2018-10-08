<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Contact Page</title>
</head>
<body>
    <div class="container">

        <form action="/contact" method="POST">
            {{csrf_field()}}
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
                <small id="emailText" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label for="surname">Surname</label>
                <input type="text" class="form-control" id="surname" name="surname" placeholder="Enter Surname">
            </div>
            <div class="form-group">
                <label for="phone">Telephone Number</label>
                <input type="tel" class="form-control" id="phone" name="phone" >
            </div>
            <div class="form-group">
                <label for="subject">Subject: </label>
                <input type="text" class="form-control" name="subject" placeholder="Subject Here">
            </div>
            <div class="form-group">
                <label for="body">Your Message Here: </label>
                <textarea name="body" class="form-control" ></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
