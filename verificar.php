<?php

session_start();
include("conexion.php");
if(isset($_POST['usuario'])&& !empty($_POST['usuario']) &&
isset($_POST['pw']) && !empty($_POST['pw']))
{
$con = mysqli_connect($host,$user,$pw,$db) or die ("problemas con el servidor");
$usr=$_POST['usuario'];
$psw=$_POST['pw'];
$query = "SELECT * FROM usuario WHERE username like '$usr' and password = '$psw'";
$sel=mysqli_query($con,$query);

$sesion=mysqli_fetch_array($sel);
if($_POST['pw']==$sesion['password'])
    $idu = $sesion['id'];
{
  $_SESSION['username'] = $_POST['usuario'];

  //echo "sesion exitosa";
  $rol = $sesion['Rol'];
  $iduser = $sesion['id'];
  $_SESSION['idm'] = $idu;
switch ($rol) {
  case 1:

     header("Location: administrador/home.php");
//echo $rol;
//echo $iduser;
echo $sesion['id'];
     break;

  case 2:

    header("Location: index.php");

     break;
  case 3:
    header("Location: /alberto/Ultima/login/alumno/alumno.php");
    break;

}
}
/*else {
  echo "conexion erronea";
}*/
}else{
  echo "se deben llenar los campos";

  //header("Location:index.php");
}

 ?>
