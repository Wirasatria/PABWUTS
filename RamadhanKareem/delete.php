<?php

include "database.php";

$id = $_GET['id'];

$query = "DELETE FROM odoj WHERE id = '$id'";
$data = $con->prepare($query);
$data->execute();

header("Location: odoj.php");

?>