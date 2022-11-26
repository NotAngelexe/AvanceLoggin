<?php
###Conexion a la base de datos
 $servidor='localhost:3306';
 $cuenta='root';
 $password='';
 $bd='usuarios';
  
 //conexion a la base de datos
 $conexion = new mysqli($servidor,$cuenta,$password,$bd);

 if ($conexion->connect_errno){
      die('Error en la conexion');
 }
?>