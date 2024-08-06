<?php
 include "koneksi.php"; // memanggil file koneksi.php untuk menghubungkan ke database

	if(isset($_POST['simpan'])){
		$nama_pembeli     	= $_POST['nama_pembeli']; // memanggil nama variabel id untuk dibuat menjadi variabel baru $id
		$judul_buku  		= $_POST['judul_buku'];
		$tanggal_beli  		= $_POST['tanggal_beli'];
		$jumlah_beli  		= $_POST['jumlah_beli'];
		$harga  			= $_POST['harga'];

echo "aaa";
		//menambahkan query sql tambah data untuk memasukkan data ke database
		$data = mysqli_query($mysqli, "INSERT INTO beli_buku values (NULL, '$nama_pembeli', '$judul_buku', '$tanggal_beli', $jumlah_beli, $harga)")
				or die ("data salah : ".mysqli_error($mysqli));
		 
		//  untuk mengetahui apakah data berhasil disimpan atau belum
		if($data){
			//berfungsi untuk ngelink ke halaman tampil.php
			echo "<script> 
					alert('Data berhasil disimpan')
					window.location.replace('index.php');
				</script>";
		}else{
			//berfungsi untuk ngelink ke halaman add.php
			echo "<script> 
					alert('Data gagal disimpan')
					window.location.replace('tambah_data.php');
				</script>";
		}
	}
?>