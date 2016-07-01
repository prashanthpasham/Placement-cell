<?php
include 'header.php';
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<div class="content-wrapper" style="margin-top:5px">
 
<div class="row">
<div class="col-md-12" margin-left:0px;>


<?php 
 echo $calendar;   
?>
</div>
</div>

<div class="row">
<div class="col-md-12" margin-left:0px;>

<div class="col-md-2"></div>

<div class="col-md-4" style="margin-top:20px">
<div class="well">
<?php echo form_open('My_calendar/add_events'); ?>
<fieldset>
<legend>Add a Event</legend>
<input type="date" name="date" class="form-control" placeholder="Pick a date" required><br>
<textarea name="event" class="form-control" placeholder="Event name" required></textarea><br>
<input type="submit" value="submit" class="btn btn-success"/>
<?php echo form_close(); ?>
</fieldset>
</div>
</div><!--col-md-6-->
<div class="col-md-4" style="margin-top:20px">
<div class="well">
<fieldset>
<?php echo form_open('My_calendar/delete_events'); ?>
<legend>Delete Event</legend>
<input type="date" name="dateevent" class="form-control" placeholder="Pick a date" required><br>

<input type="submit" value="submit" class="btn btn-success"/><br><br><br>
<?php echo form_close(); ?>
</fieldset>
</div>
</div><!--col-md-4-->
</div><!--col-md-12-->
</div><!--row-->