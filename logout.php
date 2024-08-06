<?php
session_start();
unset($_SESSION["username"]);
unset($_SESSION["hak_akses"]);
session_destroy();
//header("Location: login.php");
echo "<script>alert('Anda yakin akan keluar ?');
        window.location='login.php';
    </script>";
?>