<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Comprobantes Timbraje</h3>
                <div class="box-tools">
                    <a href="<?php echo site_url('comprobantes_timbraje/add'); ?>" class="btn btn-success btn-sm">Nuevo</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
                        <th>ID</th>
                        <th>Empresa</th>
                        <th>Usuario</th>
                        <th>Numero</th>
                        <th>Fecha</th>
                        <th>Acciones</th>
                    </tr>
                    <?php foreach($comprobantes_timbraje as $c){ ?>
                    <tr>
                        <td><?php echo $c['id']; ?></td>
                        <td><?php echo $c['empresa']; ?></td>
                        <td><?php echo $c['id_usuario']; ?></td>
                        <td><?php echo $c['numero']; ?></td>
                        <td><?php echo $c['fecha']; ?></td>
                        <td>
                            <?php echo $c['edit']; ?>
                            <?php echo $c['delete']; ?>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                <div class="pull-center">
                    <?php echo $this->pagination->create_links(); ?>                    
                </div>                
            </div>
        </div>
    </div>
</div>