<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        .main{
            height: 100vh;
            box-sizing: border-box;
        }
        .login-box{
            width: 500px;
            border: solid;
            padding: 30px;
        }
        form div{
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
  <div class="main d-flex flex-column justify-content-center align-items-center">
   @if (session('status'))
    <div class="alert alert-danger">
        {{ session('message') }}
    </div>
       
   @endif
    <div class="login-box">
        <form action="" method="post">
            @csrf
            <div>
                <label class="form-label" for="username">username</label>
                <input class="form-control" type="text" name="username" id="username" required>
            </div>
            <div>
                <label class="form-label" for="password">password</label>
                <input class="form-control" type="password" name="password" id="password" required>
            </div>
            <div>
                <button type="submit" class="btn btn-primary form-control">Login</button>
            </div>
            <div class="d-flex justify-content-center">
                belum punya akun?<a href="/register">Sign Up</a>
            </div>
        </form>
    </div>
  </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>