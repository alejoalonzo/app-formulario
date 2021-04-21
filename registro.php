<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"> 
        <title>Formulario De Registro</title>
		<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;800&display=swap" rel="stylesheet">
		<style>
        * {
            font-family: 'Raleway', sans-serif;
            box-sizing: border-box;
        }
        body {
            background: #e6e6e6;
        }
		.fondo {
            margin: auto;
            background: white;
            height: 500px;
            width: 500px;
            border-radius: 20px;
            box-shadow: 15px 15px 25px #cfcfcf;
        }

        h1 {
            font-size: 2rem;
            font-weight: 800;
            color: #333333;
            text-align: center;
            padding-top: 40px;
        }

        p {
            text-align: center;
            font-weight: 300;
        }

        .left,
        .left2 {
            float: left;
            text-align: center;
        }

        #NA {
            overflow: hidden;
            width: 100%;
        }

        .medio,
        .grande {
            height: 35px;
            border-radius: 18px;
            border: 1px solid #e6e6e6;
            background: #f7f7f7;
            margin: 10px 15px;

        }

        .medio {
            width: 220px;

        }

        .grande {
            width: 470px;
        }

        textarea {
            height: 90px !important;
            padding-top: 10px !important;
            padding-left: 20px;
        }

        input[type="text"], input[type="email"]{
            padding-left: 20px;
        }

        input[type="submit"] {
            background: #333333;
            width: 470px;
            height: 30px;
            border: none;
            border-radius: 18px;
            color: white;
        }

        .submit {
            text-align: center;
            margin-top: 20px;
        }


        input[type="submit"]:hover {
            background: #00ad5f;
        }

        input:focus,
        textarea:focus {
            border: 1px solid #a1eafb;
            background: #f7f7f7;
            outline: none !important;
            outline-width: 0 !important;
            box-shadow: none;
            -moz-box-shadow: none;
            -webkit-box-shadow: none;

        }
    </style>
    </head>
    <body>

	<div class="fondo">
        <h1>Regístrate</h1>
        <p>Rellene todos los datos. Le responderemos lo antes posible.</p>

<!-- En la siguiente linea  se estable el link con el script de conexion.php -->
        <form action="conexion.php" method="POST">
            <div id="NA">
                <div class="left">
                    <input type="text" name="nombre" placeholder="Nombre" class="medio">
                </div>
                <div class="left2">
                    <input type="text" name="apellidos" placeholder="Apellidos" class="medio">
                </div>
            </div>

            <div>
                <div>
                    <input type="email" name="email" required placeholder="E-mail*" class="grande">
                </div>
                <div>
                    <input type="text" name="telefono" placeholder="Telefono" class="grande">
                </div>
                <div>
                    <textarea name="direccion" rows="6" placeholder="Dirección" class="grande"></textarea>
                </div>
            </div>


            <div class="submit">
                <input type="submit" name="registrarse" value = "registrarse">
            </div>

            

        </form>
    </div>
	
	</body>
</html>
