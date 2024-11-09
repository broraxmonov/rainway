<!-- resources/views/login.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/login.css">

  <title>Railwaylogin</title>
</head>
<body>

  <div class="login-box">
    <h2>Kirish</h2>
   
    <form action="{{ route('login') }}" method="POST">

    
    <div class="user-box">
        <input type="text" name="stiffname" required="">
        <label>Familiyangizni kiriting</label>
      </div>
      <div class="user-box">
        <input type="text" name="login" required="">
        <label>Login</label>
      </div>
      <div class="user-box">
        <input type="password" name="password" required="">
        <label>Parol</label>
      </div>
      <div class="buttonn">
        <button type="submit" class="btn btn-success ">Keyingisi</button>
      </div>
    </form>
  </div>

</body>
</html>
