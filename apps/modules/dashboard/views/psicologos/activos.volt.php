
<div class="page-content-wrap">
    <div class="row">
        <div class="col-md-12">
            <!-- START DEFAULT DATATABLE -->
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Psicologos autorizados</h3>
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
