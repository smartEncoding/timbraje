<div class="modal fade" data-backdrop="static" tabindex="-1" role="dialog" id="modal_form_subcat" aria-hidden="false" >
    <div class="modal-dialog  modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="modal-title"></h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>          
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box box-info">
                            <?php echo form_open('#','class="email" id="formulario"'); ?>
                            <div class="box-body">
                                <div class="row clearfix">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <input type="checkbox" name="activo" value="1"  id="activo" />
                                      <label for="activo" class="control-label">Activo</label>
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <label for="nombre" class="control-label">Nombre</label>
                                    <div class="form-group">
                                      <input type="text" name="nombre" value="<?php echo $this->input->post('nombre'); ?>" class="form-control" id="nombre" />
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="hidden" name="id_current" value="" class="form-control" id="id_current"  />
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-success">
                                    <i class="fa fa-check"></i> Guardar
                                </button>
                            </div>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

