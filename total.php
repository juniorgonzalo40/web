<?php
   if(isset($_POST["enviar"])){
 $fecha = $_POST["fecha"];
 $ingreso=$_POST["ingreso"];
 $monto_ingreso=$_POST["monto_ingreso"];
 $egreso=$_POST["egreso"];
 $monto_egreso=$_POST["monto_egreso"];
 $total = $monto_ingreso - $monto_egreso;
 include("db.php");
 
 
 $proceso = "INSERT INTO tabla VALUES ('','$fecha','$ingreso','$monto_ingreso','$egreso','$monto_egreso','$total')";
 
 $ejecutar = mysqli_query($conect,$proceso);

}else{
    echo("error");
}

?>