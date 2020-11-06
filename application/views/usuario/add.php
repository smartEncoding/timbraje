<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Usuario Add</h3>
            </div>
            <?php echo form_open('usuario/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="email" class="control-label"><span class="text-danger">*</span>Email</label>
						<div class="form-group">
							<input type="text" name="email" value="<?php echo $this->input->post('email'); ?>" class="form-control" id="email" />
							<span class="text-danger"><?php echo form_error('email');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="username" class="control-label"><span class="text-danger">*</span>Username</label>
						<div class="form-group">
							<input type="text" name="username" value="<?php echo $this->input->post('username'); ?>" class="form-control" id="username" />
							<span class="text-danger"><?php echo form_error('username');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="clave" class="control-label"><span class="text-danger">*</span>Clave</label>
						<div class="form-group">
							<input type="text" name="clave" value="<?php echo $this->input->post('clave'); ?>" class="form-control" id="clave" />
							<span class="text-danger"><?php echo form_error('clave');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<input type="checkbox" name="activo" value="1" id='activo' />
							<label for="activo" class="control-label">Activo</label>
						</div>
					</div>
				</div>
          		<div class="row clearfix">
	                <table class="table table-striped">
	                    <tr>
							<th>Modulo</th>
							<th>Ingreso Modulo</th>
							<th>Modificar</th>
							<th>Crear</th>
							<th>Eliminar</th>
	                    </tr>
	                    <tr>
							<td>Comprobantes</td>
							<td><input type="checkbox" name="compr_listar" value="1" id='compr_listar' /></td>
							<td><input type="checkbox" name="compr_editar" value="1" id='compr_editar' /></td>
							<td><input type="checkbox" name="compr_add"    value="1" id='compr_add' /></td>
							<td><input type="checkbox" name="compr_borrar" value="1" id='compr_borrar' /></td>
	                    </tr>
	                    <tr>
							<td>Empresas</td>
							<td><input type="checkbox" name="empr_listar" value="1" id='empr_listar' /></td>
							<td><input type="checkbox" name="empr_editar" value="1" id='empr_editar' /></td>
							<td><input type="checkbox" name="empr_add"    value="1" id='empr_add' /></td>
							<td><input type="checkbox" name="empr_borrar" value="1" id='empr_borrar' /></td>
	                    </tr>
	                    <tr>
							<td>Libros</td>
							<td><input type="checkbox" name="libro_listar" value="1" id='libro_listar' /></td>
							<td><input type="checkbox" name="libro_editar" value="1" id='libro_editar' /></td>
							<td><input type="checkbox" name="libro_add"    value="1" id='libro_add' /></td>
							<td><input type="checkbox" name="libro_borrar" value="1" id='libro_borrar' /></td>
	                    </tr>
							<td>Usuarios</td>
							<td><input type="checkbox" name="user_listar" value="1" id='user_listar' /></td>
							<td><input type="checkbox" name="user_editar" value="1" id='user_editar' /></td>
							<td><input type="checkbox" name="user_add"    value="1" id='user_add' /></td>
							<td><input type="checkbox" name="user_borrar" value="1" id='user_borrar' /></td>
	                    </tr>
	                </table>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Save
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>