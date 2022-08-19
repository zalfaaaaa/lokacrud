<?php

$nama=$_POST['nama'];
$kelas=$_POST['kelas'];

$add = new PDO('mysql:host=localhost;dbname=bandungsugoi','root','');
$query = $add->query("insert into `murid` values('','$nama','$kelas');");

 if($query){
    header('location:howlowl.php');
 }