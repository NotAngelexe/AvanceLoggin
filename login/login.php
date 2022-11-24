<?php
    session_start();
    $_SESSION['intentosLogin']=0;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login</title>
</head>

<body>
<div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
            <!-- Copyright -->
            <div class="text-white mb-3 mb-md-0">
            </div>
            <!-- Copyright -->
        </div>
    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
               
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">

                <!------------FORMULARIO----------------->
                    <form action="#" method="post" name="loginn" id="loginn">
                    <div id="checklogin">
        
                    </div>
                        <div class="divider d-flex align-items-center my-4">
                            <h3 class="text-center fw-bold mx-3 mb-0">Bienvenido</h3>
                        </div>
                        <!-- Ususario -->
                        <div class="form-outline mb-4">
                            <input type="text" id="usuario" name="usuario" class="form-control form-control-lg" placeholder="Introduce tu nombre usuario" value="<?php if (isset($_COOKIE["name"])) {echo $_COOKIE["name"];} ?>" required/>
                            <label class="form-label" for="form3Example3">Nombre de usuario</label>
                        </div>

                        <!-- Password -->
                        <div class="form-outline mb-3">
                            <input type="password" id="pass" name="pass" class="form-control form-control-lg" placeholder="Introduce tu contraseña" value="<?php if (isset($_COOKIE["pass"])) {echo $_COOKIE["pass"];} ?>" required/>
                            <label class="form-label" for="form3Example4">Contraseña</label>
                        </div>

                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" name="recordar" checked>
                            <label class="form-check-label" for="flexSwitchCheckChecked">Guardar cookies</label>
                        </div>

                        <div class=" d-flex  text-center text-lg-start mt-4 pt-2 flex-row justify-content-between">
                            <div style="margin-right:20px">
                            <button type="submit" name="btn-ingresar" value="enviar" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Ingresar</button>

                            </div>
                            <p class="small fw-bold mt-2 pt-1 mb-0">No tienes cuenta? <a href="register.php" class="link-danger">Registrate</a></p>
                            <p class="small fw-bold mt-2 pt-1 mb-0">Olvido su contraseña <a href="cambiarcontra.php" class="link-prymary">Recuperar</a></p>
                        </div>
                        <p> <?php echo $_SESSION['intentosLogin'] ?></p>
                    </form>
                </div>
            </div>
        </div>
        <div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
            <!-- Copyright -->
            <div class="text-white mb-3 mb-md-0">
            </div>
            <!-- Copyright -->
        </div>

    </section>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="app2.js"></script>
</body>

</html>