<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    $sql = "delete from `crud` where id=$id";
    $resul=mysqli_query($con,$sql);
    if($resul){
        //echo "Deleted successfully";
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}
?>