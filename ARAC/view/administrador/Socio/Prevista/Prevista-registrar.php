
<h1 class="page-header">
    <?php echo 'Nuevo Registro';?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=PrevistaMantenimiento">Prevista</a></li>
  <li class="active"><?php echo 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-prevista" action="?c=PrevistaMantenimiento&a=Guardar" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label>N° Prevista: </label>
        <input name="numPrevista" class="form-control" placeholder="Asigne un N° de Prevista" data-validacion-tipo="requerido"/>
    </div>
  
    <div class="form-group">
        <label>Ubicacion: </label>
        <input type="text" name="ubicacion" class="form-control" placeholder="Ingrese la ubicacion" data-validacion-tipo="requerido" />
    </div>
   
    <div class="form-group">
        <label>Tipo de Prevista: </label>
        <input type="text" name="tipoPrevista"class="form-control" placeholder="Ingrese Comercial/Domestica" data-validacion-tipo="requerido" />
    </div>
    
    <div class="form-group">
        <label>Dueño: </label>
        <input type="text" name="dueño"class="form-control" placeholder="Ingrese un Socio o Dueño" data-validacion-tipo="requerido" />
    </div>
    
    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-prevista").submit(function(){
            return $(this).validate();
        });
    })
</script>
</div>

