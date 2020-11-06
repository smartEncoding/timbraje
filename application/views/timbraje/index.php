<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Timbraje Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('timbraje/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Nulo</th>
						<th>Id Tipo Libro</th>
						<th>Id Cliente</th>
						<th>Desde</th>
						<th>Hasta</th>
						<th>Mes</th>
						<th>Anio</th>
						<th>Id Comprobante</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($timbraje as $t){ ?>
                    <tr>
						<td><?php echo $t['id']; ?></td>
						<td><?php echo $t['nulo']; ?></td>
						<td><?php echo $t['id_tipo_libro']; ?></td>
						<td><?php echo $t['id_cliente']; ?></td>
						<td><?php echo $t['desde']; ?></td>
						<td><?php echo $t['hasta']; ?></td>
						<td><?php echo $t['mes']; ?></td>
						<td><?php echo $t['anio']; ?></td>
						<td><?php echo $t['id_comprobante']; ?></td>
						<td>
                            <a href="<?php echo site_url('timbraje/edit/'.$t['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('timbraje/remove/'.$t['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
