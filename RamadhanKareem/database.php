<?php

try{
    $con = new PDO ('mysql:host=localhost;dbname=ramadhan', 'root', '');
    $con-> setAttribute(PDO:: ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch (PDOException $e){
    print $e->getMessage();
die();
    //throw th;
} ?>