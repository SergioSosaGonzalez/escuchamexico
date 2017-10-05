
<div class="page-content-wrap">
    <div class="row">
        <div class="col-md-12">
            <!-- START DEFAULT DATATABLE -->
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Comentarios</h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive" style="text-align: center">
                        <table id="myTable" class="table table-hover table-actions generalDT" data-order="4" data-filter="asc">
                            <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Comentario realizado</th>
                                <th>Cambiar estado</th>
                                <th>Eliminar</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($consulta as $cnv): ?>
                            <tr id="<?=$cnv->getCid()?>">
                                <td><?=$cnv->getNombre()?></td>
                                <td><?=$cnv->getComentario()?></td>
                                <td>
                                    <button type="button" id="bStatusChangeC" data-cid="<?=$cnv->getCid()?>" data-toggle="modal" data-target="#myModal" class="btn btn-default btn-rounded btn-sm"><span class="fa fa-pencil"></span></button>
                                </td>
                                <td>
                                    <button type="button" id="bComentaryDelete" data-cidelete="<?=$cnv->getCid()?>"  class="btn btn-danger btn-rounded btn-sm"><span class="fa fa-ban"></span></button>
                                </td>
                            </tr>
                            </tbody>
                            <?php endforeach;?>
                        </table>
                    </div>
                </div>
            </div>
            <!-- END DEFAULT DATATABLE -->
        </div>
    </div>
</div>
<div id="myModal" class="modal fade">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4>Cambio de estado de lo comentarios</h4>
            </div>

            <div class="container" style="text-align: center;">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-3">
                        <input type="text" name="cgid" style="display: none">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <label>STATUS</label>
                        <select name="status">
                            <option value="ESPERA">En espera</option>
                            <option value="ACTIVO">Confirmado</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" id="bUpdateStatusC" data-dismiss="modal" class="btn btn-primary">Cambiar estado</button>
            </div>
        </div>
    </div>
</div>
