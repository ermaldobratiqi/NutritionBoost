<?php include('AddStaffFunction.php') ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>NutritionBlogg | AboutUS</title>
    <link rel="stylesheet" href="Styles/indexStyle.css">
    <link rel="stylesheet" href="Styles/AboutUsStyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/3c669dade3.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>


<!-- Header include -->
<?php include 'includes/header.php'; ?>




      <div class="Container">
   <div class="Content">
     <h2>About Us</h2>

  </div>
     </div>


     <div class = "Staff">
   
   <?php echo printStaffCover(); ?>
  
  </div>






  </body>
</html>
