<?php
//------------------------------------CONEXION---------------------------------------------------------
// variables
$server = "localhost";
$user = "root";
$password = "";
$baseDeDatos = "bbddFormulario";

//Creamos la conexion
$enlace = mysqli_connect($server, $user, $password, $baseDeDatos);

//control de error al conecectar
if(!$enlace){//es lo mismo que decir var enlace = false
    echo "Error en la conexion con el servidor";
}

//------------------------------------------INSERTAR-----------------------------------------------

//primero recogemos los datos
if(isset($_POST['registrarse'])){
    $id = rand(1,99);//El id se lo asignamos aleatorio entre 1 y 99
    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];
    $direccion = $_POST["direccion"];
}

//Insertamos los datos en la bbdd, es muy importante que los VALUES esten en el mismo orden que estan en la BBDD
$insertarDatos = "INSERT INTO usuarios VALUES('$id',
                                                '$nombre',
                                                '$apellidos',
                                                '$email',
                                                '$telefono',
                                                '$direccion')";//Preferible usar comillas simples. ojo! ultimo campo sin coma

//Ejecurar 
$ejecutarInsertar = mysqli_query($enlace, $insertarDatos);

//Control de error al ejecutar
if(!$ejecutarInsertar){
    echo "Error en la linea de sql";
}

?>