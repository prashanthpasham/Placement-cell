<?php

include 'header.php'; 
?>
 <div class="content-wrapper" style="margin-top:5px">
<div class="row">
                <div class="col-lg-12">
                	<div class="col-lg-3"></div>
                	<div class="col-lg-6">
                    <div class="box box-success" style="margin-top:20px">
                        <div class="panel-heading">
                            
                         <center style="font-size:18px"><i class="glyphicon glyphicon-education"></i> Project Details </center> 
              <div class="pull-right">
	<a href="<?php echo site_url('project/add'); ?>" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i>AddProject</a> 
	<hr>
</div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
              <br>
           <?php
         foreach($projects as $lk): ?>
          
               
              
              <div class="well">  

               <a href="<?php echo site_url('project/remove/'.$lk['projectid']); ?>" class="btn btn-warning" style="float:right;padding-left:20px;margin-top:-10px">Delete</a> &nbsp; &nbsp;   
                <a href="<?php echo site_url('project/projectid/'.$lk['projectid']); ?>" class="btn btn-success" style="float:right;padding-left:20px;margin-top:-10px;margin-right:20px;">Edit</a>   
                 
            <a href="#" class="list-group-item" >
                        
                          <label> ProjectTitle </label>
                         
               <input type="text" class="form-control editField" name="title" value="<?php echo  $lk['ptitle']; ?>" readonly> <br>
                <label> Technology </label>
               <input type="text" class="form-control editField" name="title" value="<?php echo  $lk['technology']; ?>" readonly> <br>
                <label> Description </label>
               <textarea class="form-control editField" name="desc" cols="10" rows="10" readonly><?php echo  $lk['description']; ?></textarea> <br>
               <input type="hidden" class="form-control editField" name="itemid" value="<?php echo  $lk['projectid']; ?>" readonly> <br>
               </a>
              </div>
               <?php endforeach ?>
               
              
             
 
           
            
           
           </div>
               </div>
                        <!-- /.panel-body -->
                </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        </div>
        <?php
        include 'footer.php';
        ?>
        