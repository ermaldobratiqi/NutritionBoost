<?php include('AddArticleFunction.php') ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>NutritionBoost | Home</title>
  <link rel="stylesheet" href="Styles/indexStyle.css">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/3c669dade3.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
  <script defer type="text/javascript" src="Scripts/Slideshow.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>

<!-- Header include -->
<?php include 'includes/header.php'; ?>




  <div class="slideshow-container">

    <div class="mySlides fade">
      <img src="Images/fruit.jpg" style="width:100%">
      <div class="heading">William Shakespeare</div>
      <p  class="text">The future belongs to those who believe in the beauty<br>of their dreams</p>

    </div>

    <div class="mySlides fade">
      <img src="Images/nice.jpg" style="width:100%">
      <div class="heading">Francois de la Rochefoucauld</div>
      <p class="text">To eat is a necessity, but to eat intelligently is an art.</p>

    </div>

    <div class="mySlides fade">
      <img src="Images/energy.jpg" style="width:100%">

      <div class="heading">Jean Anthelme Brillat-Savarin</div>
      <p  class="text">Tell me what you eat, and I will tell you who you are.</p>

    </div>

    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)"><i class="fas fa-arrow-left"></i></a>
    <a class="next" onclick="plusSlides(1)"><i class="fas fa-arrow-right"></i></a>
  </div>
  <br>

  <!-- The dots/circles -->
  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
  </div>

  <div class="content">
    <div class="Diets">

    <?php echo printArticlesCover()?>      


    </div>

  </div>

  <!-- Footer include -->
  <?php include 'includes/footer.php'; ?>




</body>

</html>
