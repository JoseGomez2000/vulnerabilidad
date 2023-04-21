<?php
include('db.php');
$usuario=$_POST['Usuario'];
$contraseña=$_POST['Contraseña'];
session_star();
$_SESSION['Usuario'] = $usuario;



$consulta="SELECT*FROM datos where Usuario='$usuario' and Contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:home.php");

}else{
    ?>
    <?php
    include("index.html");

  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
