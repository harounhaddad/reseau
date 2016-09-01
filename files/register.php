<?php

if(isset($_POST['register'])) {
    
    $n_name = htmlentities(trim($_POST['n_name']));
    $n_famname = htmlentities(trim($_POST['n_famname']));
    $n_email = htmlentities(trim($_POST['n_email']));
    $n_password = htmlentities(trim($_POST['n_password']));
    $password_confirm = htmlentities(trim($_POST['password_confirm']));
    $birthday = htmlentities(trim($_POST['birthday']));
    $n_sex = htmlentities(trim($_POST['n_sex']));

    if(empty($n_name)) {
        $error[] = "Please enter your first name";
    }
    
    if(empty($n_famname)) {
        $error[] = "Please enter your last name";
    }
    
    if(!filter_var($n_email)) {
        $error[] = "Please enter your Email, Example : user@provider";
    }
    
    if(empty($n_password)) {
        $error[] = "Please enter your password";
    }
    
    if(empty($password_confirm)) {
        $error[] = "Please confirm your password";
    }
    
    if(empty($birthday)) {
        $error[] = "Please select your birthday";
    }
    
    if(empty($n_sex)) {
        $error[] = "Please select your sex";
    }
    
    if(n_email_exist($n_email) == 1) {
        $error[] = "The email you entred is already in use";
    }
    
    if($n_password != $password_confirm) {
        $error[] = "The passwords you entred are not indenticle, please try again";
    }
    
    if(!empty($error)) {
        foreach($error as $er) {
            echo "<div class='error'>".$er."</div>";
        }
    }
    
    else{
        s_users($n_name,$n_famname,$n_email,$n_password, $password_confirm,$n_sex,$birthday)
            
        or die ("<div class='sucreg'>Welcome to Reseau Social you can now <a href='index.php?page=login'>login</a></div>");
    }
    
}

?>

<div class="re">
    <form action="" method="POST">
        <h2>Register to Reseau Social</h2>
        <div class="form_group">
            <input type="text" name="n_name" placeholder="First Name">
        </div>

        <div class="form_group">
            <input type="text" name="n_famname" placeholder="Last Name">
        </div>

        <div class="form_group">
            <input type="email" name="n_email" placeholder="Email">
        </div>

        <div class="form_group">
            <input type="password" name="n_password" placeholder="Password">
        </div>
        
        <div class="form_group">
            <input type="password" name="password_confirm" placeholder="Retype Password">
        </div>
        
        <div class="form_group">
            <input type="text" name="n_sex" placeholder="Gender (Male or Female)">
        </div>

        <div class="form_group">
            <input type="text" name="birthday" placeholder="Birthday (DD/MM/YYYY)">
        </div>
        <p class="terms">By clicking on "Sign Up", you agree to our <a href="#">Terms</a> and that you have read our <a href="#">Data Policy</a>, including our <a href="#">Cookie Use</a>. </p>
        
        <br />

        <div class="g-recaptcha" data-sitekey="6LflGSkTAAAAAJ8LQZOTeexCLMNxXoygXvpbt4jN"></div>

        <div class="form_group">
            <input type="submit" name="register" value="Sign Up">
        </div>
    </form>
</div>