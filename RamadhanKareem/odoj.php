<?php

include "database.php";

$query = "SELECT *FROM odoj";
$data = $con->prepare($query);
$data->execute();

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
  <body class="bg-light" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="dashboard.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="jadwal solat.php">Jadwal Solat</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="odoj.php">ODOJ</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <a href="index.php" class= "btn btn-danger">Kembali</a>
    </form>
  </div>
</nav>
    <div class="container mt-5">
      <div class="card">
        <div class="card-body">

    <img src = "https://i.ytimg.com/vi/kO0jE9s8K60/maxresdefault.jpg" width ="100%">
    <h1>ONE DAY ONE JUZ</h1>
    <h3>MEMBER TERDAFTAR</h3>
    <a href="tambah.php" class="btn btn-info">Tambah data</a>
        <table class = "table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAMA</th>
                    <th>ALAMAT</th>
                    <th>surah</th>
                    <th>edit</th>
                    <th>delete</th>
                   
                </tr>
              </thead>
            <tbody>
                <?php

                while ($user = $data->fetch()) {  ?>

                <tr>
                   <td><?= $user['id'] ?></td>
                   <td><?= $user['nama'] ?></td>
                   <td><?= $user['alamat'] ?></td>
                   <td><?= $user['surah'] ?></td>
                   <td><a href="edit.php?id=<?= $user['id']?>">Edit</a></td>
                   <td><a href="delete.php?id=<?= $user['id']?>">Delete</a></td>
                </tr>
                 <?php } ?> 

                 </tbody>
                </table>
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