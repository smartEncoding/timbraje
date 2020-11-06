<div id='modales'>
    <?php echo $modal_add; ?>
</div>

<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="mi-modal">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Confirmar ELIMINACION DE EMPRESA</h4>
      </div>
      <div class="modal-footer">
        <div class="col-md-6">
            <div class="form-group">
                <input type="hidden" name="id_empresa_delete" value="" class="form-control" id="id_empresa_delete"  />
            </div>
        </div>
        <button type="button" class="btn btn-default" id="modal-btn-si">Si</button>
        <button type="button" class="btn btn-primary" id="modal-btn-no">No</button>
      </div>
    </div>
  </div>
</div>

<div class="alert" role="alert" id="result">
    
</div>

<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Listado de Empresas</h3>
            	<div class="box-tools">
                    <?php echo $btn_add;?>
                 </div>
            </div>
            <div class="box-body">
                
                <table class="table table-striped display cell-border compact" style="width: 100%;" id="table">
                    <thead>
                        <tr class="small">
                            <th style="width:40px;"> # </th>
                            <th style="width:160px;">Rut</th>
                            <th style="width:160px;">Dv</th>
                            <th style="width:160px;">Razon Social</th>
                            <th style="width:30px;">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                    <tfoot>
                        <tr class="small">
                            
                        </tr>
                    </tfoot>
                </table>


                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>                    
                </div>                
            </div>
        </div>
    </div>
</div>
