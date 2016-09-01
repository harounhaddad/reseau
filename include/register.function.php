<?php


/*
CREATE TABLE `users` (
`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`n_name` VARCHAR( 255 ) NOT NULL
`n_famname` VARCHAR( 255 ) NOT NULL
`n_email` VARCHAR( 255 ) NOT NULL
`n_password` VARCHAR( 255 ) NOT NULL
`password_confirm` VARCHAR( 255 ) NOT NULL
`n_birthday` DATE NOT NULL
`n_sex` VARCHAR( 255 ) NOT NULL
) ENGINE = MYISAM ;        
*/

function s_users($n_name,$n_famname,$n_email,$n_password, $password_confirm,$n_sex,$birthday) {
    $n_password = sha1($n_password);
    $password_confirm = sha1($password_confirm);
    mysql_query("INSERT INTO users(id,n_name,n_famname,n_email,n_password,password_confirm,birthday,n_sex,avatar)
    VALUES('','$n_name','$n_famname','$n_email','$n_password','$password_confirm','$n_sex','$birthday','default.png')");
    $n_password = sha1($n_password);
        
}

function n_email_exist($n_email) {
    $query = mysql_query("SELECT COUNT(id) FROM users WHERE n_email='$n_email'");
    return mysql_result($query,0);
}


?>