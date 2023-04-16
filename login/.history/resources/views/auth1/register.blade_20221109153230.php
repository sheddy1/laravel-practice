<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('bootstrap') }}">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset">
                <h4>Login | Custom Auth</h4><br>
                <form action="{{ route('auth.save') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="enter name please">
                    </div><br>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="enter email adress">
                    </div><br>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="text" class="form-control" name="password" placeholder="enter Password">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-block btn primary">
                        Register
                    </button>
                    <br>
                    <a href="{{ route('auth.login') }}">I have an account sign in</a>
                </form>


            </div>
        </div>
    </div>

</body>
</html>
