ø<?php
include('koneksi.php');

if (isset($_POST["login"])) {
$username       = (!empty($_POST['username'])) ? $_POST['username'] : "" ;
$password       = (!empty($_POST['password'])) ? $_POST['password'] : "" ;

$query		=	mysqli_query($mysqli, "select * from user_admin
                                        where username='".$username."'
                                        and password='".$password."'")
                                        or die(mysqli_error($mysqli));
$hasil 		=	mysqli_fetch_assoc($query);
$username	=	$hasil['username'];
$hak_akses  =   $hasil['hak_akses'];
session_start();

    if($hak_akses == 'admin'){ //jika login hak aksesnya admin
        $_SESSION['username']       = $username;
        $_SESSION['hak_akses']      = $hak_akses;
        
        echo "<script>alert('Selamat Datang Admin !');
                window.location='dashboard_admin.php';
            </script>";

    }elseif($hak_akses == 'manager'){
        $_SESSION['username']       = $username;
        $_SESSION['hak_akses']      = $hak_akses;
        
        echo "<script>alert('Selamat Datang Pembeli !');
                window.location='dashboard_user.php';
            </script>";

    }else{
		echo "<script>alert('Anda belum login. Silahkan login dulu ya bro!');
            	window.location='login.php';
          	</script>";
	}	
}
?>