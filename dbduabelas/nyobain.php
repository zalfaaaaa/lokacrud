<?php

$db = mysqli_connect("localhost","root","","nicole");

$result = mysqli_query($db, "SELECT * FROM siswa");
// var_dump($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>CRUD</title>
</head>
<body>
    <div class="container mt-5">
        <div class="d-grip gap-2 col-12">
    <table class="table table-dark table-hover table-borderless">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nis</th>
      <th scope="col">Nama</th>
      <th scope="col">Kelas</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <?php $i=1;?>
  <?php while($row = mysqli_fetch_assoc($result)):?>
  <tbody>
    <tr>
      <th scope="row"><?= $i ?></th>
      <td><?=$row['nis'];?></td>
      <td><?=$row['nama'];?></td>
      <td><?=$row['kelas'];?></td>
      <td>
        <a href="updatefo.php?nis=<?=$data['nama'];?>"><?= $data['nama'];?></a>

        <a href="delete.php?nis=<?=$data['nis'];?>" class="btn btn-sm btn-danger ml-auto">Delete</a>
      </td>
    </tr>
    </tbody>
    <?php $i++; ?>
    <?php endwhile ?>
    </table>
    </div>
    </div>
</body>
</html>