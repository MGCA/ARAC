
<h1 class="page-header">
    <?php echo 'Nuevo Registro';?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=CompraMantenimiento">Compras</a></li>
  <li class="active"><?php echo 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-compra" action="?c=CompraMantenimiento&a=Guardar" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label>Encargado: </label>
        <input name="encargadoCompra" class="form-control" placeholder="Ingrese la cedula del Encargado" data-validacion-tipo="requerido"/>
    </div>
  
    <div class="form-group">
        <label>Nombre del Negocio: </label>
        <input type="text" name="nombreNegocio" class="form-control" placeholder="Ingrese el Nombre del Negocio" data-validacion-tipo="requerido" />
    </div>
   
    <div class="form-group">
        <label>Motivo de Compra: </label>
        <input type="text" name="motivoCompra"class="form-control" placeholder="Ingrese el Motivo de Compra" data-validacion-tipo="requerido" />
    </div>
    
    <div class="form-group">
        <label>Lugar de Compra: </label>
        <input type="text" name="lugarCompra"class="form-control" placeholder="Ingrese el Lugar de Compra" data-validacion-tipo="requerido" />
    </div>
    
    <div class="form-group">
        <label>Fecha: </label>
        <input type="date" name="fechaCompra" value="<?php echo date("yyyy/mm/dd"); ?>" class="form-control " placeholder="Ingrese la fecha" data-validacion-tipo="requerido" />
    </div>
    
    <div class="form-group">
        <label>Monto Total de Compra: </label>
        <input type="text" name="montoTotalCompra" class="form-control" placeholder="Ingrese el monto de la compra" data-validacion-tipo="requerido" />
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
</div>

