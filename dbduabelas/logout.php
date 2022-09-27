<?php

session_start();

session_destroy();

echo "<center><h2>Anda Telah Logout</h2></center>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
    <h3>Mau Kembali Ke Masa Lalu?</h3>
    <button><a href="formse.php">Kembali saja</a></button>
    </div>
</body>
</html>
