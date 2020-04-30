<?php

include "database.php";

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$surah = $_POST['surah'];

$query = "INSERT INTO odoj  VALUES (null,'$nama','$alamat','$surah' )";
$data = $con->prepare($query);
$data->execute();

header("Location: odoj.php");

?>