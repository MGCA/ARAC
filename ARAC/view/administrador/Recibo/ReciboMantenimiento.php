<h1 class="page-header text-center">Recibo</h1>
<form action="?c=Recibo" method="post">
    
    <div class="well well-sm text-right">

        <div  style=" float: left; width:300px;">
            <label style=" float: left; height: 60px; margin-top: 7px; margin-right: 7px">Buscar:</label>
            <input class="form-control" id="buscar" type="text"  placeholder="Escriba algo para buscar" style="width:230px;" />
        </div>
        <input type="submit" value="Eliminar" name="a" onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" class="btn btn-primary"/>
    </div>
    
    <table id="tabla" class="table table-striped">
        <thead>
            <tr>
                <th style="width:50px;"></th>
                <th style="width:125px;">N° Recibo</th>
                <th style="width:125px;">Atendido Por</th>
                <th style="width:125px;">Fecha</th>
                <th style="width:125px;">N° Prevista</th>
                <th style="width:125px;">Estado</th>
                <th style="width:125px;">Mes</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($this->modelRecibo->Listar() as $r): ?>
                <?php $valor = $r->numRecibo; ?>
                <tr>
                    <td><input type=radio name=numRecibo value=<?php echo $r->numRecibo; ?> ></td>
                    <td><?php echo $r->numRecibo; ?></td>
                    <td><?php echo $r->cobra; ?></td>
                    <td><?php echo $r->fecha; ?></td> 
                    <td><?php echo $r->numPrevista; ?></td>
                    <td><?php echo $r->estado; ?></td>
                    <td><?php echo $r->mes; ?></td> 
                </tr>
            <?php endforeach; ?>
        <script src="archivos/js/buscador.js"></script>
        </tbody>
    </table> 
</form>
</div>
