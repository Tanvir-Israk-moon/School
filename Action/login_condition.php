<?php
session_start();
include("../include/Data_Base.php");


if(isset($_POST['button'])){
    $Email=$_POST['email'];
    $Password=$_POST['password'];
    $Password=md5($Password);

    $searchSQL="SELECT * FROM `registered_users` WHERE `E-mail`= '$Email'";
    $result=$conn->query($searchSQL);
    $row=mysqli_fetch_assoc($result);


    if(!isset($row)){

        $_SESSION['Email_Error']="*E-mail not found";
        header("location:../users/login.php");
    }else{

        if($row['Password']== $Password){
            $_SESSION["tumitoaso"] = $Email;
            header("location:../users/Student_Dashboard/index.php");
        }else{
            $_SESSION["Password_Error"]= "*Password not matched";
            header("location:../users/login.php");

        }
    }
}

?>