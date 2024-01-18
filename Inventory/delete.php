<?php
    include '../DB/config.php';
    if(isset($_GET['deleteid'])){
        $id=$_GET['deleteid'];

        $sql="DELETE FROM `inventory` WHERE bId=$id";
        $result=mysqli_query($conn,$sql);
        if($result){
            header('location:inventory.php');
        }else{
            die(mysqli_error($conn));
        }
    }
?>