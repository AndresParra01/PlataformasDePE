<?php
$salt = "AS2020FP";
echo md5($_POST['contrasena'].$salt);
echo md5($_POST['contrasenalogin'].$salt);
?>