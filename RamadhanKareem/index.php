<?php
include "database.php";

if (isset($_POST['login'])) {
  $email = $_POST['email'];
  $pass = $_POST['pass'];

$query = "SELECT * FROM user WHERE email = '$email'";
$data = $con->prepare($query);
$data->execute();

$user = $data->fetch();

$ketemu = $data->rowCount();

  if ($ketemu > 0) {
    var_dump($user['pass']);
    echo $pass;
    
    if ($pass = $user['pass']) {
     header("Location: dashboard.php");
    }
  }

}


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    
  </head>
  <body class="bg-light">

    <div class="container mt-5">
   
    <div class="card col-md-8 offset-2">
  <div class="card-header">
    Assalamualaikum , Silahkan Login
    </div>
  <div class="card-body">
  <h1 class = "text-center">Selamat Datang</h1>
  <form method="Post" action="">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="pass" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="text-center">
  
  <button type="submit" name="login" class="btn btn-primary ">Login</button>
  </div>
  
</form>
<a href="register.php">Create account?</a>
<a href = "dashboard.php">Try as Guest</a>
  </div>
</div>
  </div>
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>