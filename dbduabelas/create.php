<?php

$nis=$_POST['nis'];
$nama=$_POST['nama'];
$kelas=$_POST['kelas'];

$a = new PDO('mysql:host=localhost;dbname=nicole','root','');
$query = $a->query("INSERT INTO `siswa` VALUES ('$nis','$nama','$kelas')");

 if($query){
    header('location:crud.php');
 }