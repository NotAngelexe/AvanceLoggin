<!--------------Hace el registro de los nuevos usuarios----------------->
<?php
if(isset($_POST['reg_user'])){
    if($_POST['password'] == $_POST['password1']){
        $nomuser=$_POST['username'];
        $correo=$_POST['email'];
        $contrasena=md5($_POST['password']);
        $fullname=$_POST['fullname'];
        #veridficamos las pass
        $sql=$conexion->query("insert into user (nombreUsuario,correo,contrasena,nombreCompleto,estado)
        value ('$nomuser','$correo','$contrasena','$fullname',1);");
        echo "registro exitoso";
    }else{
        echo "<div class='alert alert-warning' role='alert'>
                        Las contraseñas no coinciden
                      </div>";
    }
    
}   
?>