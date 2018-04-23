

<h1 class="page-header text-center">Empleado</h1>
<form action="?c=EmpleadoMantenimiento" method="post">
    
    <div class="well well-sm text-right">

        <div  style=" float: left; width:300px;">
            <label style=" float: left; height: 60px; margin-top: 7px; margin-right: 7px">Buscar:</label>
            <input class="form-control" id="buscar" type="text"  placeholder="Escriba algo para buscar" style="width:230px;" />
        </div>
        <a style="float: left"class="btn btn-primary" href="?c=UsuarioMantenimiento&a=Index">Usuario</a>
        <a class="btn btn-primary" href="?c=EmpleadoMantenimiento&a=Registrar">Registrar</a>
        <input type="submit" value="Editar" name="a" class="btn btn-primary"/>
        <input type="submit" value="Eliminar" name="a" onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" class="btn btn-primary"/>
    </div>
    
    <table id="tabla" class="table table-striped">
        <thead>
            <tr>
                <th style="width:50px;"></th>
                <th style="width:125px;">Cédula</th>
                <th style="width:125px;">Nombre</th>
                <th style="width:125px;">Primer Apellido</th>
                <th style="width:125px;">Segundo Apellido</th> 
                <th style="width:125px;">Direccion</th>
                <th style="width:125px;">Telefono</th>
                <th style="width:125px;">Puesto</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($this->modelEmpleado->Listar() as $r): ?>
                <?php $valor = $r->cedula; ?>
                <tr>
                    <td><input type="radio" name="cedula" value="<?php echo $r->cedula; ?>" ></td>
                    <td><?php echo $r->cedula; ?></td>
                    <td><?php echo $r->nombre; ?></td>
                    <td><?php echo $r->primerApellido; ?></td>
                    <td><?php echo $r->segundoApellido; ?></td>
                    <td><?php echo $r->direccion; ?></td> 
                    <td><?php echo $r->telefono; ?></td>
                    <td><?php echo $r->puesto; ?></td>                                     
                </tr>
            <?php endforeach; ?>
        <script src="archivos/js/buscador.js"></script>
        </tbody>
    </table> 
</form>
</div>
