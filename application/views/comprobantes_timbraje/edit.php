<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Modificacion Comprobante Timbraje </h3>
            </div>
			<?php echo form_open('comprobantes_timbraje/edit/'.$comprobantes_timbraje['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="id_empresa" class="control-label"><span class="text-danger">*</span>Empresa</label>
						<div class="form-group">
							<select name="id_empresa" class="form-control">
								<option value="">select empresa</option>
								<?php 
								foreach($all_empresas as $empresa)
								{
									$selected = ($empresa['rut'] == $comprobantes_timbraje['id_empresa']) ? ' selected="selected"' : "";

									echo '<option value="'.$empresa['rut'].'" '.$selected.'>'.$empresa['razon_social'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('id_empresa');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_usuario" class="control-label"><span class="text-danger">*</span>Usuario</label>
						<div class="form-group">
							<select name="id_usuario" class="form-control">
								<option value="">select usuario</option>
								<?php 
								foreach($all_usuarios as $usuario)
								{
									$selected = ($usuario['id'] == $comprobantes_timbraje['id_usuario']) ? ' selected="selected"' : "";

									echo '<option value="'.$usuario['id'].'" '.$selected.'>'.$usuario['username'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('id_usuario');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="numero" class="control-label"><span class="text-danger">*</span>Numero</label>
						<div class="form-group">
							<input type="text" name="numero" value="<?php echo ($this->input->post('numero') ? $this->input->post('numero') : $comprobantes_timbraje['numero']); ?>" class="form-control" id="numero" />
							<span class="text-danger"><?php echo form_error('numero');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="fecha" class="control-label"><span class="text-danger">*</span>Fecha</label>
						<div class="form-group">
							<input type="text" name="fecha" value="<?php echo ($this->input->post('fecha') ? $this->input->post('fecha') : $comprobantes_timbraje['fecha']); ?>" class="has-datepicker form-control" id="fecha" />
							<span class="text-danger"><?php echo form_error('fecha');?></span>
						</div>
					</div>
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