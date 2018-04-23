<link href="../../../archivos/css/bootstrap.min.css" rel="stylesheet">
<link href="../../../archivos/css/estilos.css" rel="stylesheet">
<div class="container">
<div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            Nuevo Usuario
                        </h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="?c=UsuarioMantenimiento&a=Guardar">
                            <div class="form-group">
                                <label>Nombre de Usuario</label>
                                <input type="text" class="form-control" name="nombreUsuario" placeholder="usuario">
                            </div>
                            <div class="form-group">
                                <label>contraseña</label>
                                <input type="password" class="form-control" name="clave1" placeholder="password">
                            </div>
                            <div class="form-group">
                                <label>Repite la contraseña</label>
                                <input type="password" class="form-control" name="password" placeholder="repet-password">
                            </div>
                            <div class="form-group">
                                <label>Cedula Empleado</label>
                                <input type="text" class="form-control" name="empleado" placeholder="cedula">
                            </div>
                            <br>
                            <button type="submit" class="btn btn-default" name="submit">Aceptar</button>
                            <button type="reset" class="btn btn-default">Cancelar</button>
                        </form>
                     
                    </div>
                </div>
</div>
<script src="../../../archivos/js/jquery.min.js"></script>
<script src="../../../archivos/js/bootstrap.min.js"></script>