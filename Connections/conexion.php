<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_hackaton = "localhost";
$database_hackaton = "hackaton";
$username_hackaton = "root";
$password_hackaton = "";
$hackaton = mysql_pconnect($hostname_hackaton, $username_hackaton, $password_hackaton) or trigger_error(mysql_error(),E_USER_ERROR); 
?>
