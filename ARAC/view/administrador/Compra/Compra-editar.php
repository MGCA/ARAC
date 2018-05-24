<h1 class="page-header">
    <?php echo 'Editar Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=CompraMantenimiento">Compras</a></li>
  <li class="active"><?php echo 'Editar Registro'; ?></li>
</ol>

<form id="frm-compra" action="?c=CompraMantenimiento&a=Guardar" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label>Numero Compra: </label>
        <input readonly name="numCompra" value="<?php echo $compra->numCompra; ?>" class="form-control" placeholder="Ingrese la cedula del producto" data-validacion-tipo="requerido"/>
    </div>
  
    <div class="form-group">
        <label>Encargado: </label>
        <input type="text" name="encargadoCompra" value="<?php echo $compra->encargadoCompra; ?>" class="form-control" placeholder="Ingrese el Nombre" data-validacion-tipo="requerido" />
    </div>
   
    <div class="form-group">
        <label>Nombre del Negocio: </label>
        <input type="text" name="nombreNegocio" value="<?php echo $compra->nombreNegocio; ?>" class="form-control" placeholder="Ingrese el 1 Apellido" data-validacion-tipo="requerido" />
    </div>
    
    <div class="form-group">
        <label>Motivo de Compra: </label>
        <input type="text" name="motivoCompra" value="<?php echo $compra->motivoCompra; ?>" class="form-control" placeholder="Ingrese el 2 Apellido" data-validacion-tipo="requerido" />
    </div>
    
    <div class="form-group">
        <label>Lugar de Compra: </label>
        <input type="text" name="lugarCompra" value="<?php echo $compra->lugarCompra; ?>" class="form-control" placeholder="Ingrese el # Telefono" data-validacion-tipo="requerido" />
    </div>
    
    <div class="form-group">
        <label>Fecha: </label>
        <input type="date" name="fechaCompra" value="<?php echo $compra->fechaCompra; ?>" class="form-control" placeholder="Ingrese el Correo" data-validacion-tipo="requerido" />
    </div>
    
    <div class="form-group">
        <label>Monto Total de Compra: </label>
        <input type="text" name="montoTotalCompra" value="<?php echo $compra->montoTotalCompra; ?>" class="form-control" placeholder="Ingrese la Direccion" data-validacion-tipo="requerido" />
    </div>
    
    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-compra").submit(function(){
            return $(this).validate();
        });
    })
</script>

