<?php
include 'header.php';
?>
 <div class="content-wrapper" style="margin-top:5px">
<div class="row">
<div class="col-md-12">
  <div class="row">
    
	<div class="col-md-1"></div>
  
	<div class="col-md-10">
	<div class="box box-success" style="margin-top:50px">
  
        <h2>Student Details</h2>
          
    
    <table class="table table-responsive" id="example1" >
    
    <tr style="background-color:#4CAF50"><th>Name</th>
    <th>Rollno</th>
    <th>Branch</th>
    <th>Yearofpass</th>
    <th>Email</th>
    <th>Phoneno</th>
    <th>Percentage</th>
    </tr>
    <?php foreach($percentage as $li): ?>
    <tr>
    <td><?php echo $li['name']; ?></td>
    <td><?php echo $li['rollno']; ?></td>
    <td><?php echo $li['branch']; ?></td>
    <td><?php echo $li['ypass']; ?></td>
    <td><?php echo $li['email']; ?></td>
    <td><?php echo $li['phoneno']; ?></td>
    <td><?php echo $li['percent']; ?></td>
    </tr>
  <?php endforeach ?>  
   
</table>

    </div>
	</div>
	<div class="col-md-1"></div>
	</div>
	</div>
	</div>
	</div>
<?php 
include 'footer.php';
?>