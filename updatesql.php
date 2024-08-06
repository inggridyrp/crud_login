<?php
  include "koneksi.php"; // memanggil file koneksi.php untuk menghubungkan ke database
 
if(isset($_POST['edit'])){
  $id               = $_POST['id']; 
  $nama_pembeli     = $_POST['nama_pembeli']; // memanggil nama variabel id untuk dibuat menjadi variabel baru $id
  $judul_buku  		  = $_POST['judul_buku'];
  $tanggal_beli  		= $_POST['tanggal_beli'];
  $jumlah_beli  		= $_POST['jumlah_beli'];
  $harga  			    = $_POST['harga'];

  $data = mysqli_query($mysqli, "UPDATE beli_buku SET
                                nama_pembeli='$nama_pembeli',
                                judul_buku = '$judul_buku',
                                tanggal_beli = '$tanggal_beli',
                                jumlah_beli = $jumlah_beli,
                                harga = $harga
                                WHERE id='$id'")
          or die ("data salah : ".mysqli_error($mysqli));
  
  if ($data) {
    echo "<script> 
					alert('Data berhasil diubah')
					window.location.replace('index.php');
				</script>";
  } else {
    echo "<script> 
    alert('Data berhasil diubah')
    window.location.replace('update.php?id=$id');
  </script>";
  }
}
?>