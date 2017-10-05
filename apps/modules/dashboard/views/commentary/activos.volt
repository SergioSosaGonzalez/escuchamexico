
<div class="page-content-wrap">
    <div class="row">
        <div class="col-md-12">
            <!-- START DEFAULT DATATABLE -->
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Comentarios activos</h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive" style="text-align: center">
                        <table id="myTable" class="table table-hover table-actions generalDT" data-order="4" data-filter="asc">
                            <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Comentario realizado</th>
                                <th>Eliminar</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($consulta as $cnv): ?>
                            <tr id="<?=$cnv->getCid()?>">
                                <td><?=$cnv->getNombre()?></td>
                                <td><?=$cnv->getComentario()?></td>
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