 <?php
 include 'header.php';
 ?>
 <div class="content-wrapper" style="margin-top:5px">
      
        
       
        <div class="row">
          <div class="col-md-12">
            <div class="col-md-1"></div>
            <div class="col-md-10" style="margin-top:30px">
 <div class="box box-info">
                <div class="box-header">
                  <i class="fa fa-envelope"></i>
                  <h3 class="box-title"> Email</h3>
                  <?php echo form_open('Admin/sendmail'); ?>
                  
                  <!-- 
                  <div class="pull-right box-tools">
                    <button class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                  </div> -->
                </div>
                <div class="box-body">
                 
                    <div class="form-group">
                      <input type="email" class="form-control" name="email" placeholder="Email to:" required>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                    </div>
                    <div>
                      <textarea class="textarea" placeholder="Message" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="message" required></textarea>
                    </div>
                
                </div>
                <div class="box-footer clearfix">
                  <button class="pull-right btn btn-default" id="sendEmail" type="submit">Send<i class="fa fa-arrow-circle-right"></i></button>
                </div>
              </div>
              <?php echo form_close(); ?>
              <div class="col-md-1"></div>
              </div>
              </div>
              </div>
              </div>
<?php
include 'footer.php';
?>
           