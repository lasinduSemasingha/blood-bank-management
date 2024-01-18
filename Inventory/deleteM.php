<?php
    include '../DB/config.php';
    if(isset($_GET['deleteid'])){
        $id=$_GET['deleteid'];

        $sql="DELETE FROM `contact` WHERE cId=$id";
        $result=mysqli_query($conn,$sql);
        if($result){
            header('location:message.php');
        }else{
            die(mysqli_error($conn));
        }
    }
?>