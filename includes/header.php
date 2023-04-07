<?php
  include('Function.php');


  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['user']);
    header("location: Login.php");
  }
?>

<div class="navbar">
  <div class="logo">
  <a href="index.php"> <h3>NutritionBoost</h3></a>
  <link rel="stylesheet" href="Styles/indexStyle.css">
  </div>


  <ul class="links">
    <!-- <i class="fas fa-close"></i> -->
    <li class="link"><a href="index.php">Home</a></li>
    <li class="link"><a href="diets.php">Diets</a></li>
    <li class="link"><a href="tips.php">Tips</a></li>
    <li class="link"><a href="ContactForm.php">Contact</a></li>
    <li class="link"><a href="AboutUs.php">About Us</a></li>
  </ul>

  <form>
  <ul class="ls">

    
    
    </li>

    <?php  if (isset($_SESSION['user'])): ?>
          <?php
            if(isAdmin())
             echo '<li class="link"><a href="AdminDashboard.php"><i class="fas fa-edit"></i></a></li>'
            ?>
           <li class="link"><p><?php echo $_SESSION['user']['FirstName']; ?> <?php echo $_SESSION['user']['LastName']; ?> </p></li>
          <li class="link"><a href="Index.php?logout='1'"><i class="fas fa-sign-out-alt"></i></a></li>
    <?php else: ?>

          <li class="item"><a href="Login.php"><i class="fas fa-user"></i></a></li>

		<?php endif?>



  </ul>
</form>

</div>
