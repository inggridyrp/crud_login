<?php
session_start();
if(isset($_SESSION['nama_topik']) ){
    echo "<h2><font color='blue'>bikin session dulu</font></h2>";
    //header("Location: login.php");
?>
<h3><a href="bikin_session.php">Link Bikin Session</a></h3>

<?php
}else{
    if(!isset($_SESSION['nama_topik'])){
        //session_start();
        $_SESSION['nama_topik'] = '<h2>Ini adalah value dari session yang dibuat</h2>';
    
        echo $_SESSION['nama_topik']."<p>";
    ?>
    <html>
        <h3><a href="hapus_session.php">Hapus Sesi</a></h3>
    </html>

<?php } } ?>