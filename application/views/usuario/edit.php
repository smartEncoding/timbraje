<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Usuario Edit</h3>
            </div>
			<?php echo form_open('usuario/edit/'.$usuario['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="email" class="control-label"><span class="text-danger">*</span>Email</label>
						<div class="form-group">
							<input type="text" name="email" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $usuario['email']); ?>" class="form-control" id="email" />
							<span class="text-danger"><?php echo form_error('email');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="username" class="control-label"><span class="text-danger">*</span>Username</label>
						<div class="form-group">
							<input type="text" name="username" value="<?php echo ($this->input->post('username') ? $this->input->post('username') : $usuario['username']); ?>" class="form-control" id="username" />
							<span class="text-danger"><?php echo form_error('username');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="clave" class="control-label"><span class="text-danger">*</span>Clave</label>
						<div class="form-group">
							<input type="text" name="clave" value="<?php echo ($this->input->post('clave') ? $this->input->post('clave') : $usuario['clave']); ?>" class="form-control" id="clave" />
							<span class="text-danger"><?php echo form_error('clave');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<input type="checkbox" name="activo" value="1" <?php echo ($usuario['activo']==1 ? 'checked="checked"' : ''); ?> id='activo' />
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
							<td><input type="checkbox" name="compr_listar" value="1" id='compr_listar' <?php echo ($permiso['compr_listar']==1 ? 'checked="checked"' : ''); ?> /></td>
							<td><input type="checkbox" name="compr_editar" value="1" id='compr_editar' <?php echo ($permiso['compr_editar']==1 ? 'checked="checked"' : ''); ?> /></td>
							<td><input type="checkbox" name="compr_add"    value="1" id='compr_add'    <?php echo ($permiso['compr_add']==1    ? 'checked="checked"' : ''); ?> /></td>
							<td><input type="checkbox" name="compr_borrar" value="1" id='compr_borrar' <?php echo ($permiso['compr_borrar']==1 ? 'checked="checked"' : ''); ?> /></td>
	                    </tr>
	                    <tr>
							<td>Empresas</td>
							<td><input type="checkbox" name="empr_listar" value="1" id='empr_listar' <?php echo ($permiso['empr_listar']==1 ? 'checked="checked"' : ''); ?> /></td>
							<td><input type="checkbox" name="empr_editar" value="1" id='empr_editar' <?php echo ($permiso['empr_editar']==1 ? 'checked="checked"' : ''); ?> /></td>
							<td><input type="checkbox" name="empr_add"    value="1" id='empr_add'    <?php echo ($permiso['empr_add']==1    ? 'checked="checked"' : ''); ?> /></td>
							<td><input type="checkbox" name="empr_borrar" value="1" id='empr_borrar' <?php echo ($permiso['empr_borrar']==1 ? 'checked="checked"' : ''); ?> /></td>
	                    </tr>
	                    <tr>
							<td>Libros</td>
							<td><input type="checkbox" name="libro_listar" value="1" id='libro_listar' <?php echo ($permiso['libro_listar']==1 ? 'checked="checked"' : ''); ?> /></td>
							<td><input type="checkbox" name="libro_editar" value="1" id='libro_editar' <?php echo ($permiso['libro_editar']==1 ? 'checked="checked"' : ''); ?> /></td>
							<td><input type="checkbox" name="libro_add"    value="1" id='libro_add'    <?php echo ($permiso['libro_add']==1    ? 'checked="checked"' : ''); ?> /></td>
							<td><input type="checkbox" name="libro_borrar" value="1" id='libro_borrar' <?php echo ($permiso['libro_borrar']==1 ? 'checked="checked"' : ''); ?> /></td>
	                    </tr>
							<td>Usuarios</td>
							<td><input type="checkbox" name="user_listar" value="1" id='user_listar' <?php echo ($permiso['user_listar']==1 ? 'checked="checked"' : ''); ?> /></td>
							<td><input type="checkbox" name="user_editar" value="1" id='user_editar' <?php echo ($permiso['user_editar']==1 ? 'checked="checked"' : ''); ?> /></td>
							<td><input type="checkbox" name="user_add"    value="1" id='user_add'    <?php echo ($permiso['user_add']==1    ? 'checked="checked"' : ''); ?> /></td>
							<td><input type="checkbox" name="user_borrar" value="1" id='user_borrar' <?php echo ($permiso['user_borrar']==1 ? 'checked="checked"' : ''); ?> /></td>
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