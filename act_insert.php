<?php 
    include "./connection.php";    
    $sql = "INSERT INTO patient (nama_pasien, umur_pasien, nama_penyakit) VALUES ('$_POST[nama_pasien]','$_POST[umur_pasien]','$_POST[nama_penyakit]')";
    $query = mysqli_query($conn,$sql);
    header("location: manage_patient.php");
?>