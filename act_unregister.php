<?php 
    include "./connection.php";    

    if($_GET['act']== 'unregisterpasien')
    {
        $id = $_GET['id_pasien'];
        $querydelete = mysqli_query($conn, "DELETE from pasien WHERE id_pasien='$id'");
    
        if ($querydelete) 
        {
            header("location: directory.php");    
        }
        else
        {
            echo "ERROR, failed to unregister patient". mysqli_error($conn);
        }
    }
    

?>

