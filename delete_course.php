<?php
include 'config.php';
if(isset($_GET['course_id'])){
    $cid=$_GET['course_id'];
    $sql="DELETE FROM course WHERE course_id=$cid";
    $result=mysqli_query($link,$sql);
    if($result){
        $msg="Succesfully deleted!";
    }else{
        $msg="Something went wrong!";
    }
    
}else{
    $msg="Nothing to delete!";
}

session_start();
$_SESSION['msg']=$msg;
session_commit();
header("Location:course_master.php");
?>
