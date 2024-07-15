<?php
session_start();
include("../include/Data_Base.php");

function hackingPrevent($text){
    $text = trim($text);
    $text = stripcslashes($text);
    $text = htmlspecialchars($text);

    return $text;

}


if(isset($_POST["registerbtn"])){
    $FirstName=$_SESSION['FirstName']  =$_POST["FirstName"];
    $FirstName = hackingPrevent($FirstName);
    $LastName=$_SESSION['LastName']=$_POST["LastName"];
    $LastName = hackingPrevent($LastName);
    $DateOfBirth=$_SESSION['DateOfBirth']=$_POST["DateOfBirth"];
    $Class=$_SESSION['class']=$_POST["class"];
    $Email=$_SESSION['email']=$_POST["email"];
    $Email = hackingPrevent($Email);
    $Password=$_SESSION['psw']=$_POST["psw"];
    $Password_Repeat=$_SESSION['psw-repeat']= $_POST["psw-repeat"];


    if(empty($FirstName)){
       $_SESSION['FirstNameError'] = '*Please Write Your First Name';
       header('location:../register.php');
    }
    if(empty($LastName)){
        $_SESSION['LastNameError'] = '*Please Write Your Last Name';
        header('location:../register.php');
    }
    if(empty($DateOfBirth)){
        $_SESSION['DOBError'] = '*Please Write Your Date Of Birth';
        header('location:../register.php');
    }
    if($Class == null){
        $_SESSION['ClassError'] = '*Please Select Your Class';
        header('location:../register.php');
    }
    if(empty($Email)){
        $_SESSION['EmailError'] = '*Please Write Your E-mail Address';
        header('location:../register.php');
    }
    if(!empty($Email)){
        $email_check="SELECT * FROM `registered_users` WHERE `E-mail` = '$Email'";
        $email_checker= $conn->query($email_check);
        $email_count= mysqli_num_rows( $email_checker );

        if ($email_count >= 1) {
            $_SESSION['EmailError2']= "*This E-mail already exist. Please try another one.";
            header('location:../register.php');
        }
    }
    if(empty($Password)){
        $_SESSION['PasswordError'] = '*Please Enter Your Password';
        header('location:../register.php');
    }

    if( $Password_Repeat !== $Password){
        $_SESSION['RepeatError'] = '*Password Did not matched';
        header('location:../register.php');
    }

    $passwordLength = strlen($Password);
    
    if( $passwordLength <= 6){
        $_SESSION['lengthError'] = '*Password Should Be Minimum 6 Charecter';
        header('location:../register.php');
    }



    $Password=md5($Password);

    if(!empty($FirstName) && !empty($LastName) && !empty($DateOfBirth) && $Class !== null && !empty($Email) && !empty($Password) && $email_count == 0 && $Password == $Password_Repeat){
        $insert = "INSERT INTO `registered_users`(`First Name`, `Last Name`, `Date of birth`, `Class`, `Photo`, `E-mail`, `Password`) VALUES ('$FirstName','$LastName','$DateOfBirth','$Class','[value-5]','$Email','$Password') ";
        
        $success= $conn -> query($insert);
        
        if(isset($success)){

        $_SESSION["tumitoaso"] = $Email;
        header("location:../users/Student_Dashboard/index.php");
    }

    
    }
}
?>
