<?php
if (isset($_GET['error'])) {
    echo "<script language='JavaScript'>alert('El Usuario o Contraseña ingresados son incorrectos."
    . " Intente Nuevamente');</script>";
}
?>

<html>
    <head>
        <title>Login</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css" />
        <link rel="stylesheet" href="assets/js/jquery-ui/jquery-ui.min.css" />
        <link rel="stylesheet" href="assets/css/style.css" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
    </head>
    <body>
        <div class="container" style="height: 500px;">
            <form id="frm-login" class="login_form" action="?c=Login&a=Autenticar" method="post" enctype="multipart/form-data" style="width: 300px; margin-top: 150px; margin-left: 40%;">
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <h3 class="text-center">Login</h3>
                    </div>  
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label>Nombre de usuario</label>
                        <input type="text" class="form-control" name="nombreusuario" value="" placeholder="Digite el nombre de usuario" data-validacion-tipo="requerido|min:3" required="required" autofocus="autofocus"/>
                    </div>  
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label>Clave</label>
                        <input type="password" name="clave" value="" class="form-control" placeholder="Digite la clave" data-validacion-tipo="requerido|min:4" required="required"/>
                    </div>  
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12 text-center">
                        <button class="btn_submit btn btn-success">ENTRAR</button>
                    </div>  
                </div>
                
            </form>
        </div>
    </body>
</html>

<script>
    $(document).ready(function () {
        $("#frm-login").submit(function () {
            return $(this).validate();
        });
    })
</script>