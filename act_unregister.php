<?php 
    include "./connection.php";    

    if($_GET['act']== 'unregister')
    {
        $id = $_GET['id'];
        $querydelete = mysqli_query($conn, "DELETE from patient WHERE id='$id'");
    
        if ($querydelete) 
        {
            #redirect ke page index
            header("location: manage_patient.php");    
        }
        else
        {
            echo "ERROR, failed to unregister patient". mysqli_error($conn);
        }
    }
    

?>

