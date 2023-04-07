<?php include('AddArticleFunction.php') ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>NutritionBoost | Diets</title>
    <link rel="stylesheet" href="Styles/indexStyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3c669dade3.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <!-- Header include -->
    <?php include 'includes/header.php'; ?>


    <div class="content">
    <div class="Diets">

     <?php echo printArticlesCover(); ?>

    </div>

  </div>


    <!-- Footer include -->
    <?php include 'includes/footer.php'; ?>


  </body>
</html>
