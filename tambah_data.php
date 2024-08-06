<!DOCTYPE html>
<?php
  session_start();
  if (!isset($_SESSION["username"])) {
     header("Location: login.php");
  }else{
  include "koneksi.php";// memanggil file koneksi.php untuk menghubungkan ke database
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="row"><p></p>
            <div class="col-12">
                <h2>Form Tambah Data Pembelian Buku</h2>
            </div>
            <p></p>
            <div class="col-12">
                <form action="addsql.php" method="post">
                <div class="mb-3">
                        <label for="judul" class="form-label">Nama Pembeli</label>
                        <input type="text" class="form-control" name="nama_pembeli">
                    </div>
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul</label>
                        <input type="text" class="form-control" name="judul_buku">
                    </div>
                    <div class="mb-3">
                        <label for="penulis" class="form-label">Tanggal Beli</label>
                        <input type="date" class="form-control" name="tanggal_beli">
                    </div>
                    <div class="mb-3">
                        <label for="penerbit" class="form-label">Jumlah Beli</label>
                        <input type="number" class="form-control" name="jumlah_beli">
                    </div>
                    <div class="mb-3">
                        <label for="tahun_terbit" class="form-label">Harga</label>
                        <input type="number" class="form-control" name="harga">
                    </div>
                    
                    <button type="submit" class="btn btn-primary" name="simpan">simpan</button>
                    <button type="reset" class="btn btn-danger">reset</button>
                    <a href="dashboard_admin.php"><button type="button" class="btn btn-success">kembali</button></a>
                </form>
            </div>

        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
        </script>
</body>

</html><?php } ?>
