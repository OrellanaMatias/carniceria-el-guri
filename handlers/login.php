<?php
//Inicio de sesion
//Sesion start
session_start();
//Error reporting, indica la cantidad de errores en el archivo hit_counter.txt
error_reporting();
//include archivo de conexion a la bd
include("db_connection.php");
if (isset($_POST['login'])) {
    $ret = mysqli_query($con, "SELECT * FROM user WHERE usuario='" . $_POST['email'] . "' and password='" . $_POST['password'] . "'");
    $num = mysqli_fetch_array($ret);
    if ($num > 0) {
      $_SESSION['usuario'] = $_POST['usuario'];
      $_SESSION['pass'] = $num['password'];

      $extra = "inventario.html";
      echo "<script>window.location.href='" . $extra . "'</script>";
      exit();
        } else {
      $_SESSION['action1'] = "Usuari@ o Contraseña Inválida";
      $extra = "login.php";
  
      echo "<script>window.location.href='" . $extra . "'</script>";
      exit();
?>