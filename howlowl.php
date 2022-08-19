<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Howl Owl</title>
</head>
<body>
    <div class="container mt-5">
    <?php
        $howl = new PDO('mysql:host=localhost;dbname=bandungsugoi','root','');
        $query = $howl->query('select * from murid');
    ?>
        <a href="addowlf.php" class="btn btn-dark mb-3">Adding Owl</a>
        
        <a href="http://localhost/phpmyadmin/index.php?route=/sql&db=bandungsugoi&table=murid&pos=0" class="btn btn-primary mb-3">Database</a>

        <ul class="list-group">

        
    <?php
        while($data=$query->fetch()):?>
        <li class="list-group-item d-flex justify-content-between">
        
        <a href="updateowlf.php?id=<?= $data['id'];?>"><?= $data['nama'];?></a>

        <a href="deleteowl.php?id=<?= $data['id'];?>" class="btn btn-sm btn-danger ml-auto">Delete Owl</a>
    </li>
    <?php endwhile ?>
</ul>
</div>
</body>
</html>
