<?php 
     include("../config/conexion.php"); 

     $tabla="";
     $sql="SELECT * FROM `libro` LIMIT 12 ";

     //BUSCADOR
     if(isset($_POST['isbn'])){
        $isbn=mysqli_real_Escape_string($con ,$_POST['isbn']);
        $sql = "SELECT * FROM `libro` WHERE isbn like '%$isbn%'  LIMIT 12 "; 
    }
     $resul=mysqli_query($con,$sql);
     $fila =mysqli_num_rows($resul);
    if ($fila) {
     while($row=mysqli_fetch_array($resul)){
        $tabla.='
            <div class="col s6 m4">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" width="200" height="250" src=" '.$row["img"].' ">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">' .$row["isbn"]. '<i class="material-icons right">more_vert</i></span>
                        <p class="center-align">
                         <a href="#eliminaULogico" type="button"  onclick="enviaIsbn(`'.$row["isbn"].'` , `'.$row["estado"].'`)" class="hoverable  modal-trigger">Prestar</a>
                        </p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4"> ' .$row["nombre"]. ' <i class="material-icons right">close</i></span>
                        <p>' .$row["descri"]. ' </p>
                    </div>
                </div>
            </div> 
        '; 
     };
    }else{
        $tabla= '
        <div class="col s12 m8 offset-m4">
           
                <img class="activator" width="350" height="450" src="../media/404.png">
    </div> 
        ';
    } 
     echo $tabla;
?>