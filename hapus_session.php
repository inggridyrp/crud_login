<?php
session_start();
unset($_SESSION['nama_topik']);
session_destroy();
echo "<script>alert('Anda yakin akan menghapus sesi ?');
        window.location='contoh1.php';
    </script>";
?>