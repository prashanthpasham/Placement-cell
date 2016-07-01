<?php

include 'header.php'; 
?>
 <div class="content-wrapper" style="margin-top:5px">

<div class="row">
                <div class="col-md-12">
                	<div class="col-md-3"></div>
                	<div class="col-md-7">
                		<br>
                		<div class="box box-success" style="margin-top:40px">
<div class="pull-right" style="margin:10px">
	<a href="<?php echo site_url('Skillset/add'); ?>" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i>&nbsp;Add a skill</a> 
</div>
<center><h4>SKILLS</h4></center>
<table class="table table-bordered">
    
	<?php foreach($skillset as $s): ?>
	
    <tr>
   
		<td><button class="btn btn-primary"><?php echo $s['skill']; ?></button>
		
            <?php
             $skill =  $s['level']; 
          
             $id = $s['skillid'];
             
             ?>

          
          <?php  if( $skill == 'Beginner')
            {?>
               <span style="margin-left:60px">
              
              
               <input type="radio"  name="Beginner<?php echo $id?>"  checked>Beginner  &nbsp; &nbsp;  &nbsp;
             <input type="radio" name="Intermediate<?php echo $id?>"  >Intermediate  &nbsp; &nbsp;  &nbsp;
        <input type="radio" name="Advanced<?php echo $id?>"   >Advanced
    
    </span>
          <?php  }
   
             if( $skill == 'Intermediate')
            {
             ?>  
             <span style="margin-left:60px"> 
                <input type="radio" name="Beginner<?php echo $id?>">Beginner  &nbsp; &nbsp;  &nbsp;
             <input type="radio" name="Intermediate<?php echo $id?>"  checked>Intermediate  &nbsp; &nbsp;  &nbsp;
        <input type="radio" name="Advanced<?php echo $id?>"  >Advanced
         </span>
           <?php }
  
             if($skill == 'Advanced')
            {
                ?>
                <span style="margin-left:60px"> 
              <input type="radio" name="Beginner<?php echo $id?>"  >Beginner  &nbsp; &nbsp;  &nbsp;
             <input type="radio" name="Intermediate<?php echo $id?>"  >Intermediate  &nbsp; &nbsp;  &nbsp;
        <input type="radio" name="Advanced<?php echo $id?>"  checked>Advanced
         </span>
           <?php }
           ?>
           
     
        
 <a href="<?php echo site_url('Skillset/delete/'.$s['skillid']); ?>" class="glyphicon glyphicon-trash" style="float:right"></a>
</td>
		
    </tr>
	<?php endforeach; ?>
</table>
</div>
</div>
</div>
</div>
</div>
<?php include 'footer.php'; ?>