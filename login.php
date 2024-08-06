<html>
<head>
  <title>Login Toko Baju</title>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>
  <div class="container">
        <div class="pt-5 d-flex justify-content-between">
            <div class="col">
                <center><h2>Selamat Datang di Website CRUD</h2></center><p></p>
            </div>
        </div>
        <div class="row justify-content-md-center">
        <div class="col-6 col-md-4">
            <form action="verifikasi_login.php" method="post">
                    <div class="mb-3">
                        <label for="judul" class="form-label">Username</label>
                        <input type="text" class="form-control" name="username">
                    </div>
                    <div class="mb-3">
                        <label for="judul" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary" name="login">LOGIN</button>
                    <button type="reset" class="btn btn-danger">RESET</button>
                </form>
            </div>
                
    </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>