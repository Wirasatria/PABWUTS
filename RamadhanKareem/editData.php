<?php

include "database.php";

$id = $_GET['id'];

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$surah = $_POST['surah'];

$query = "UPDATE odoj SET nama = '$nama' , alamat = '$alamat' , surah = '$surah' WHERE id = '$id'";
$data = $con->prepare($query);
$data->execute();

header("Location: odoj.php");

?>