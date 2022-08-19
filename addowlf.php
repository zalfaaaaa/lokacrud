<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Owl</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <form action="addowl.php" method="POST" class="container">
        <div class="mb-3">
            <label class="form-label">Name : </label>
            <input type="text" class="form-control" name="nama">
        </div>
        <br>
        <div class="mb-3">
            <label form-label>Class : </label>
            <select name="kelas" class="form-control" id="">
                <option value="12 MIPA">12 MIPA</option>
                <option value="12 IPS">12 IPS</option>
                <option value="12 BAHASA">12 BAHASA</option>
                <option value="12 RPL">12 RPL</option>
                <option value="12 DKV">12 DKV</option>       
                <option value="12 TATABOGA">12 TATABOGA</option>
            </select>
        </div>
        <br>
        <input type="submit" class="btn btn-success btn-block" value="simpan">
    </form>
</body>
</html>