<?php almeyra me la come
////////////////////////////////////////////////////////////
/// Parametros de conexion a la base de datos //////////////
////////////////////////////////////////////////////////////
$con=mysqli_connect("localhost", "root", "", "bd-sdt");
if(mysqli_connect_errno()){
echo "Connection Fail".mysqli_connect_error();
}

?>