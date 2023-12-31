<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
</head>

<div class="main">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <h4>Login</h4>
                <form action="{{route('login-user')}}" method="post">
                    @if (Session::has('fail'))
                        <div class="alert alert-danger"> {{Session::get('fail')}} </div>
                    @endif
                    @csrf
                    <div class="form-group">
                        <label for="">Email</label>
                        <input class="form-control" placeholder="Enter Your email" type="email" name="email"
                            value="">
                        <span class="text-danger">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="form-group">
                        <label for="">password</label>
                        <input class="form-control" placeholder="Enter Your password" type="password" name="password"
                            value="">
                        <span class="text-danger">
                            @error('password')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group pt-3">
                        <button type="submit" class="btn btn-block btn-dark">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>
