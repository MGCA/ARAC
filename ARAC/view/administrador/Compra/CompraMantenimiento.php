<h1 class="page-header text-center">Compras</h1>
<form action="?c=CompraMantenimiento" method="post">
    
    <div class="well well-sm text-right">

        <div  style=" float: left; width:300px;">
            <label style=" float: left; height: 60px; margin-top: 7px; margin-right: 7px">Buscar:</label>
            <input class="form-control" id="buscar" type="text"  placeholder="Escriba algo para buscar" style="width:230px;" />
        </div>
        
        <a class="btn btn-primary" href="?c=CompraMantenimiento&a=Registrar">Registrar</a>
        <input type="submit" value="Editar" name="a" class="btn btn-primary"/>
        <input type="submit" value="Eliminar" name="a" onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" class="btn btn-primary"/>
    </div>
    
    <table id="tabla" class="table table-striped">
        <thead>
            <tr>
                <th style="width:50px;"></th>
                <th style="width:125px;">Numero de Compra</th>
                <th style="width:115px;">Encargado</th>
                <th style="width:135px;">Nombre del Negocio</th>
                <th style="width:155px;">Motivo de Compra</th>
                <th style="width:125px;">Lugar</th>
                <th style="width:105px;">Fecha</th>
                <th style="width:125px;">Total</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($this->modelCompra->Listar() as $c): ?>
                <?php $valor = $c->numCompra; ?>
                <tr>
                    <td><input type="radio" name="numCompra" value="<?php echo $c->numCompra; ?>" ></td>
                    <td><?php echo $c->numCompra ?></td>
                    <td><?php echo $c->encargadoCompra ?></td>
                    <td><?php echo $c->nombreNegocio ?></td>
                    <td><?php echo $c->motivoCompra ?></td>
                    <td><?php echo $c->lugarCompra ?></td>
                    <td><?php echo $c->fecha ?></td>
                    <td><?php echo $c->montoTotalCompra ?></td>                 
                </tr>
            <?php endforeach; ?>
        <script src="archivos/js/buscador.js"></script>
    </tbody>
    </table> 
</form>
</div>













<!--<div class="container">
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    Compras
                </h3>
            </div>
            <div class="panel-body">
                <div class="panel panel-default">
                    <div id="navbar" class="navbar-collapse">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search">
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                    <i class="glyphicon glyphicon-search"></i>
                                </button>
                            </div>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="#"><button class="btn btn-primary">Borrar</button></a>                                
                            </li>
                            <li>
                                <a href="#"><button class="btn btn-primary">Editar</button></a>

                            </li>
                            <li>
                                <a href="#"><button class="btn btn-primary">Nuevo</button></a>

                            </li>

                        </ul>
                    </div>
                    <input type="search" class="text-center radio-inline glyphicon-search">
                    <button class="btn-primary">Borrar</button>
                    <button class="btn-primary">Editar</button>
                    <button class="btn-primary">Nuevo</button>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Numero de Compra</th>
                                    <th>Encargado</th>
                                    <th>Nombre del Negocio</th>
                                    <th>Motivo de Compra</th>
                                    <th>Lugar</th>
                                    <th>Fecha</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php // foreach ($this->modelCompra->Listar() as $c): ?>
                                    <?php // $valor = $c->numCompra; ?>
                                    <tr>
                                        <td><?php // echo $c->numCompra ?></td>
                                        <td><?php // echo $c->encargadoCompra ?></td>
                                        <td><?php // echo $c->nombreNegocio ?></td>
                                        <td><?php // echo $c->motivoCompra ?></td>
                                        <td><?php // echo $c->lugarCompra ?></td>
                                        <td><?php // echo $c->fecha ?></td>
                                        <td><?php // echo $c->montoTotalCompra ?></td>

                                    </tr>
                                <?php // endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>-->