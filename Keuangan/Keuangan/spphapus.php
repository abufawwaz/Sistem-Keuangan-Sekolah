<?php
    include 'config.php';

    if(isset($_GET["id"])){
		
        // Prepared statement untuk menghapus data
        $query = $db->prepare("DELETE FROM spp WHERE id=:id");
        $query->bindParam(":id", $_GET["id"]);
        // Jalankan Perintah SQL
        $query->execute();
        // Alihkan ke index.php
        header("location: spp.php");
	}
?>