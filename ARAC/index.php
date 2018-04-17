<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SISTEMA ARAC</title>
        <link href="archivos/css/bootstrap.min.css" rel="stylesheet">
        <link href="archivos/css/estilos.css" rel="stylesheet">

    </head>    
    <body>
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Este boton despliega la barra de navegacion</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">Inicio</a>
                </div>
                <div id="navbar" class="navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="view/presentacion/tramites.php">Tramites</a></li>
                        <li><a href="view/presentacion/noticias.php">Noticias</a></li>
                        <li><a href="view/presentacion/informacion.php">Informacion</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">

                        <li>
                            <a href="#">
                                <span class="glyphicon glyphicon-user " aria-hidden="true"></span>

                            </a>
                        </li>

                        <li>
                            <a href="view/presentacion/sesion/ingresar.php">
                                <span class="glyphicon glyphicon-log-in " aria-hidden="true"></span>
                                Iniciar Sesión
                            </a>
                        </li>
                        <li>
                            <a href="view/matenimiento/mantenimiento.php">
                                <span class="glyphicon glyphicon-edit " aria-hidden="true"></span>
                                Mantenimiento
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="jumbotron">
                <h1>Acueducto Rural Aguas Claras</h1>
                <p>Bienvenidos al sistema de servicios ARAC</p>
            </div> 
        </div>
        <script src="archivos/js/jquery.min.js"></script>
        <script src="archivos/js/bootstrap.min.js"></script>
    </body>
</html>

