
    <h1 class="page-header">
        <?php echo 'Pago de Recibo'; ?>
    </h1>

    <ol class="breadcrumb">
        <li><a href="?c=Recibo">Recibo</a></li>
        <li class="active"><?php echo 'Tramite'; ?></li>
    </ol>

    <form id="frm-consultar" action="?c=Recibo&a=Actualizar" method="post" enctype="multipart/form-data">

        <div class="form-group">
            <table>
                <tr>
                    <td>
                        <label>Pago</label>
                        <input readonly id="txtfecha" name="fechaPago" class="form-control" value="<?php echo date("y/m/d"); ?>"/> 
                    </td>
                    <td>
                        <label class="radio-inline"><input type="radio" name="estado" value="0">pendiente</label>
                        <label class="radio-inline"><input type="radio" name="estado" value="1" required>cancelado</label>
                    </td>
                </tr>
            </table>
        </div>
        <div class="form-group">
            <table class="table">
                <tr>
                    <td>
                        <label>Numero de Recibo: </label>
                        <input readonly type="text" name="numRecibo" value="<?php echo $alm->numRecibo; ?>" class="form-control"/>
                    </td>
                    <td>
                        <label>Vence</label>
                        <input readonly id="txtfechaVencimiento" name="fechaVencimiento" class="form-control" value="<?php echo $alm->fechaVencimiento; ?>" required/>
                    </td>
                </tr>
            </table>
        </div>
        <div class="form-group">
            <label>Empleado: </label>
            <input type="text" name="cobra" placeholder="escriba su cedula" data-validacion-tipo="requerido" required/>
        </div>
        <div class="form-group">
            <table class="table">
                <tr>
                    <td>
                        <label>Medidor: </label>
                        <input readonly type="text" name="numPrevista" value="<?php echo $alm->numPrevista; ?>" class="form-control"/>
                    </td>
                    <td>
                        <label>Cobro</label>
                        <input readonly type="text" name="mes" value="<?php echo $alm->mes; ?>" class="form-control"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Monto</label>
                        <input type="text" name="monto" value="<?php echo $alm->monto; ?>" class="form-control"/>
                    </td>
                    <td>
                        <label>Opciones: </label>
                        <div class="text-center">
                            <button class="btn btn-success">Pagar</button>
                        </div>
                    </td>

                </tr>
            </table>
        </div>
    </form>

    <script>
        $(document).ready(function () {
            $("#frm-consultar").submit(function () {
                return $(this).validate();
            });
        })
    </script>

