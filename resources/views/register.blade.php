<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<style>
  .register-box{
    width: 500px;
            border: solid;
            padding: 30px;
  }
  .main{
            height: 100vh;
            box-sizing: border-box;
        }
    .alert-danger{
        width: 500px;
    }
    
</style>
<body>
<div class="main d-flex flex-column justify-content-center align-items-center">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
       
   @endif
    <div class="register-box">
        <form action="" method="POST">
            @csrf
           <div>
                <label for="username" class="form-label">username</label>
                <input class="form-control" type="text" name="username" id="username" placeholder="masukkan username anda">
           </div>
           <div>
            <label for="password" class="form-label">Password</label>
            <input  type="password" class="form-control" name="password" id="password" placeholder="Masukkan password" required>
           </div>
           <div>
            <label for="phone" class="form-label">No telp</label>
            <input type="text" class="form-control" name="phone" id="phone" placeholder="Masukkan nomor telp anda">
           </div>
           <div>
            <label for="adress" class="form-label">Alamat</label>
           <textarea name="address" id="address" class="form-control" cols="5" rows="5" required></textarea>
           </div>
           <div>
            <button type="submit" class="btn btn-primary form-control" style="margin-top: 10px;">Register</button>
           </div>
           <div class="d-flex justify-content-center">
            sudah mempunyai akun?<a href="/login">Login</a>
           </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</div>
</body>
</html>