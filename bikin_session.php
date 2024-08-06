<?php 
if(!isset($_SESSION['nama_topik'])){
    session_start();
    $_SESSION['nama_topik'] = '<h2>Ini adalah value dari session yang dibuat</h2>';

    echo $_SESSION['nama_topik']."<p>";
?>
<html>
    <h3><a href="hapus_session.php">Hapus Sesi</a></h3>
</html>
<?php } ?>