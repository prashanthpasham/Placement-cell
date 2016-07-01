<?php

include 'header.php'; 
?>
 <div class="content-wrapper" style="margin-top:5px">
<div class="row">
<div class="col-md-12">
  <div class="row">
    
	<div class="col-md-2"></div>
  
	<div class="col-md-8">
    <h3><center> Resume</center></h3>
    <div class="well">
<!--
   <div class="col-md-8"> 
   -->
<h3><?php echo $resume['name']; ?></h3>
<h4><?php echo $resume['email']; ?></h4>
 <h4><?php echo $resume['phoneno']; ?></h4>
<h4><?php //echo $resume['address']; ?></h4><br>

<!--
</div>
 <div class="col-md-2"> 
  -->
<div class="thumbnail" style="width:150px;height:150px;float:right;margin-top:-145px">
 <img src="<?php echo base_url('uploads/'.$resume['image']); ?>" width="150"height="150">

</div>
</div><!--well -->
</div>

</div>
<div class="col-md-12">
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
     
     
      <div class="well">
   
<label><h4>Objective:</h4></label><br>
    <?php  
 echo $objective['objective']; 
    
    ?>                    
                      
      </div><!--well-->
    </div>
  </div><!--row-->
</div><!--col-md-12-->
<div class="col-md-12">
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <div class="well">
        <table class="table table-bordered">
          <tr>
         <th>Qualification</th> 
         <th>College</th> 
         <th>Percentage</th> 
          </tr>
          <tr>
<td> <?php echo $resume['branch']; ?></td>
<td><?php echo $acd['Btechcollege']; ?></td>
<td><?php echo $acd['percent']; ?></td>
 </tr>
 <tr>
  <td>Inter or +2</td>
 <td> <?php echo $acd['intercollege']; ?></td>
<td>
  <?php echo $acd['inter']; ?></td>
  </tr>
 <tr>
  <td>SSC </td>
  <td>
 <?php echo $acd['school']; ?></td>
  <td><?php echo $acd['ssc']; ?>
</td>
</tr>

</table>
</div><!--well -->
</div>
</div><!--row-->
</div><!--col-md-12-->
<div class="col-md-12">
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">

      <div class="well">
      <h3> Projects:</h3>
      <br>
    

  <?php foreach($proj as $projects): ?>
  <label>Project Title:</label>
  <?php echo $projects['ptitle']; ?><br>
  <label>Technology:</label>
  <?php echo $projects['technology']; ?><br>
  <label>Description:</label>
  <?php echo $projects['description']; ?><br> 
  <hr>
<?php endforeach ?>
</div><!--well -->
</div>
</div><!--row-->
</div><!--col-md-12-->
<div class="col-md-12">
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">

      <div class="well">
      <h3> Skills:</h3>

  <?php foreach($skills as $set): ?>
  
  <?php echo $set['skill']; ?><br>
  
<?php endforeach ?>
</div><!--well -->
</div>
</div><!--row-->
</div><!--col-md-12-->
</div>
</div>
</div>
<?php 
include 'footer.php';
?>

