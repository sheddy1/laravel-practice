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
                <form action="{{ route('auth.check') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="enter email adress" value="{{ old('email') }}">
                        <span class="text-danger">@error ('email') {{ $message }} @enderror </span>
                    </div><br>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="text" class="form-control" name="password" placeholder="enter Password" value="{{ old('password') }}">
                        span class="text-danger">@error ('password') {{ $message }} @enderror</span>
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
