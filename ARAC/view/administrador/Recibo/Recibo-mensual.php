<h1 class="page-header">
    <?php echo 'Generar Recibo'; ?>
</h1>

<ol class="breadcrumb">
    <li><a href="?c=Recibo">Socios</a></li>
    <li class="active"><?php echo 'Generar Recibo'; ?></li>
</ol>

<form id="frm-generar" action="?c=Recibo&a=Guardar" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <div>
            <label>Mes: </label>
            <select name="mes" class=form-control>
                <option>Enero</option>
                <option>Febrero</option>
                <option>Marzo</option>
                <option>Abril</option>
                <option>Mayo</option>
                <option>Junio</option>
                <option>Julio</option>
                <option>Agosto</option>
                <option>Setiembre</option>
                <option>Octubre</option>
                <option>Noviembre</option>
                <option>Diciembre</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label>Fecha de Vencimiento: </label>
        <input type="date" id="txtfechaVencimiento" name="fechaVencimiento" class="form-control" value="<?php echo $mes = date("yyyy/mm/dd"); ?>" required/> 
    </div>

    <div name="estadoRadio" id="estadoRadio" class="form-group">
        <label>Estado: </label>
        <div class="radio form-control">
            <label><input type="radio" name="estado" value=0>Pendiente</label>
            <label><input type="radio" name="estado" value=1>Cancelado</label>
        </div>
    </div>   

    <div class="text-right">
        <button class="btn btn-success">Generar</button>
    </div>
</form>

<script>
    $(document).ready(function () {
        $("#frm-generar").submit(function () {
            return $(this).validate();
        });
    });
</script>
</div>