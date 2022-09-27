<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body style="background: #940000;">
<div style="padding: 50px;">
    <form action="login.php"  method="post">
    <div class="container">
    <div class="row" >
      <div class="col-md-6 offset-md-3">
      <div class="card my-5">
        <form class="card-body cardbody-color p-lg-4 ">
          <div class="text-center">
            <img src="katy.jfif" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
              width="200px" alt="profile">
          </div>  
          <div class="mb-3 text-center">
            Username : 
            <br>
            <input class="" type="text" name="username" placeholder="username" style="width: 200px;">
          </div>
          <div class="mb-3 text-center">
            Password : 
            <br>
            <input class="" type="password" name="password" placeholder="password" style="width: 200px;">
          </div>
          <div class="text-center"> <button type="submit" class="btn btn-primary px-5 mb-5">Login</button> <br></div>
          </div>

    </form>
    </div>
</body>
</html>