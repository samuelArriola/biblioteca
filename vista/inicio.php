<?php 
     session_start();
     $nombre = $_SESSION['NOMBRE'];
     if ($nombre==null || $nombre==" ") {
         header("location:../index.php");
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
    <link href="../css/materialize.min.css" rel="stylesheet">
    <title>Inicio</title>
</head>

<body style="background-image: linear-gradient(to  bottom right, rgb(26, 109, 87), rgba(188, 255, 238), rgba(26, 109, 87));">


    <!--responsivida del nemu pegable-->
    <div class="sidenav " id="mobile-demo">
        <div class="" style="background-color: #0D5C47;">
            <div class=" container section  ">
                <div class="center">
                    <br> <span class="white-text email">Biblioteca</span>
                </div> <br>
                <span class="white-text email">  +57 311 209 2111</span>
                <span class="white-text email">  biblioteca@gmail.com</span>
            </div>
        </div>

        <ul>
             <li><a href="../config/cerrar_session.php" class="whitw-txt"><span class="black-text"> Salir</span></a></li>
        </ul>
    </div>

    <div>
        <nav class="navbar-fixed" style="background-color: #0D5C47;">
            <div class="container">
                <a href="inicio.php" class="left brand-logo">
                    <span class="whiite-text" style="vertical-align: top;">Biblioteca</span>
                </a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger right"><i class="material-icons white-text">menu</i></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="../config/cerrar_session.php" class="whitw-txt"><span class="white-text"> Salir</span></a></li>
                </ul>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><span class="white-text"> Hola <?php echo $nombre ?>!! </span></li>
                </ul>
               
            </div>
        </nav>
    </div>

    


    <section class="container section " style="background-color: white;">
        <!-- // buscador  -->
        <div class=" section">
            <div class="row ">
            <form action="" method="POST">
            <div class="col m6">
                <div class="input-field col m10 offset-m8">
                <i class="material-icons prefix">search</i> 
                <input name="buscador" id="buscar_isbn" type="text" class="validate" placeholder="Ingresar ISBN" >
                <label for="buscar">Buscar</label>
                </div>
                </div>
            </form> 
            </div>
        </div>

        <!-- Target -->
        <div class="row" id="mostrarLibros">
        </div>
    </section>

    	<!--  Confirmar Prestamo -->
	<div id="eliminaULogico" class="modal">
		<div class="modal-content">
		<input  id="Iisbn" type="hidden">
		<input  id="Iestado" type="hidden">
		<h5 class="center" >¿Estás seguro que desea pretar este libro?</h5>
			<div class="center">
			<button   onclick="prestarLibro()" type="button" class="btn-small red modal-close">Si</button>
			<a href="#!" class="modal-close waves-effect waves-green btn-flat btn-small orange">No</a>
			</div> 
		</div>
	</div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
   <!-- <script src="../js/jquery-3.3.1.min.js"></script> -->
   <script src="../js/materialize.min.js"></script>
   <script src="../js/app.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            M.AutoInit();
        });
    </script>
</body>

</html>