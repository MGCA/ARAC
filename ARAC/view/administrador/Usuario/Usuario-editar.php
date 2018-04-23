<h1 class="page-header">
    <?php echo 'Editar Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=UsuarioMantenimiento">Usuarios</a></li>
  <li class="active"><?php echo 'Editar Registro'; ?></li>
</ol>

<form id="frm-Usuario" action="?c=UsuarioMantenimiento&a=Guardar" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label>Numero de Usuario: </label>
        <input readonly name="numUsuario" value="<?php echo $alm->numUsuario; ?>" class="form-control"  data-validacion-tipo="requerido"/>
    </div>
  
    <div class="form-group">
        <label>Nombre: </label>
        <input type="text" name="nombreUsuario" value="<?php echo $alm->nombreUsuario; ?>" class="form-control" placeholder="Ingrese el Nombre" data-validacion-tipo="requerido" />
    </div>
   
    <div class="form-group">
        <label>Clave: </label>
        <input type="text" name="password" value="<?php echo $alm->password; ?>" class="form-control" placeholder="clave" data-validacion-tipo="requerido" />
    </div>
    
    <div class="form-group">
        <label>Cedula de Empleado: </label>
        <input type="text" name="empleado" value="<?php echo $alm->empleado; ?>" class="form-control" placeholder="empleado" data-validacion-tipo="requerido" />
    </div>
    
    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-usuario").submit(function(){
            return $(this).validate();
        });
    })
</script>