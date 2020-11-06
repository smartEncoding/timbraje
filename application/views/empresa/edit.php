<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Empresa Edit</h3>
            </div>
			<?php echo form_open('empresa/edit/'.$empresa['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="rut" class="control-label">Rut</label>
						<div class="form-group">
							<input type="text" name="rut" value="<?php echo ($this->input->post('rut') ? $this->input->post('rut') : $empresa['rut']); ?>" class="form-control" id="rut" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="dv" class="control-label">Dv</label>
						<div class="form-group">
							<input type="text" name="dv" value="<?php echo ($this->input->post('dv') ? $this->input->post('dv') : $empresa['dv']); ?>" class="form-control" id="dv" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="razon_social" class="control-label">Razon Social</label>
						<div class="form-group">
							<input type="text" name="razon_social" value="<?php echo ($this->input->post('razon_social') ? $this->input->post('razon_social') : $empresa['razon_social']); ?>" class="form-control" id="razon_social" />
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