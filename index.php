<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
</head>
    <body>
        <?php
        //Verificar si el formulario se ha enviado
        if ($_SERVER["REQUEST_METHOD"]== "POST"){
            //Obtener los datos del formulario
            $username = $_POST['username'];
            $contraseña = $_POST['contraseña'];
            
            //Obtener fecha a la que se logeo
            $fecha_hora = date('Y-m-d H:i:s');
            
            //Mostrar los datos en pantalla
            $datos = "Usuario: $username | Contraseña: $contraseña | $fecha_hora";
            
            $archivo = 'logs.txt';
            
            file_put_contents($archivo, $fecha_hora, FILE_APPEND);
            
            echo"<h3>Los datos se han guardado correctamente.</h3>";
        }else{
            ?>
        <<h2>Ingrese su nombre de Usuario y una contraseña</h2>;
        <form action="" method="POST">
            <label for="username">Nombre de usuario:</label>
            <input type="text" id="username" name="username" required><br><br>
            
            <label for="contraseña">Contraseña:</label>
            <input type="text" id="contraseña" name="contraseña" required><br><br>
            
            <input type="submit" value="Enviar">
            
        </form>
        <?php
        }
        ?>
    </body>
</html>
