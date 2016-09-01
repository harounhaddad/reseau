<?php
ob_start();
?>

<?php
include("include/connectdb.php");

$page = htmlentities($_GET['page']);
include("include/".$page.".function.php");

$pages = scandir('files');

if(!empty($page) && in_array($_GET['page'].".php",$pages)) {
    $content = 'files/'.$_GET['page'].".php";
}

else {
    Header('Location:index.php?page=login');
}

  if(isset($_SESSION['n_email']) && $page !='member' && $page !='update' && $page !='update_avatar') {
    
        Header("location:index.php?page=member");
    
    }




?>

<!DOCTYPE html>
<html>
    <head>
        <title>Social Network</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style/stylesheet.css">
        <script src='https://www.google.com/recaptcha/api.js'></script>
    </head>
    
    <body>

<div class="header">
    <div class="menu">
        <ul>
            <?php
            if(!isset($_SESSION['n_email'])) {
                echo'
                   
            
            
            
            <li><a href="index.php?page=register">Register</a></li>
            <li><a href="index.php?page=login">Login</a></li>
            
            ';
            }
            
            else {
                echo "
          <div class='menu'>
          <ul>
              <li class='menu-sub-nav'><a href='index.php?page=logout'>Log Out</a></li>
              <li class='menu-sub-nav'><a href='/'></i><span>Friends</span></a></li>
              <li class='menu-sub-nav'><a href='#'><span>Users</span></a></li>
              <li class='menu-sub-nav'><a href='#'><span>Messages</span></a></li>
              <li class='menu-sub-nav'><a href='#'><span>Notifications</span></a></li>
              <li class='menu-sub-nav'><a href='index.php?page=update'><span>Me</span></a></li>
              <li class='menu-sub-nav current-item'><a href='index.php?page=member'><span>Home</span></a></li>
            </ul>
          </div>
            "; 
            }
            
        
            ?>
                </ul>
    </div>
    
    <div class="logo">
        <a href="index.php?page=index">Reseau Social</a>
    </div>

    <?php
    if(isset($_SESSION['n_email'])) {
        
}
?>

</div>
        
<div id="content">
    <?php include ($content);?>
</div>
        
        

