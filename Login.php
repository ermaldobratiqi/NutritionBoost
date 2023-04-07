<?php include('Function.php') ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="Styles/LoginRegisterStyle.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <script defer type="text/javascript" src="Scripts/LoginValidation.js" ></script>
    <script defer type="text/javascript" src="Scripts/RegisterValidation.js" ></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>

    <div class="Logo">
      <a href="index.php"><h1>NutritionBoost</h1></a>
    </div>

   <div class="Container">

     <form id="Login-form"  onsubmit="return Validation()"  method="POST">
     
     <div class="Login-box">
       <div class="items">
         <div class="L">
           <h2 id="h21">Log <h2 id="h22"> In<h2></h2>
         </div>
         <input id="LogEmail" type="email" name="lemail" placeholder="Email">
         <div id="LogEmailErr" class="ErrorMsg" ></div>
         <input id="Password" type="password" name="lpassword" placeholder="Password">
         <div id="LogPasswordErr" class="ErrorMsg" ></div>
         <button  id="LogIn" type="submit" name="log-button">Log In</button>
         </div>
         <div class="Text">
           <a href="#">Forgot Password?</a>
           <a href="Register.php">Register</a>
         </div>
         <div id="PHPErrors" class="ErrorMsg" ><?php echo display_error(); ?></div>
      </div>
    </form>


  


 </div>


  </body>
</html>
