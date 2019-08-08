<?php
    include 'config.php';

    if(isset($_GET["nis"])){
        // Prepared statement untuk menghapus data
        $query = $db->prepare("DELETE FROM siswa WHERE nis=:nis");
        $query->bindParam(":nis", $_GET["nis"]);
        // Jalankan Perintah SQL
        $query->execute();
        // Alihkan ke index.php
        header("location: siswa.php");
    }
?>