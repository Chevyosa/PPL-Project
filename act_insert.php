<?php 
    include "./connection.php";    
    $sql = "INSERT INTO patient (nama_pasien, umur_pasien, nama_penyakit) VALUES ('$_POST[nama]','$_POST[umur_pasien]','$_POST[penyakit]')";
    $query = mysqli_query($conn,$sql);
    header("location: directory.php");
?>