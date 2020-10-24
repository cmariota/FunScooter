<?php

$link= mysql_connect("localhost","root", "") or die ("<h2>No se encuentra el servidor</h2>");
$db= mysql_select_db("funscooter",$link) or die ("<h2>Error de conexion</h2>");

$name=$_POST ['name'];
$Lastname = $_POST ['Lastname'];
$pass = $_POST ['pass'];
$Cpass = $_POST['Cpass'];






 

if ($passwd != $Cpass) {
	die('Las contraseñas no coinciden'<br><br> <a href = "Register.html">Volver</a>);
}

 
$contraseñaUsuario = md5($passwd);


mysql_query("INSERT INTO registro VALUES('','$name','$Lastname','$pass','$Cpass')",$link) or die (<h2> Error de envio de datos </h2>);
?> 