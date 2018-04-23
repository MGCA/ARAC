
<h1 class="page-header">
    <?php echo 'Nuevo Registro';?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=EmpleadoMantenimiento">Empleado</a></li>
  <li class="active"><?php echo 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-empleado" action="?c=EmpleadoMantenimiento&a=Guardar" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label>Cedula: </label>
        <input name="cedula" class="form-control" placeholder="Ingrese la cedula" data-validacion-tipo="requerido"/>
    </div>
  
    <div class="form-group">
        <label>Nombre: </label>
        <input type="text" name="nombre" class="form-control" placeholder="Ingrese el Nombre" data-validacion-tipo="requerido" />
    </div>
   
    <div class="form-group">
        <label>Primer Apellido: </label>
        <input type="text" name="primerApellido"class="form-control" placeholder="Ingrese el 1 Apellido" data-validacion-tipo="requerido" />
    </div>
    
    <div class="form-group">
        <label>Segundo Apellido: </label>
        <input type="text" name="segundoApellido"class="form-control" placeholder="Ingrese el 2 Apellido" data-validacion-tipo="requerido" />
    </div>
    
    <div class="form-group">
        <label>Direccion: </label>
        <input type="text" name="direccion" class="form-control" placeholder="Ingrese la Direccion" data-validacion-tipo="requerido" />
    </div>
    
    <div class="form-group">
        <label>Telefono: </label>
        <input type="text" name="telefono" class="form-control" placeholder="Ingrese el # Telefono" data-validacion-tipo="requerido" />
    </div>
    
    <div class="form-group">
        <label>Puesto: </label>
        <input type="text" name="puesto" class="form-control" placeholder="Ingrese el Puesto" data-validacion-tipo="requerido" />
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
</div>

