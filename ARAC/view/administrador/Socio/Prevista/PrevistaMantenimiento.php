

<h1 class="page-header text-center">Prevista</h1>
<form action="?c=PrevistaMantenimiento" method="post">
    
    <div class="well well-sm text-right">

        <div  style=" float: left; width:300px;">
            <label style=" float: left; height: 60px; margin-top: 7px; margin-right: 7px">Buscar:</label>
            <input class="form-control" id="buscar" type="text"  placeholder="Escriba algo para buscar" style="width:230px;" />
        </div>
        <a class="btn btn-primary" href="?c=PrevistaMantenimiento&a=Registrar">Registrar</a>
        <input type="submit" value="Editar" name="a" class="btn btn-primary"/>
        <input type="submit" value="Eliminar" name="a" onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" class="btn btn-primary"/>
    </div>
    
    <table id="tabla" class="table table-striped">
        <thead>
            <tr>
                <th style="width:50px;"></th>
                <th style="width:125px;">N° Prevista</th>
                <th style="width:125px;">Ubicacion</th>
                <th style="width:125px;">Tipo de Prevista</th>
                <th style="width:125px;">Dueño</th>               
            </tr>
        </thead>
        <tbody>
            <?php foreach ($this->modelPrevista->Listar() as $r): ?>
                <?php $valor = $r->numPrevista; ?>
                <tr>
                    <td><input type=radio name=numPrevista value=<?php echo $r->numPrevista; ?> ></td>
                    <td><?php echo $r->numPrevista; ?></td>
                    <td><?php echo $r->ubicacion; ?></td>
                    <td><?php echo $r->tipoPrevista; ?></td>
                    <td><?php echo $r->dueño; ?></td>             
                </tr>
            <?php endforeach; ?>
        <script src="archivos/js/buscador.js"></script>
        </tbody>
    </table> 
</form>
</div>

