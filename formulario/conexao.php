<?php
$hostname='localhost';
$username='root';
$pass='';
$banco='sistema_escolar';
$db=mysqli_connect($hostname,$username,$pass);
mysqli_select_db($db,$banco);
?>