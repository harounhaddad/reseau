<?php

function update_info_member($n_name,$n_famname,$n_email,$n_password, $password_confirm,$n_sex,$birthday,$country) {
	$n_password = sha1($n_password);
    $password_confirm = sha1($password_confirm);
	$query = mysql_query("UPDATE users SET n_name='$n_name',n_famname='$n_famname',n_email='$n_email',n_password='$n_password',password_confirm='$password_confirm',n_sex='$n_sex',birthday='$birthday',country='$country' WHERE n_email='{$_SESSION['n_email']}'") or die(mysql_error());

}


?>