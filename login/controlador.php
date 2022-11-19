<!--------------Valida el login e ingresa---------------------------->
<?php
#session_start();
    if(!empty($_POST['btn-ingresar'])){
        if(empty($_POST['usuario']) && empty($_POST['pass'])){
         echo "<div class='alert alert-warning' role='alert'>
                    Los campos estan vacios
                    </div>";
            
        }else{
            $usuario=$_POST['usuario'];
            $pass=$_POST['pass'];
            $passcifrada=md5($pass);
            #veridficamos las pass
            $sql=$conexion->query("select * from user where nombreUsuario='$usuario' and contrasena='$passcifrada'");
            if($datos=$sql->fetch_object()){ # si el usuario y pass son correctos
                if(!empty($_POST["recordar"])){     #cookies fijadas
                    setcookie("name",$usuario,time()+3600);
                    setcookie("pass",$pass,time()+3600);
                }else{                              #cookies no fijadas
                    setcookie("name","");
                    setcookie("pass","");
                }
                #redireccionamos a inicio
                echo "usuario correcto";
                $_SESSION['usuario']=$usuario;
                $_SESSION['intentosLogin']=0;  

            }else{
                $_SESSION['intentosLogin']=$_SESSION['intentosLogin']+1;
                echo "<div class='alert alert-danger' role='alert'>
                    Ingresa correctamente tus datos"
                    .$_SESSION['intentosLogin']."
                    </div>";
                    if($_SESSION['intentosLogin']==1){
                        echo "<a href='cambiarcontra.php'> cambiar contrasena</a>";
                    }
                   
            }
        }
    }
?>