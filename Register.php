<?php include('Function.php') ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register</title>
    <link rel="stylesheet" href="Styles/LoginRegisterStyle.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <script defer type="text/javascript" src="Scripts/RegisterValidation.js" ></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>

    <div class="Logo">
      <a href="index.php"><h1>NutritionBoost</h1></a>
    </div>

  <div class="Container">

   <form id="Register-form"  onsubmit="return RegValidation()" method="POST">
   
       <div class="Register-box">

         <div id="Register-items" class="items">
           <div class="L">
             <h2 id="h21">Regis<h2 id="h22">ter<h2></h2>
           </div>
           <input  id="FirstName" type="text" name="firstname"placeholder="FirstName">
           <div id="RegFnameErr" class="ErrorMsg" ></div>
           <input  id="LastName" type="text" name="lastname" placeholder="LastName">
           <div id="RegLnameErr" class="ErrorMsg" ></div>
           <input id="RegEmail" name="email" type="email" placeholder="Email">
           <div id="RegEmailErr" class="ErrorMsg" ></div>
           <input id="RegPassword"  name="password" type="password" placeholder="Password">
           <div id="RegPasswordErr" class="ErrorMsg" ></div>
           <button  id="Register" type="submit" name="button">Register</button>
           </div>
           <div class="Text">
           <a href="Login.php">Go back to Login</a>  
           <br>    
         </div>
         <div id="PHPErrors" class="ErrorMsg" ><?php echo display_error(); ?></div>
        </div>
     </form> 


 </div>


  </body>
</html>