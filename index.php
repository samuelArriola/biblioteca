<?php 
    if($_POST){
        $nombre = $_POST['nombre'];
        if (!$nombre) {
            echo '<script> alert("Por favor ingrese el nombre");  window.history.go(-1); </script> ';
        }else{
            
            session_start();
            $_SESSION['NOMBRE']= $nombre;
            header('location: vista/inicio.php');
        }


       
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.min.css" rel="stylesheet">
    <title>Inicio</title>
</head>

<body style="background-image: linear-gradient(to  bottom right, rgb(26, 109, 87), rgba(188, 255, 238), rgba(26, 109, 87));">

    <!--responsivida del nemu pegable-->
    <div class="sidenav " id="mobile-demo">
        <div class="" style="background-color: #0D5C47;">
            <div class=" container section  ">
                <div class="center">
                    <a href="index.php" class=" brand-logo">
                       <br> <span class="white-text email">  Biblioteca</span>
                </div> <br>
                <span class="white-text email">  +57 311 209 2111</span>
                <span class="white-text email">  biblioteca@gmail.com</span>
            </div>
        </div>
    </div>

    <div>
        <nav class="navbar-fixed" style="background-color: #0D5C47;">
            <div class="container">
                <a href="index.php" class="left brand-logo">
                    <span class="whiite-text" style="vertical-align: top;">Biblioteca</span>
                </a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger right"><i class="material-icons white-text">menu</i></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href=""><span class="white-text"> ¿Quienes Somos?</span></a></li>
                </ul>
            </div>
        </nav>
    </div> <br>

    <!-- Crear producto -->
    <div class="">
        <div class="row" > 
            <div class="col s12 m8 l4 offset-l4 offset-m2">
                <div class="card center-align" style="border-radius: 15px; border-style: solid; border-color: rgb(188, 255, 238);">
                    <div class="section card-image">
                        <i class="teal-text lighten-2 large material-icons">people</i>
                    </div>
                    <div class="card-content" id="form">
                        <span class="card-title" style="position:relative; top: -18px">Iniciar Sessión </span>
                        <form action="" method="post" id="registra_u"> <br>
                            <span style="opacity: 0.5; position:relative; top: -13px" class="left">Los campos señalados con "*" son campos obligatorios</span>
                            <div class="row">
                                <input type="hidden" id="dep_u">
                                <div class="input-field col m12 s12 ">
                                    <input name="nombre" id="i1" type="text" class="validate " required >
                                    <label for="i1">*Nombre</label>
                                </div>
                                <div class="input-field col m12 s12">
                                    <input name="apellido" id="i2" type="password" class="materialize-textarea validate " required>
                                    <label for="i2">*Contraseña</label>
                                </div>
                            </div>

                            <div class="center section">
                                <button class=" btn  waves-effect waves-light" type="submit" id="guardar_usuario">Ingresar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


   <script src="js/jquery-3.3.1.min.js"></script>
   <script src="js/materialize.min.js"></script>
   <script>
        document.addEventListener('DOMContentLoaded', function() {
            M.AutoInit();
        });
    </script>
    <script src=""></script>

</body>

</html>