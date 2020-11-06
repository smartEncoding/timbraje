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
                            <?php echo form_open('empresa/add','class="email" id="formulario"'); ?>
                            <div class="box-body">
                                <div class="row clearfix">
                                    <div class="col-md-6">
                                        <label for="rut" class="control-label">Rut</label>
                                        <div class="form-group">
                                            <input type="text" name="rut" value="<?php echo $this->input->post('rut'); ?>" class="form-control" id="rut" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="dv" class="control-label">Dv</label>
                                        <div class="form-group">
                                            <input type="text" name="dv" value="<?php echo $this->input->post('dv'); ?>" class="form-control" id="dv" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="razon_social" class="control-label">Razon Social</label>
                                        <div class="form-group">
                                            <input type="text" name="razon_social" value="<?php echo $this->input->post('razon_social'); ?>" class="form-control" id="razon_social" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="hidden" name="id_empresa" value="" class="form-control" id="id_empresa"  />
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
            </div>
        </div>
    </div>
</div>
