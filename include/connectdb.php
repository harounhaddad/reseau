<?php
session_start();
mysql_connect('localhost','root','') or die('No access to DB');
mysql_select_db('reseausocial') or die('DB not found');
?>