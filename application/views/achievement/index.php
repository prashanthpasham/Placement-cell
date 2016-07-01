<?php

include 'usertemp.php'; 
?>
<div class="pull-right">
	<a href="<?php echo site_url('achievement/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped">
    <tr>
		<td>Achievement</td>
		
		
    </tr>
	<?php foreach($achievements as $a): ?>
    <tr>
		<td><?php echo $a['achievement']; ?></td>
		
		
		
    </tr>
	<?php endforeach; ?>
</table>