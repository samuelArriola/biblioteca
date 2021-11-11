<?php 
    include("../config/conexion.php"); 
    session_start();
    $nombre = $_SESSION['NOMBRE'];

    $isbn = $_POST['isbn'];
    $suma = $_POST['suma'];
    $f_prestar = date('Y-m-d',strtotime("+7h"));
    $f_entrega = "";
    $dia_entrega = date('l', strtotime($f_entrega));
    
    if ($suma>30) {
       $f_entrega = date("Y-m-d",strtotime($f_prestar." + 14 days")); 
       if(date('l', strtotime($f_entrega)) == 'Sunday'){
         $f_entrega = date("Y-m-d",strtotime($f_entrega."+ 1 days"));
       }
    }

    $query="UPDATE libro  SET f_prestar='$f_prestar', f_entrega = '$f_entrega', usuario = '$nombre', estado ='1' WHERE isbn = '$isbn' ";
    $resul=mysqli_query($con,$query);
    if(!$resul){
       echo 'error al actualizar';
    }else{
       echo 'Libro prestado exitosamente';
    }   

?>