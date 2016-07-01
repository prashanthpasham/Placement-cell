<?php

include 'header.php'; 
?>
 <div class="content-wrapper" style="margin-top:5px">
 
 
             <div class="row">
                
            <div class="col-md-12">
            <div class="col-md-3"></div>
            <div class="col-md-6" style="margin-top:20px">
              <div class="box box-success">
                <div class="box-header with-border" style="margin-top:5px">
                  <h3 class="box-title" style="align: center"><i class="glyphicon glyphicon-education"></i>&nbsp;<span>Personal Details</span></h3>
                  
                  <div class="box-tools pull-right">
      	 <a href="<?php echo site_url('personaldetail/edit'); ?>" class="btn btn-success">Edit</a> <br>
      </div>
                 <!-- <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <div class="btn-group">
                      <button class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown"><i class="fa fa-wrench"></i></button>
                     
                    </div>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>-->
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="row">
                    
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                    <div class="thumbnail" style="width:160px;margin-left:20px">
       <center> <img src="<?php echo base_url('uploads/'.$personaldetails['image']); ?>" width="150"height="150">
             </center></div>
                     Name:
 <input type="text" class="form-control editField" name="name" value="<?php echo $personaldetails['name']; ?>" readonly> 
 Rollnumber: 
   <input type="text" class="form-control" name="rollno" value="<?php echo $personaldetails['rollno']; ?>" readonly> 
  Year of Pass:
      <input type="text" class="form-control editField" name="email" value="<?php echo $personaldetails['ypass']; ?>" readonly>   
 Branch:
     <input type="text" class="form-control editField" name="branch"  value="<?php echo $personaldetails['branch']; ?>" readonly> 
        Address:
        <input type="text" class="form-control editField" name="address" value="<?php echo $personaldetails['address']; ?>" readonly> 
        Email:
         <input type="text" class="form-control editField" name="email" value="<?php echo $personaldetails['email']; ?>" readonly> 
       Phoneno:
       <input type="text" class="form-control editField" name="phoneno" value="<?php echo $personaldetails['phoneno']; ?>" readonly> 
                     
                    </div><!-- /.col -->
                    
                    
                    
                    
                  </div><!-- /.row -->
                </div><!-- ./box-body -->
                </div><!--box-->
                
 </div><!--col-md-10-->
  <div class="col-md-3"></div>
</div>
 </div>
 
 
 <!--
<div class="background">
 <div class="row">
                
 
<div class="col-md-5"></div>
 <div class="col-md-4">
 	<div class="well">
   <div class = "panel panel-default"> 
 <div class = "panel-heading"> 
      <center style="font-size:18px"><i class="glyphicon glyphicon-education"></i>Personal Details</center>
      <div class="pull-right">
      	 <a href="<?php echo site_url('personaldetail/edit'); ?>" class="btn btn-info">Edit</a> <br>
      </div>
      </div>
<div class = "panel-body">            
                         
                        
    
  <div class="alert alert-success alert-dismissible" role="alert" style="display:none">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <?php echo $error; ?></div>
        
        <div class="thumbnail" style="width:160px;margin-left:70px">
       <center> <img src="<?php echo base_url('uploads/'.$personaldetails['image']); ?>" width="150"height="150">
             </center>  </div> 
                  
   <div class="list-group">
                              
   <a href="#" class="list-group-item">
     <i class="glyphicon glyphicon-user"></i>&nbsp;  Name
 <input type="text" class="form-control editField" name="name" value="<?php echo $personaldetails['name']; ?>" readonly> 
  </a>
 <a href="#" class="list-group-item">
    <i class="glyphicon glyphicon-education"></i>&nbsp;   Rollnumber 
   <input type="text" class="form-control" name="rollno" value="<?php echo $personaldetails['rollno']; ?>" readonly> 
         </a>
   <a href="#" class="list-group-item">
     <i class="glyphicon glyphicon-education"></i>&nbsp; Branch
     <input type="text" class="form-control editField" name="branch"  value="<?php echo $personaldetails['branch']; ?>" readonly> 
       </a>
     <a href="#" class="list-group-item">
         <i class="glyphicon glyphicon-education"></i>&nbsp; Year of Pass
      <input type="text" class="form-control editField" name="email" value="<?php echo $personaldetails['ypass']; ?>" readonly>                                                            
    </a>
   <a href="#" class="list-group-item">
    <i class="glyphicon glyphicon-book"></i>&nbsp; &nbsp;Address
        <input type="text" class="form-control editField" name="address" value="<?php echo $personaldetails['address']; ?>" readonly> 
           </a>
      <a href="#" class="list-group-item">
    <i class="glyphicon glyphicon-envelope"></i>&nbsp;  Email
         <input type="text" class="form-control editField" name="email" value="<?php echo $personaldetails['email']; ?>" readonly> 
         </a> 
       <a href="#" class="list-group-item">
        <i class="glyphicon glyphicon-earphone"></i> &nbsp;Phoneno
       <input type="text" class="form-control editField" name="phoneno" value="<?php echo $personaldetails['phoneno']; ?>" readonly> 
        </a>
                             
      </div>
  </div>
                         
  </div>
                     
  </div>                  
 </div>
</div>
</div>
   </div>
   -->
    
 </div>           
<?php 
include 'footer.php';
?>