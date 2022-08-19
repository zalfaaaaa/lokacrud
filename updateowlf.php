<?php
$id = $_GET['id'];

$db =new PDO("mysql:host=localhost;dbname=bandungsugoi",'root','');
$query = $db->query("select * from murid where id=$id");

$data = $query->fetch();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Update Owl</title>
</head>
<body>
    <form action="updateowl.php" method="POST" class="container">
    <input type="hidden" name="id" value="<?= $id ?>">
        <div>
            <label class="form-label">Nama</label>
            <input class="form-control" type="text" name="nama" value="<?= $data['nama'] ?>">
        </div>
        <br>
        <div>
            <label class="form-label">Class : </label>
            <select class="form-control" name="kelas" id="">
                <option value="12 MIPA" <?= $data['id'] == '12 MIPA' ? 'selected' : '' ?>>12 MIPA</option>
                <option value="12 IPS" <?= $data['id'] == '12 MIPA' ? 'selected' : '' ?>>12 IPS</option>
                <option value="12 BAHASA" <?= $data['id'] == '12 MIPA' ? 'selected' : '' ?>>12 BAHASA</option>
                <option value="12 RPL" <?= $data['id'] == '12 MIPA' ? 'selected' : '' ?>>12 RPL</option>
                <option value="12 DKV" <?= $data['id'] == '12 MIPA' ? 'selected' : '' ?>>12 DKV</option>       
                <option value="12 TATABOGA" <?= $data['id'] == '12 MIPA' ? 'selected' : '' ?>>12 TATABOGA</option>
            </select>
        </div>
        <br>
        <input type="submit" class="btn btn-warning" value="simpan">
    </form>
</body>
</html>