<h1 class="page-header">
    <?php echo 'Editar Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=EmpleadoMantenimiento">Socios</a></li>
  <li class="active"><?php echo 'Editar Registro'; ?></li>
</ol>

<form id="frm-empleado" action="?c=EmpleadoMantenimiento&a=Guardar" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label>Cedula: </label>
        <input readonly name="cedula" value="<?php echo $alm->cedula; ?>" class="form-control" placeholder="Ingrese la cedula" data-validacion-tipo="requerido"/>
    </div>
  
    <div class="form-group">
        <label>Nombre: </label>
        <input type="text" name="nombre" value="<?php echo $alm->nombre; ?>" class="form-control" placeholder="Ingrese el Nombre" data-validacion-tipo="requerido" />
    </div>
   
    <div class="form-group">
        <label>Primer Apellido: </label>
        <input type="text" name="primerApellido" value="<?php echo $alm->primerApellido; ?>" class="form-control" placeholder="Ingrese el 1 Apellido" data-validacion-tipo="requerido" />
    </div>
    
    <div class="form-group">
        <label>Segundo Apellido: </label>
        <input type="text" name="segundoApellido" value="<?php echo $alm->segundoApellido; ?>" class="form-control" placeholder="Ingrese el 2 Apellido" data-validacion-tipo="requerido" />
    </div>
    
    <div class="form-group">
        <label>Dirección: </label>
        <input type="text" name="direccion" value="<?php echo $alm->direccion; ?>" class="form-control" placeholder="Ingrese la Direccion" data-validacion-tipo="requerido" />
    </div>
    
    <div class="form-group">
        <label>Telefono: </label>
        <input type="text" name="telefono" value="<?php echo $alm->telefono; ?>" class="form-control" placeholder="Ingrese el # Telefono" data-validacion-tipo="requerido" />
    </div>
    
    <div class="form-group">
        <label>Puesto: </label>
        <input type="text" name="puesto" value="<?php echo $alm->puesto; ?>" class="form-control" placeholder="Ingrese el puesto" data-validacion-tipo="requerido" />
    </div>
    
    
    
    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-empleado").submit(function(){
            return $(this).validate();
        });
    })
</script>