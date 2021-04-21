<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabla</title>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;800&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Raleway', sans-serif;
            box-sizing: border-box;
        }
        body {
            background: #e6e6e6;
        }
        .tabla {
            margin: auto;
            background: white;
            height: 200px;
            width: 700px;
            border-radius: 20px;
            box-shadow: 15px 15px 25px #cfcfcf;
            text-align: center;
            padding-top:20px;
            padding-left:30px;
        }
        h2 {
            font-size: 2rem;
            font-weight: 800;
            color: #333333;
            text-align: center;
            padding-right:50px;
        }
        
    </style>
</head>
<body>


    <div class = "tabla">
        <table>
            <h2>Perfil</h2>
            <tr>
                <th>   ID        </th>
                <th>   NOMBRE           </th>
                <th>   APELLIDOS        </th>
                <th>   E-MAIL                </th>
                <th>   TELÉFONO   </th>
                <th>   DIRECCIÓN             </th>
            </tr>
            <?php
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

                //----------------------------------------------------MOSTRAR EN TABLA-------------------------------------------

                //consulta y ejecucion
                    $consulta = "SELECT * FROM usuarios";
                    $ejecutarConsulta = mysqli_query($enlace, $consulta);
                    $verFilas = mysqli_num_rows($ejecutarConsulta);
                    $filas = mysqli_fetch_array($ejecutarConsulta);//traigo todas las filas y las meto en un array

                    //control de error
                    if(!$ejecutarConsulta){
                        echo "Error en la consulta";
                    }else{
                        if($verFilas<1){//si no se ha registrado aun
                            echo "<tr><td> Sin registros </td><tr>";
                        }else{
                            echo "
                                <tr>
                                    <td>".$filas[0]."</td>
                                    <td>".$filas[1]."</td>
                                    <td>".$filas[2]."</td>
                                    <td>".$filas[3]."</td>
                                    <td>".$filas[4]."</td>
                                    <td>".$filas[5]."</td>
                                </tr>
                            ";
                        }
                    }

            ?>
        </table>
    </div>
    
</body>
</html>