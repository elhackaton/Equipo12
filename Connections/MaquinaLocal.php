<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_MaquinaLocal = "localhost";
$database_MaquinaLocal = "hackaton";
$username_MaquinaLocal = "root";
$password_MaquinaLocal = "";
$MaquinaLocal = mysql_pconnect($hostname_MaquinaLocal, $username_MaquinaLocal, $password_MaquinaLocal) or trigger_error(mysql_error(),E_USER_ERROR); 
?>