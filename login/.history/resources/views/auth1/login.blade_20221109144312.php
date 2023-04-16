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
                <form action="" method="post">
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
                        Login
                    </button>
                    <br>
                    <a href="{{ route('auth.register') }}">I dont have and account create one</a>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
