<?php

if(isset($_POST['login'])) {
    if(empty($_POST['n_email'])) {
        $error[] = "Please enter your Email, Example : user@provider";
    }
    
    if(empty($_POST['n_password'])) {
        $error[] = "Please enter your password";
    }
    
    if(!empty($error)) {
        foreach($error as $er) {
            echo "<div class='error'>".$er."</div>";
        }
    } else {
    
    
    if(check_user_pass($_POST['n_email'],$_POST['n_password']) == 0) {
            
            echo"<div class='error'>Please check the informations you provided</div>";
        } 
        
        else {
            $_SESSION['n_email'] = $_POST['n_email'];
            Header("Location:index.php?page=member");
        }
    
	}
    
    if(!isset($_SESSION['n_email']) && $page !='member') {
    
                Header("location:index.php?page=login");
    
            }
    
    
    
}
?>

<div class="re">
    <form action="" method="POST">
        <h2>Login to Reseau Social</h2>
        <div class="form_group">
            <input type="email" name="n_email" placeholder="Email">
        </div>
        
        <div class="form_group">
            <input type="password" name="n_password" placeholder="Password">
        </div>
        
        <div class="forgot">
            <a href="#">Forgot password</a>
            <br />
            <a href="index.php?page=register">Sign Up</a>
        </div>
        
        <div class="form_group">
            <input type="submit" name="login" value="Login">
        </div>
    </form>
</div>