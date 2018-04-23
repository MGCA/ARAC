

<h1 class="page-header text-center">Usuario</h1>
<form action="?c=UsuarioMantenimiento" method="post">
    
    <div class="well well-sm text-right">

        <div  style=" float: left; width:300px;">
            <label style=" float: left; height: 60px; margin-top: 7px; margin-right: 7px">Buscar:</label>
            <input class="form-control" id="buscar" type="text"  placeholder="Escriba algo para buscar" style="width:230px;" />
        </div>
        <!--<a style="float: left"class="btn btn-primary" href="?c=UsuarioMantenimiento&a=Index">Registrar Usuario</a>-->
        <a class="btn btn-primary" href="?c=UsuarioMantenimiento&a=Registrar">Registrar</a>
        <input type="submit" value="Editar" name="a" class="btn btn-primary"/>
        <input type="submit" value="Eliminar" name="a" onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" class="btn btn-primary"/>
    </div>
    
    <table id="tabla" class="table table-striped">
        <thead>
            <tr>
                <th style="width:50px;"></th>
                <th style="width:125px;">Numero de Usuario</th>
                <th style="width:125px;">Nombre</th>
                <th style="width:125px;">Clave</th>
                <th style="width:125px;">Empleado</th> 
            </tr>
        </thead>
        <tbody>
            <?php foreach ($this->modelUsuario->Listar() as $r): ?>
                <?php $valor = $r->numUsuario; ?>
                <tr>
                    <td><input type="radio" name="numUsuario" value="<?php echo $r->numUsuario; ?>" ></td>
                    <td><?php echo $r->numUsuario; ?></td>
                    <td><?php echo $r->nombreUsuario; ?></td>
                    <td><?php echo $r->password; ?></td>
                    <td><?php echo $r->empleado; ?></td>                                  
                </tr>
            <?php endforeach; ?>
        <script src="archivos/js/buscador.js"></script>
        </tbody>
    </table> 
</form>
</div>
