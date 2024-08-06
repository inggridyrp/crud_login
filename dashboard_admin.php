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
        <div class="pt-5 d-flex justify-content-between">
            <div class="col">
                <h1>Selamat Datang <font color="magenta"><?php echo $_SESSION['username'];?></font> di Toko Buku ABC</h1>
                <p>Ini adalah halaman pembelian buku</p>
            </div>
        </div>

        <a class="btn btn-success" href="tambah_data.php">Tambah Data Pembelian</a>
        <a class="btn btn-danger" href="logout.php">Logout</a><p></p><p></p>
        <!-- create list of books -->
        <div class="row">
            <div class="col-12">
                <h2>Data Pembelian Buku</h2>
            </div>

            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Pembeli</th>
                            <th>Judul Buku</th>
                            <th>Tanggal Beli</th>
                            <th>Jumlah Beli</th>
                            <th>Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                         include "koneksi.php";
                         $data = mysqli_query($mysqli,"SELECT * FROM beli_buku order by id asc");
                         // memberikan perintah query sql untuk menampilkan semua stok
                   
                         //perintah untuk menampilkan semua stok yang ada di tabel jual menggunakan perulangan
                         while ($show = mysqli_fetch_array($data)) {
                   
                    ?>
                            <tr>
                                <td><?php echo $show['id'];?></td>
                                <td><?php echo $show['nama_pembeli'];?></td>
                                <td><?php echo $show['judul_buku'];?></td>
                                <td><?php echo $show['tanggal_beli'];?></td>
                                <td><?php echo $show['jumlah_beli'];?></td>
                                <td><?php echo $show['harga'];?></td>
                                <td>
                                    <a href="form_update.php?id=<?php echo $show['id'];?>" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="deletesql.php?id=<?php echo $show['id'];?>" class="btn btn-sm btn-danger">Hapus</a>
                                </td>
                            </tr>
                        <?php } ?>
                           
                    </tbody>
                </table>
            </div>
                
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html><?php } ?>