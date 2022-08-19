<?php

$id=$_GET['id'];

$delete = new PDO('mysql:host=localhost;dbname=bandungsugoi','root',''); 
$query = $delete->query("delete from `murid` where `id`='$id' ");

if($query){
    header('location:howlowl.php');}