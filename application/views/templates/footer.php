<!-- Main Footer -->
<footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
        Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
    <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds.
        <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</footer>

<!-- Add the sidebar's background. This div must be placed
     immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
</div>
<script src ="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>

<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<script src="<?php echo base_url();?>public/AdminLTE/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="<?php echo base_url();?>public/AdminLTE/plugins/morris/morris.min.js"></script>
<script src="<?php echo base_url();?>public/AdminLTE/plugins/sparkline/jquery.sparkline.min.js"></script>
<script src="<?php echo base_url();?>public/AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url();?>public/AdminLTE/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="<?php echo base_url();?>public/AdminLTE/plugins/knob/jquery.knob.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="<?php echo base_url();?>public/AdminLTE/plugins/daterangepicker/daterangepicker.js"></script>
<script src="<?php echo base_url();?>public/AdminLTE/plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url();?>public/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script src="<?php echo base_url();?>public/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url();?>public/AdminLTE/plugins/fastclick/fastclick.js"></script>
<script src="<?php echo base_url();?>public/AdminLTE/js/app.min.js"></script>

<script src="<?php echo base_url(''. $jsFile .'');?>"></script>

<script src="<?php echo base_url('public/AdminLTE/plugins/datatables/jquery.dataTables.min.js');?>"></script>
<script src="<?php echo base_url('public/AdminLTE/plugins/datatables/dataTables.bootstrap.min.js');?>"></script>


</body>
</html>
