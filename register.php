<?php 
session_start();
if (isset($_SESSION["tumitoaso"])){
    header("location:Student_Dashboard/login.php");
}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style/register.css">

  </head>
  <body>
    
    <form method="post" action="Action/register_condition.php" enctype="multipart/form-data">
        <div class="container">
            <h1>Register</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>
    
           <div class="FirstNameLastName">
                <div class="FirstName">
                    <label for="FirstName"><b>First Name</b></label>
                    <span class="text-danger"><?php if(isset($_SESSION['FirstNameError'])){echo $_SESSION['FirstNameError'] ;} ?></span>
                    <input type="text" placeholder="Enter First Name" name="FirstName" id="FirstName" value="<?php if(isset($_SESSION['FirstName'])){echo $_SESSION['FirstName'];} ?>" onkeydown="return(event.keyCode !== 191 && event.keyCode !== 52 && event.keyCode !== 188 && event.keyCode !== 190 && event.keyCode !== 13)">
                </div>
            
                <div class="LastName">
                    <label for="LastName"><b>Last Name</b></label>
                    <span class="text-danger"><?php if(isset( $_SESSION['LastNameError'])) { echo  $_SESSION['LastNameError'];} ?></span>
                    <input type="text" placeholder="Enter Last Name" name="LastName" id="LastName" value="<?php if(isset($_SESSION['LastName'])){ echo $_SESSION['LastName'];}?>" onkeydown="return(event.keyCode !== 191 && event.keyCode !== 52 && event.keyCode !== 188 && event.keyCode !== 190 && event.keyCode !== 13)">
                </div><?php ?>
            </div>

            <div class="dobc">
                <div class="DateOfBirth">
                <div><label for="DateOfBirth"><b>Date Of Birth</b></label>
                <span class="text-danger"><?php if(isset( $_SESSION['DOBError'])) { echo  $_SESSION['DOBError'];} ?></span></div>
                <input type="date" placeholder="Enter Date Of Birth" name="DateOfBirth" id="DateOfBirth" value="<?php if(isset($_SESSION['DateOfBirth'])){ echo $_SESSION['DateOfBirth'];}?>">
            </div>

            <div class="class">
                <div><label for="class"><b>Class</b></label>
                <span class="text-danger"><?php if(isset( $_SESSION['ClassError'])) { echo  $_SESSION['ClassError'];} ?></span></div>
                <select name="class" id="class">
                    <option value="" class="d-none">Select Your Class</option>
                    <option value="1" <?php if(isset($_SESSION['class']) && $_SESSION['class'] == 1){ echo 'selected';} ?>>ONE</option>
                    <option value="2" <?php if(isset($_SESSION['class']) && $_SESSION['class'] == 2){ echo 'selected';} ?>>TWO</option>
                    <option value="3" <?php if(isset($_SESSION['class']) && $_SESSION['class'] == 3){ echo 'selected';} ?>>THREE</option>
                    <option value="4" <?php if(isset($_SESSION['class']) && $_SESSION['class'] == 4){ echo 'selected';} ?>>FOUR</option>
                    <option value="5" <?php if(isset($_SESSION['class']) && $_SESSION['class'] == 5){ echo 'selected';} ?>>FIVE</option>
                </select> 
            </div>
            </div>
            
            
            <div class="email">
                <label for="email"><b>Email</b></label>
                <span class="text-danger"><?php if(isset(  $_SESSION['EmailError'])) { echo   $_SESSION['EmailError'];} if(isset( $_SESSION['EmailError2'])) { echo $_SESSION['EmailError2'];} ?></span>
                <input type="text" placeholder="Enter Email" name="email" id="email" value="<?php if(isset($_SESSION['email'])){ echo $_SESSION['email'];} ?>" onkeydown="return(event.keyCode !== 191 && event.keyCode !== 52 && event.keyCode !== 188 && event.keyCode !== 190 && event.keyCode !== 13)">
            </div>

            <div class="psw2">
                <div class="psw">
                <label for="psw"><b>Password</b></label>
                <span class="text-danger"><?php if(isset( $_SESSION['PasswordError'])) { echo  $_SESSION['PasswordError'];} ?></span>
                <input type="password" placeholder="Enter Password" name="psw" id="psw" >
            </div>

            <div class="psw-repeat">
                <label for="psw-repeat"><b>Repeat Password</b></label>
                <span class="text-danger"><?php if(isset( $_SESSION['RepeatError'])) { echo  $_SESSION['RepeatError'];} if (isset($_SESSION['lengthError'])) { echo $_SESSION['lengthError'];}?></span>
                <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" >
            </div>
            </div>
            <div class="photo" style="display:flex; justify-content: center;"><?php include("assets/image_uploader/index.html") ?></div>
            
            

            <hr>
            
            <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

            <button type="submit" class="registerbtn" name= "registerbtn">Register</button>
        </div>
  
        <div class="container signin">
            <p>Already have an account? <a href="users/sign_in.php">Login</a>.</p>
        </div>
        
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>