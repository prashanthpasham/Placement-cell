<?php

include 'header.php'; 
?>

<div class="content-wrapper" style="margin-top:5px">


 <div class="row">
                <div class="col-md-12">
                	<div class="col-md-2"></div>
                	<div class="col-md-8" style="margin-top:50px">
                		<br>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            
                         <center style="font-size:18px"><i class="glyphicon glyphicon-education"></i> Academic Details </center> 
                       <div class="pull-right">
	<a href="<?php echo site_url('academicdetail/edit/'.$academicdetails['rollno']); ?>" class="btn btn-success">Edit</a> 
</div>
                        
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                      
                     <div class="col-lg-8">
                   <a href="#" class="list-group-item">
                     <input type="hidden" class="form-control editField" name="rollno" value="<?php echo $academicdetails['rollno']; ?>" readonly>
                                 <i class="glyphicon glyphicon-education"></i>&nbsp;SCHOOL
                <input type="text" class="form-control editField" name="school" value="<?php echo $academicdetails['school']; ?>" readonly><br>
              <i class="glyphicon glyphicon-education"></i>&nbsp;INTERMEDIATE
                <input type="text" class="form-control editField" name="intercollege" value="<?php echo $academicdetails['intercollege']; ?>" readonly> <br>  
            <i class="glyphicon glyphicon-education"></i>&nbsp;BTECH 
                <input type="text" class="form-control editField" name="btech" value="<?php echo $academicdetails['Btechcollege']; ?>" readonly> 
            </a>
                            </div>   
                             <div class="col-lg-4">
                                      <a href="#" class="list-group-item">
                                 <i class="glyphicon glyphicon-education"></i>&nbsp;SSC PERCENTAGE
                <input type="text" class="form-control editField" name="sscpercent" value="<?php echo $academicdetails['ssc']; ?>" readonly><br>
                 <!-- <a href="#" class="list-group-item"> -->
                                 <i class="glyphicon glyphicon-education"></i>&nbsp;INTER PERCENTAGE
                <input type="text" class="form-control editField" name="interpercent" value="<?php echo $academicdetails['inter']; ?>" readonly>  <br>
                <i class="glyphicon glyphicon-education"></i>&nbsp;BTECH PERCENTAGE
                <input type="text" class="form-control editField" name="btechpercent" value="<?php echo $academicdetails['percent']; ?>" readonly>  
                         
                                </a>
                            </div>
                            
                                     
                               
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
            </div>
            <?php include 'footer.php'; ?>