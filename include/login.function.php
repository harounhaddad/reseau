<?php


function check_user_pass($_n_email,$n_password) {
    $n_email = htmlentities(trim($_POST['n_email']));
    $n_password = htmlentities(trim($_POST['n_password']));
    $n_password = sha1($n_password);
    
    $query = mysql_query("SELECT n_email,n_password FROM users WHERE n_email='$n_email' AND n_password='$n_password'");
    
    $rows = mysql_num_rows($query);
    return $rows;
    
}



?>