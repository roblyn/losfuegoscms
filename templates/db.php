
 <?php
$host="localhost";
$user="root";
$password="root";
$db="losfuegos";

$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
mysql_select_db($db);
?>


