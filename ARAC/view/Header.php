<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SISTEMA ARAC</title>
        <link href="archivos/css/bootstrap.min.css" rel="stylesheet">
        <link href="archivos/css/estilos.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    </head>    
    <body>
        <header>  
            <nav class="navbar navbar-default navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Este boton despliega la barra de navegacion</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="Index.php">Inicio</a>
                    </div>
                    <div id="navbar" class="navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="?c=Recibo&a=Index">Recibo</a></li>
                            <li><a href="?c=Compra&a=Index">Compra</a></li>
                            <li><a href="?c=Inventario&a=Index">Inventario</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="view/presentacion/sesion/ingresar.php">
                                    <span class="glyphicon glyphicon-log-in " aria-hidden="true"></span>
                                    Salir
                                </a>
                            </li>
                            <li>
                                <a href="?c=HomeMantenimiento&a=Index">
                                    <span class="glyphicon glyphicon-edit " aria-hidden="true"></span>
                                    Mantenimiento
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

