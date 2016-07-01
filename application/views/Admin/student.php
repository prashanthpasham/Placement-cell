<?php 
include 'header.php';
?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper" style="margin-top:5px">
        <br>
        
       
        <div class="row">
          <div class="col-md-12">
            
            <div class="col-md-6">
          <div class="panel panel-default">
            <div class="panel-heading">Student Info
            
            </div>
            <div class="panel-body">
          <div class="form-group">
           <?php echo form_open('Admin/rollno') ?>
           <input type="text" name="rollno"  class="form-control" placeholder="Rollnumber"  required/>
            
          </div>
          <br>
          <div class="form-group">
          <button type="submit" class="btn btn-warning" >Submit</button>
          <?php echo form_close(); ?>
          </div>
        <br>
          
         </div>
          </div>
          </div>
          
          
          <div class="col-md-6">
              <div class="box box-warning">
                <div class="box-header ">
                  <h3 class="box-title">Student Details</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body">
                   <div class="form-group">
                    <?php echo form_open('Admin/search') ?>
            <input type="text" name="branch"  class="form-control" placeholder="Branch" required />
          </div>
          <div class="form-group">
           
             <input type="text" name="ypass"  class="form-control" placeholder="Year of Passing" required/> 
          </div>
          
          <div class="form-group">
           
             <input type="submit" class="btn btn-success" value="Submit"/> 
          </div>
           <?php echo form_close(); ?>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          
          
          
          
          
          
          
        
       <div class="col-md-12">
        <div class="col-md-1"></div>
       <div class="row">
        <div class="col-md-10">
        <div class="box box-default collapsed-box box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title">Student Database</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="form-group">
                  <?php echo form_open('Admin/percentage'); ?>
            <input type="text" name="branch"  class="form-control" placeholder="Branch" />
          </div>
          <div class="form-group">
           
            <!-- <input type="text" name="ypass"  class="form-control" placeholder="Year of Passing"/> -->
          </div>
            <div class="form-group">
          <input type="text" name="percentage"  class="form-control" placeholder="Percentage%"/>     
             </div>
          <div class="form-group">
           
             <input type="submit" class="btn btn-success" value="Submit"/> 
             <?php echo form_close(); ?>
          </div>

                </div><!-- /.box-body -->
              </div><!-- /.box -->
        <!--
        <div class="panel panel-default">
          <div class="panel-heading">Student Database</div>
            <div class="panel-body">
              <div class="form-group">
            <input type="text" name="branch"  class="form-control" placeholder="Branch" />
          </div>
          <div class="form-group">
           
             <input type="text" name="ypass"  class="form-control" placeholder="Year of Pass"/> 
          </div>
            <div class="form-group">
          <input type="text" name="percentage"  class="form-control" placeholder="Percentage%"/>     
             </div>
          <div class="form-group">
           
             <input type="submit" class="btn btn-success" value="Submit"/> 
          </div>

            </div>
          </div>
          </div>-->
          </div>
         </div>
       </div>
       </div>
       <div class="col-md-1"></div>
       </div>

             

              

            
       
      </div><!-- /.content-wrapper -->


      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Placement Hub</b> 
        </div>
        <strong>Copyright &copy; 2015-2016  All rights reserved.
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
          <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
          <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
       
         
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url(); ?>AdminLTE/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="<?php echo base_url(); ?>AdminLTE/plugins/morris/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="<?php echo base_url(); ?>AdminLTE/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="<?php echo base_url(); ?>AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="<?php echo base_url(); ?>AdminLTE/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?php echo base_url(); ?>AdminLTE/plugins/knob/jquery.knob.js"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>AdminLTE/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="<?php echo base_url(); ?>AdminLTE/plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="<?php echo base_url(); ?>AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="<?php echo base_url(); ?>AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url(); ?>AdminLTE/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url(); ?>AdminLTE/dist/js/app.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?php echo base_url(); ?>AdminLTE/dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url(); ?>AdminLTE/dist/js/demo.js"></script>
  </body>
</html>