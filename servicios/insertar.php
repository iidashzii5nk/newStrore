<?php
include('conexionPDO.php');


$name = trim($_POST['name']); //trim remueve los espacios del principio y del final
$email = trim($_POST['email']);
$password = trim($_POST['password']);
$fechareg = date("d/m/y"); //Date automaticamente me toma la fecha actual y y la registra


$consulta = "INSERT INTO datos(nombre, email, contraseña, fecha_reg) VALUES (:name, :email, :password, :fecha)";

$resultado = $con->prepare($consulta);
$resultado->execute(array(":name" => $name, ":email" => $email, ":password" => $password, ":fecha" => $fechareg));


if ($resultado) {

    echo '<script>
    alert ("Usuario registrado");
    window.history.go(-2);//Funcion para devolvernos a la pagina anterior
   </script>';
} else {
    echo 'No registrado';
}
$resultado->closeCursor();
