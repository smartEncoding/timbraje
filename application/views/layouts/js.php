<!-- jQuery 2.2.3 -->
        <script src="<?php echo site_url('resources/js/jquery-2.2.3.min.js');?>"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="<?php echo site_url('resources/js/bootstrap.min.js');?>"></script> 
        <!-- Bootstrap 4.1.3 
        <script src="<?php // echo site_url('resources/modules/bootstrap/js/bootstrap.min.js');?>"></script>-->
        <!-- FastClick -->
        <script src="<?php echo site_url('resources/js/fastclick.js');?>"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo site_url('resources/js/app.min.js');?>"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo site_url('resources/js/demo.js');?>"></script>
        <!-- DatePicker -->
        <script src="<?php echo site_url('resources/js/moment.js');?>"></script>
        <script src="<?php echo site_url('resources/js/bootstrap-datetimepicker.min.js');?>"></script>
        <script src="<?php echo site_url('resources/js/global.js');?>"></script>


<!-- cargamos los js si son enviados desde el controlador -->
<?php if(isset($js)): ?>
    <?php 
        $us = base_url();
        foreach($js as $script):?>
            <script src="<?php echo $us . $script;?>"></script>
        <?php endforeach ?>
<?php endif ?>
<!-- /cargados js personalizados desde controlador -->        