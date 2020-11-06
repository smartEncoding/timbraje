<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Timbraje Edit</h3>
            </div>
			<?php echo form_open('timbraje/edit/'.$timbraje['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<div class="form-group">
							<input type="checkbox" name="nulo" value="1" <?php echo ($timbraje['nulo']==1 ? 'checked="checked"' : ''); ?> id='nulo' />
							<label for="nulo" class="control-label">Nulo</label>
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_tipo_libro" class="control-label">Tipos Libro</label>
						<div class="form-group">
							<select name="id_tipo_libro" class="form-control">
								<option value="">select tipos_libro</option>
								<?php 
								foreach($all_tipos_libros as $tipos_libro)
								{
									$selected = ($tipos_libro['id'] == $timbraje['id_tipo_libro']) ? ' selected="selected"' : "";

									echo '<option value="'.$tipos_libro['id'].'" '.$selected.'>'.$tipos_libro['nombre'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_cliente" class="control-label">Empresa</label>
						<div class="form-group">
							<select name="id_cliente" class="form-control">
								<option value="">select empresa</option>
								<?php 
								foreach($all_empresas as $empresa)
								{
									$selected = ($empresa['id'] == $timbraje['id_cliente']) ? ' selected="selected"' : "";

									echo '<option value="'.$empresa['id'].'" '.$selected.'>'.$empresa['razon_social'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="desde" class="control-label">Desde</label>
						<div class="form-group">
							<input type="text" name="desde" value="<?php echo ($this->input->post('desde') ? $this->input->post('desde') : $timbraje['desde']); ?>" class="form-control" id="desde" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="hasta" class="control-label">Hasta</label>
						<div class="form-group">
							<input type="text" name="hasta" value="<?php echo ($this->input->post('hasta') ? $this->input->post('hasta') : $timbraje['hasta']); ?>" class="form-control" id="hasta" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="mes" class="control-label">Mes</label>
						<div class="form-group">
							<input type="text" name="mes" value="<?php echo ($this->input->post('mes') ? $this->input->post('mes') : $timbraje['mes']); ?>" class="form-control" id="mes" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="anio" class="control-label">Anio</label>
						<div class="form-group">
							<input type="text" name="anio" value="<?php echo ($this->input->post('anio') ? $this->input->post('anio') : $timbraje['anio']); ?>" class="form-control" id="anio" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_comprobante" class="control-label">Id Comprobante</label>
						<div class="form-group">
							<input type="text" name="id_comprobante" value="<?php echo ($this->input->post('id_comprobante') ? $this->input->post('id_comprobante') : $timbraje['id_comprobante']); ?>" class="form-control" id="id_comprobante" />
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