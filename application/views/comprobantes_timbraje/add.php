<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Comprobantes de Impresion</h3>
            </div>
            <?php echo form_open('comprobantes_timbraje/add'); ?>
			<div id="validation-error"></div>
          	<div class="box-body">
          		<div class="row clearfix" id='form-control-encabezado'>
					<div class="col-md-3">
						<label for="id_empresa" class="control-label"><span class="text-danger">*</span>Empresa</label>
						<div class="form-group">
							<select name="id_empresa" class="form-control" id='id_empresa'>
								<option value="">select empresa</option>
								<?php 
								foreach($all_empresas as $empresa)
								{
									$selected = ($empresa['id'] == $this->input->post('id_empresa')) ? ' selected="selected"' : "";

									echo '<option value="'.$empresa['id'].'" '.$selected.'>'.$empresa['razon_social'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('id_empresa');?></span>
						</div>
					</div>
					<div class="col-md-3">
						<label for="id_usuario" class="control-label"><span class="text-danger">*</span>Usuario</label>
						<div class="form-group">
							<select name="id_usuario" class="form-control" id='id_usuario'>
								<option value="">select usuario</option>
								<?php 
								foreach($all_usuarios as $usuario)
								{
									$selected = ($usuario['id'] == $this->input->post('id_usuario')) ? ' selected="selected"' : "";

									echo '<option value="'.$usuario['id'].'" '.$selected.'>'.$usuario['username'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('id_usuario');?></span>
						</div>
					</div>
					<div class="col-md-3">
						<label for="numero" class="control-label"><span class="text-danger">*</span>Numero</label>
						<div class="form-group">
							<input type="text" name="numero" value="<?php echo $this->input->post('numero'); ?>" class="form-control" id="numero" />
							<span class="text-danger"><?php echo form_error('numero');?></span>
						</div>
					</div>
					<div class="col-md-3">
						<label for="fecha" class="control-label"><span class="text-danger">*</span>Fecha</label>
						<div class="form-group">
							<input type="text" name="fecha" value="<?php echo $this->input->post('fecha'); ?>" class="has-datepicker form-control" id="fecha" />
							<span class="text-danger"><?php echo form_error('fecha');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<input type="checkbox" name="nulo" value="1"  id="nulo" />
							<label for="nulo" class="control-label">Nulo</label>
						</div>

					</div>
				</div>
				<div class='deta-compr'>
			    	<div class="box box-info">
			            <div class="box-header with-border centered">
			              	<h3  class="box-title">Detalle del Comprobante</h3>
			            </div>
				          	<div class="box-body">

			        	        <div class="row details-container" style="justify-content: center;">
            		    	        <div class="input-details">
                            		    <div class="alert alert-light">
                                    	    <!-- Form Producto -->
                                                <div class="col-sm-12">
                                                    <div class="row col-12" id="form-control-detalle">
                                                            <div class="row">
																<div class="form-group col-xl-1 col-lg-1">
																	<label for="nulos" class="control-label">Nula</label>
																	<input type="checkbox"  name="nulos" value="1"  id="nulos" />
																</div>
                                                                <div class="form-group col-xl-1 col-lg-1">
                                                                    <label>Mes Desde</label>
                                                                    <input type="number" name="mes_d" min=1 max=12 value="<?php echo $this->input->post('mes'); ?>" class="form-control mes" id="mes_d" />
                                                                </div>
                                                                <div class="form-group col-xl-1 col-lg-1">
                                                                    <label>Año Desde</label>
                                                                    <input type="number" min=2018 max=2025 name="anio_d" value="<?php echo $this->input->post('anio'); ?>" class="form-control anio" id="anio_d" />
                                                                </div>
                                                                <div class="form-group col-xl-1 col-lg-1">
                                                                    <label>Mes hasta</label>
                                                                    <input type="number" name="mes_h" min=1 max=12 value="<?php echo $this->input->post('mes'); ?>" class="form-control mes_h" id="mes_h" />
                                                                </div>
                                                                <div class="form-group col-xl-1 col-lg-1">
                                                                    <label>Año Hasta</label>
                                                                    <input type="number" min=2018 max=2025 name="anio_h" value="<?php echo $this->input->post('anio'); ?>" class="form-control anio_h" id="anio_h" />
                                                                </div>
                                                                <div class="form-group col-xl-2 col-lg-1">
                                                                    <label>Desde Hoja</label>
                                                                    <input type="number" class="form-control desde" id="desde" value="<?php echo $this->input->post('desde'); ?>">
                                                                </div>
                                                                <div class="form-group col-xl-2 col-lg-1">
                                                                    <label>Hasta Hoja</label>
                                                                    <input type="number" class="form-control hasta" id="hasta" value="<?php echo $this->input->post('hasta'); ?>">
                                                                </div>
                                                                <div class="form-group col-xl-1 col-lg-2">
																	<label for="id_tipo_libro" class="control-label">Tipos Libro</label>
																	<div class="form-group">
																		<select name="id_tipo_libro" class="form-control id_tipo_libro" id="id_tipo_libro" >

																			<?php 
																			foreach($all_tipos_libros as $tipos_libro)
																			{
																				$selected = ($tipos_libro['id'] == $this->input->post('id_tipo_libro')) ? ' selected="selected"' : "";

																				echo '<option value="'.$tipos_libro['id'].'" '.$selected.'>'.$tipos_libro['nombre'].'</option>';
																			} 
																			?>
																		</select>
																	</div>
                                                                </div>
                                                                <div class="form-group col-xl-2 col-lg-2">
																	<label for="agregar_detalle" class="control-label"> </label>
	                                                                <button type="button" class="col-4 btn btn-success" id="agregar_detalle"><i class="fa fa-plus"></i>Agregar a línea de detalle</button>
                                                                </div>
                                                            </div>

                                                    </div>
	                                            </div>

                                		</div>
                        			</div>
                				</div>

							</div>
			          	<div class="box-footer">
                <div class="contenedor-linea-detalle">
                        <table class="table table-stripe-sm" id="table-detalle">
                                <thead>
                                        <tr>
                                                <th class="text-center">#</th>
                                                <th>Mes Desde</th>
                                                <th>Año Desde</th>
                                                <th>Mes hasta</th>
                                                <th>Año Hasta</th>
                                                <th>Desde</th>
                                                <th>Hasta</th>
                                                <th>Id Libro</th>
                                                <th>Libro</th>
                                                <th>Anuladas</th>
                                                <th>Acciones</th>
                                        </tr>
                                </thead>
                                <tbody>
                                </tbody>
                        </table>
                </div>
			          	</div>
			    	</div>
			    </div>

			</div>
          	<div class="box-footer">
            	<button id="guardar" name="guardar" type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Guardar
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>