<div class="container">
    <h1 class="page-header text-center">Recibo</h1>
    <form id="frm-recibo" action="?c=Recibo&a=Guardar" method="post" enctype="multipart/form-data">

        <div class="form-group">
            <table class="table-responsive">
                <tr>
                    <td>
                        <div>
                            <label>Nª Recibo: </label> 
                            <input readonly name="numRecibo" class="form-control" placeholder="AutoGenerado" data-validacion-tipo="requerido"/> 
                        </div>
                    <td>
                    <td>
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
                    </td>
                </tr>
            </table>
        </div>

        <div class="form-group">
            <label>Cobra: </label>
            <input type="text" name="cobra" class="form-control" placeholder="Dijite su Cedula" data-validacion-tipo="requerido" />
        </div>

        <div class="form-group">
            <label>Fecha: </label>
            <input type="date" id="txtfecha" name="fecha" class="form-control" value="<?php echo $mes = date("yyyy/mm/dd"); ?>" required/> 
        </div>

        <div class="form-group">
            <label>Nª de Prevista: </label>
            <input type="text" name="numPrevista"class="form-control" placeholder="Ingrese el Nª de Prevista" data-validacion-tipo="requerido" />
        </div>

        <div id="estadoRadio" class="form-group">
            <label>Estado: </label>
            <input  type="radio" name="estado" class="radio-inline" data-validacion-tipo="requerido" />
        </div>   

        <div class="text-right">
            <button class="btn btn-success">Guardar</button>
        </div>
    </form>
    <script>
        $(document).ready(function () {
            $("#frm-recibo").submit(function () {
                return $(this).validate();
            });

        });
    </script>
</div>




</div>
