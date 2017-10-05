
<div class="page-content-wrap">
    <div class="row">
        <div class="col-md-12">
            <!-- START DEFAULT DATATABLE -->
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Psicologos en espera de ser autorizados</h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive" style="text-align: center">
                        <table id="myTable" class="table table-hover table-actions generalDT" data-order="4" data-filter="asc">
                            <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Apellido Paterno</th>
                                <th>Apellido Materno</th>
                                <th>Especialidad</th>
                                <th>Numero de celular</th>
                                <th>Imagen de cedula</th>
                                <th>Cambiar estatus</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($consulta as $cnv): ?>
                            <tr id="<?=$cnv->getIdPsicologo()?>">
                                <td><?=$cnv->getNombre()?></td>
                                <td><?=$cnv->getApellidoP()?></td>
                                <td><?=$cnv->getApellidoM()?></td>
                                <td><?=$cnv->getEspecialidad()?></td>
                                <td><?=$cnv->getNumCelular()?></td>
                                <td><img src="/dropzone_images/<?=$cnv->getImageCedula()?>" style="width: 200px;height: 100px;border-radius:100% "></td>
                                <td>
                                    <button type="button" id="bStatusChange" data-cedula="<?=$cnv->getIdPsicologo()?>" data-toggle="modal" data-target="#myModal" class="btn btn-default btn-rounded btn-sm"><span class="fa fa-pencil"></span></button>
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
                <h4>Cambio de estado del psicologo</h4>
            </div>

                <div class="container" style="text-align: center;">
                   <div class="row">
                       <div class="col-md-3"></div>
                      <div class="col-md-3">
                          <input type="text" name="cedula" style="display: none">
                      </div>
                   </div>

                    <div class="row">
                        <div class="col-md-3">
                            <label>STATUS</label>
                            <select name="status">
                                <option value="ESPERA">En espera</option>
                                <option value="ACTIVO">Contratado</option>
                                <option value="RECHAZADO">Rechazado</option>
                            </select>
                        </div>
                    </div>
                </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" id="bUpdateStatus" class="btn btn-primary" data-dismiss="modal">Cambiar estado</button>
            </div>
        </div>
    </div>
</div>