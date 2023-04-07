<?php 
include('Function.php');

if (!isAdmin()) {
	$_SESSION['msg'] = "You must Be an Admin To Access this page";
	header('location: Index.php');
}

if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['user']);
  header("location: Login.php");
}

?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>NutritionBoost | AboutUS</title>
    <link rel="stylesheet" href="Styles/Admin.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <script defer type="text/javascript" src="Scripts/AdminAddArticle.js" ></script>
    <script defer type="text/javascript" src="Scripts/AdminDashboard.js"></script>
   
  </head>
  <body>
    


   
    <header>
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
      <a href="index.php"><h1>NUTRITIONBOOST</h1></a>
      </div>
      <div class="right_area">
        <a href="Index.php?logout='1'" class="logout_btn" >Logout</a>
      </div>
    </header>

    
    <div class="mobile_nav">
      <div class="nav_bar">
        <img src="Images/Admin.jpg" class="mobile_profile_image" alt="">
        <i class="fa fa-bars nav_btn"></i>
      </div>
      <div class="mobile_nav_items">
        <a href="#"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
        <a href="#"><i class="fas fa-cogs"></i><span>Components</span></a>
        <a href="#"><i class="fas fa-table"></i><span>Tables</span></a>
        <a href="#"><i class="fas fa-th"></i><span>Forms</span></a>
        <a href="#"><i class="fas fa-info-circle"></i><span>About</span></a>
        <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
      </div>
    </div>
    <
    <div class="sidebar">
      <div class="profile_info">
        <h4><?php echo $_SESSION['user']['FirstName']; ?> <?php echo $_SESSION['user']['LastName']; ?></h4>
      </div>
      <a href="AdminDashboard.php"><i class="fas fa-user-plus"></i><span>Add User</span></a></a>
      <a href="AdminAddArticles.php"><i class="far fa-plus-square"></i><span>Add Articles</span></a></a>
      <a href="AdminAddTips.php"><i class="far fa-star"></i><span>Add Tips</span></a></a>
      <a href="AdminManageArticles.php"><i class="far fa-edit"></i><span>Manage Articles</span></a></a>
      <a href="AdminManageTips.php"><i class="far fa-edit"></i><span>Manage Tips</span></a></a>
      <a href="ManageComments.php"><i class="far fa-comment"></i><span>Manage Comments</span></a></a>
      <a href="AdminManageUsers.php"><i class="fas fa-user-edit"></i><span>Manage Users</span></a></a>
      <a href="AdminAddStaff.php"><i class="fas fa-user-plus"></i><span>Add Staff</span></a></a>
      <a href="AdminManageStaff.php"><i class="fas fa-user-edit"></i><span>Manage Staff</span></a></a>
    </div>
    

    <div class="content">
      

    <form id="AddArticle-form"  onsubmit="return AddArticleValidation()" method="POST">
      <div class="ArticleBox">

      <div id="Publish-items" class="items">
           <div class="L">
             <h2 id="h21">Write an Article</h2>
           </div>
           <input  id="ImgUrl" type="text" name="imgurl"placeholder="Image Url">
           <div id="ImgUrlErr" class="ErrorMsg" ></div>
           <input  id="Title" type="text" name="title" placeholder="Title">
           <div id="TitleErr" class="ErrorMsg" ></div>
           <input  id="Author" type="text" name="author" placeholder="Author" value="<?php echo $_SESSION['user']['FirstName']; ?> <?php echo $_SESSION['user']['LastName']; ?>">
           <div id="AuthorErr" class="ErrorMsg" ></div>
           <input  id="FileName" type="text" name="filename" placeholder="FileName">
           <div id="FileNameErr" class="ErrorMsg" ></div>
           <textarea id="ShortDesc" name="shortdesc" rows="8" cols="80" placeholder="Short Description"></textarea>
           <div id="ShortDescErr" class="ErrorMsg" ></div>
           <textarea id="Body" name="body" rows="8" cols="80" placeholder="Write Article Body"></textarea>
           <div id="BodyErr" class="ErrorMsg" ></div>
           <button  id="Publish" type="submit" name="Pubishbutton">Publish Article</button>
           </div>
           <div class="Text">
           <a href="diets.php">Go to the articles</a>  
           <br>    
         </div>
         <div id="PHPErrors" class="ErrorMsg" ><?php echo display_error(); ?></div>
        </div>
     


      </div>
      </form> 














    </div>

    

   
  </body>
</html>
