
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>ContactUs</title>
  <link rel="stylesheet" href="Styles/indexStyle.css">
  <link rel="stylesheet" href="Styles/ContactFormStyle.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/3c669dade3.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
  <script defer type="text/javascript" src="Scripts/ContactFormValidation.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>



<!-- Header include -->
<?php include 'includes/header.php'; ?>

  <div class="Logo">
    

  </div>

  
    <div class="Container">
    <p class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2934.669833357257!2d21.150935314970624!3d42.64715892491562!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13549e8d5d607f25%3A0xa31dd05b21bd09de!2sUniversiteti%20p%C3%ABr%20Biznes%20dhe%20Teknologji!5e0!3m2!1sen!2s!4v1589128729404!5m2!1sen!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></p><br>

      

      <form id="ContactUs-form" onsubmit="return CValidation()" action="insert.php" method="POST">

        <div class="ContactUs-box">

        <h2>Contact Us</h2>

          <div class="items">
        
          
            <input id="FirstName" name="firstname" type="text" placeholder="FirstName">
            <div id="CFnameErr" class="ErrorMsg"></div>
            <input id="LastName" name="lastname" type="text" placeholder="LastName">
            <div id="CLnameErr"  class="ErrorMsg"></div>
            <input id="Email" name="email" type="email" placeholder="Email">
            <div id="CEmailErr" class="ErrorMsg"></div>
            <textarea id="Message" name="comments" rows="8" cols="80" placeholder="Comments"></textarea>
            <div id="CMessageErr" class="ErrorMsg"></div>
            <button id="Submit" type="submit" name="submit" value="Submit" >Submit</button>
          </div>

      </div>
    </form>
  </div>

</body>
</html>
