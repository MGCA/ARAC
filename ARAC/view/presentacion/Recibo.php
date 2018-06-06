<div class="container">
    <h1 class="page-header text-center">Recibo</h1>
    <form id="frm-recibo" action="?c=Recibo&a=Consultar" method="post" enctype="multipart/form-data">
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
            <label>Nª de Prevista: </label>
            <input type="text" name="numPrevista"class="form-control" placeholder="Ingrese el Nª de Prevista" data-validacion-tipo="requerido" required/>
        </div>

        <div class="text-right">
            <input type="submit" value="Consultar" name="a" class="btn btn-primary"/>
        </div>
    </form>
    <script>
        $(document).ready(function () {
            $("#frm-recibo").submit(function () {
                return $(this).validate();
                alert($('input:radio[name=estado]:checked').val());
            });
        });
    </script>
</div>




</div>
