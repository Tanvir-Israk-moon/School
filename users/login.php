<?php  session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="login.css">
    
</head>
<body>

    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <div>
        <img src="../images/Bubble2-removebg-preview.png" alt="bubble" class="bubble one">
        <img src="../images/Bubble2-removebg-preview.png" alt="bubble" class="bubble two">
        <img src="../images/Bubble2-removebg-preview.png" alt="bubble" class="bubble three">
        <img src="../images/Bubble2-removebg-preview.png" alt="bubble" class="bubble four">
    </div>
    <div>
    <img src="../images/Bubble2-removebg-preview.png" alt="bubble" class="bubblee2 one2">
    <img src="../images/Bubble2-removebg-preview.png" alt="bubble" class="bubblee2 two2">
    <img src="../images/Bubble2-removebg-preview.png" alt="bubble" class="bubblee2 three2">
    </div>
    <form method="post" action="../Action/login_condition.php">
        <h3>Login</h3>

        <label for="email">Email</label><span class="text-danger"><?php if(isset($_SESSION['Email_Error'])){ echo $_SESSION['Email_Error']; }?></span>
        <input type="email" placeholder="Enter Your Email" id="email" name="email">

        <label for="password">Password</label><span class="text-danger"><?php if(isset($_SESSION["Password_Error"])){ echo $_SESSION["Password_Error"]; }?></span>
        <input type="password" placeholder="Password" id="password" name="password">

        <input type="submit" value="Log In" class="button" name="button" oneclick="<?php session_destroy();?>">
        <div class="social">
          <div class="go"><i class="fab fa-google"></i>  Google</div>
          <div class="fb"><i class="fab fa-facebook"></i>  Facebook</div>
          
        </div>
        <div class="register">
        <p>Don't have an account? <a href="../register.php">Register Now</a>.</p>
        </div>
        
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
<!-- partial -->
  
</body>
</html>
