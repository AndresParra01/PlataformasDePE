<?php
	$salt = "AS2020FP";
	$usuario = array();
	if(isset($_POST["nombre"]) && isset($_POST["apellido"])&& isset($_POST["celular"]) && isset($_POST["correo"]) && isset($_POST["ciudad"]))
	{
		$usuario["nombre"]  =   $_POST["nombre"];
		$usuario["apellido"]=   $_POST["apellido"];
		$usuario["celular"] =   $_POST["celular"];
		$usuario["correo"]  =   $_POST["correo"];
		$usuario["ciudad"]  =   $_POST["ciudad"];
	}
	$usuario["contrasena"] = md5($salt.$_POST["contrasena"]);

	echo json_encode($usuario);
?>