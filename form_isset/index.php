<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Formulario</title>
</head>
<body>
    <main class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card col-sm-4 p-4">
            <div class=" d-flex justify-content-center mb-3">
                <h4>Formulario</h4>
            </div>
            <div class="mb-2">
                <form method="post">
                    <div class="mb-2">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" name="nombre" id="nombre" class="form-control" required>
                    </div>
                    <div class="mb-2">
                      <label for="email" class="form-label">Correo electronico</label>
                      <input type="email" name="email" id="email" class="form-control" required>
                    </div>
                    <div class="mb-2">
                      <label for="contraseña" class="form-label">Contraseña</label>
                      <input type="password" name="contraseña" id="contraseña" class="form-control" required>
                    </div>
                    <div class="mb-2">
                        <label for="edad" class="form-label">Edad</label>
                        <input type="number" name="edad" id="edad" class="form-control" required>
                    </div>
                    <div class="mb-2">
                        <label for="mensaje">Mensaje</label>
                        <div class="mt-2">
                        <textarea name="mensaje" id="mensaje" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="mb-2">
                        <label for="genero" class="form-label">Genero</label>
                        <div class="mb-3">
                        <input type="radio" name="genero" id="hombre" value="hombre"> Hombre
                        <input type="radio" name="genero" id="mujer" value="mujer"> Mujer
                        <input type="radio" name="genero" id="otro" value="otro"> Otro
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                  </form>
            </div>
        </div>
    </main>

<?php
    
    if(isset($_REQUEST['nombre'])){
        $nombre=$_REQUEST['nombre'];
        $email=$_REQUEST['email'];
        $contraseña=$_REQUEST['contraseña'];
        $edad=$_REQUEST['edad'];
        $mensaje=$_REQUEST['mensaje'];
        $genero=$_REQUEST['genero'];
        $salida='<div class="alert alert-primary">';
        $salida.='<strong>Nombre: </strong>'.$nombre;
        $salida.='<br><strong>Correo: </strong>'.$email;
        $salida.='<br><strong>Contraseña: </strong>'.$contraseña;
        $salida.='<br><strong>Edad: </strong>'.$edad;
        $salida.='<br><strong>Mensaje: </strong>'.$mensaje;
        $salida.='<br><strong>Genero: </strong>'.$genero;
        $salida.='</div>';
        echo $salida;
    }
?>
</body>
</html>