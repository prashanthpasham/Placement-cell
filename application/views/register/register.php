<?php
if(isset($this->session->userdata['rol']))
{
	header("location: http://localhost/Code/index.php/Userpage");

}
?>
<!doctype HTML>
<html>
<head>
<meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
    

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">

<script src="<?php echo base_url(); ?>jquery-1.9.1.min.js" type="text/javascript"></script>
<!-- jQuery easing plugin -->
<script src="<?php echo base_url(); ?>jquery.easing.min.js" type="text/javascript"></script>



<style>
/*custom font*/
@import url(http://fonts.googleapis.com/css?family=Montserrat);

/*basic reset*/
* {margin: 0; padding: 0;}
html{
overflow:hidden;
width:100%;
height:100%;
}

body {
        width:100%;
	font-family: montserrat, arial, verdana;
	
	height: 100%;
	/*background: url('http://thecodeplayer.com/uploads/media/gs.png');
	
	background: 
		linear-gradient(rgba(196, 102, 0, 0.2), rgba(155, 89, 182, 0.2)), 
		url('http://thecodeplayer.com/uploads/media/gs.png');*/
		
		background-image: url('<?php echo base_url(); ?>images/max.jpg') ;
	
       -moz-background-size: cover;
-webkit-background-size: cover;
background-size: cover;
background-position: top;
background-repeat: no-repeat !important;
/*background-attachment: fixed;*/
        
     opacity: 0.9;
    filter: alpha(opacity=20);
  


		

}

  #mhead{
  font-family: Georgia !important;
background-color: #f5f5f5;
border: 1px solid #e3e3e3;
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
border-radius: 4px;
-webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
-moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
text-align: center; 
font-family: georgia;
/*position: fixed;*/
top: 0px;
width: 100%;
padding: 20px;
} 
/*form styles*/
 #msform {

	width: 400px;
	
	
	margin: 10px auto;
	text-align: center;
	position: relative;
}
#msform fieldset input
{
	display: inline;
}
#msform fieldset {
	background: white;
	border: 0 none;
	border-radius: 3px;
	box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
	padding: 20px 30px;
	
	box-sizing: border-box;
	width: 100%;
	margin: 0 10%;
	
	/*stacking fieldsets above each other*/
	position: absolute;
}
/*Hide all except first fieldset*/
#msform fieldset:not(:first-of-type) {
	display: none;
}
/*inputs*/
#msform input, #msform textarea {
	padding: 10px;
	border: 1px solid #ccc;
	border-radius: 3px;
	margin-bottom: 10px;
	width: 70%;
	box-sizing: border-box;
	font-family: montserrat;
	color: #2C3E50;
	font-size: 13px;

}
/*buttons*/
#msform .action-button {
	width: 100px;
	background: #27AE60;
	font-weight: bold;
	color: white;
	border: 0 none;
	border-radius: 1px;
	cursor: pointer;
	padding: 10px 5px;
	margin: 10px 5px;
}
#msform .action-button:hover, #msform .action-button:focus {
	box-shadow: 0 0 0 2px white, 0 0 0 3px #27AE60;
}
/*headings*/
.fs-title {
	font-size: 15px;
	text-transform: uppercase;
	color: #2C3E50;
	margin-bottom: 10px;
}
.fs-subtitle {
	font-weight: normal;
	font-size: 13px;
	color: #666;
	margin-bottom: 20px;
}
/*progressbar*/
#progressbar {
	margin-bottom: 30px;
	overflow: hidden;
	margin-left: 10px;
	/*CSS counters to number the steps*/
	counter-reset: step;
	
	width:800px;
}
#progressbar li {
	list-style-type: none;
	color: rgb(0,0,0);
	text-transform: uppercase;
	font-size: 11px;
	width: 100px;
	float: left;
	position: relative;
}
#progressbar li:before {
	content: counter(step);
	counter-increment: step;
	width: 20px;
	line-height: 20px;
	display: block;
	font-size: 10px;
	color: #333;
	background: white;
	background-color: white;
	border-radius: 3px;
	margin: 0 auto 5px auto;
}
/*progressbar connectors*/
#progressbar li:after {
	content: '';
	width: 100%;
	height: 2px;
	background: white;
	position: absolute;
	left: -50%;
	top: 9px;
	z-index: -1; /*put it behind the numbers*/
}
#progressbar li:first-child:after {
	/*connector not needed before the first step*/
	content: none; 
}
/*marking active/completed steps green*/
/*The number of the step and the connector before it = green*/
#progressbar li.active:before,  #progressbar li.active:after{
	background: #27AE60;
	color: white;
}
.red{
color: red;
}
.success{
color:green;
}
#message{
padding-top: 200px;
position: relative;
text-align: center;
}
button {
	width: 100px;
	background:red;
	font-weight: bold;
	color: white;
	border: 0 none;
	border-radius: 1px;
	cursor: pointer;
	padding: 10px 5px;
	margin: 10px 5px;
}
select {
	width: 100px;
	background:yellow;
	font-weight: bold;
	color: black;
	border: 0 none;
	border-radius: 3px;
	cursor: pointer;
	padding: 10px 5px;
	margin: 10px 5px;
}
</style>
<script type="text/javascript" >
$(document).ready(function(){

 //jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$(".next").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	next_fs = $(this).parent().next();
	
	//activate next step on progressbar using the index of next_fs
	$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
	
	//show the next fieldset
	next_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale current_fs down to 80%
			scale = 1 - (1 - now) * 0.2;
			//2. bring next_fs from the right(50%)
			left = (now * 50)+"%";
			//3. increase opacity of next_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'transform': 'scale('+scale+')'});
			next_fs.css({'left': left, 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".previous").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	previous_fs = $(this).parent().prev();
	
	//de-activate current step on progressbar
	$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
	
	//show the previous fieldset
	previous_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale previous_fs from 80% to 100%
			scale = 0.8 + (1 - now) * 0.2;
			//2. take current_fs to the right(50%) - from 0%
			left = ((1-now) * 50)+"%";
			//3. increase opacity of previous_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'left': left});
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});
	});

</script>

<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
  };
</script>
</head>
<body>
<script type="text/javascript">
$( document ).ready(function() {
 $('.multi-field-wrapper').each(function() {
     var $wrapper = $('.multi-fields', this);
     $(".add-field", $(this)).click(function(e) {
        $('.multi-field:first-child', $wrapper).clone(true).appendTo($wrapper).find('input').val('').focus();
    });
     $('.multi-field .remove-field', $wrapper).click(function() {
        if ($('.multi-field', $wrapper).length > 1)
            $(this).parent('.multi-field').remove();
    });
 });
});
</script>
<!--
<div id="mhead">
<h2><span style="font-size:50px">Placement Hub</span></h2></div>-->
	 
<a href="<?php echo base_url(); ?>" class="btn btn-success" style="float:left">Back</a> </div>
<?php echo form_open_multipart('Welcome/register'); ?>
<!-- multistep form -->


<div id="msform" >
	<!-- progressbar -->
	<ul id="progressbar">
		<li class="active">Signup</li>
		<li>Personal Details</li>
		<li>Academic Details</li>
		<li>Projects</li>
		<!-- <li>Achievements</li> 
         <li>Skill Set</li>-->
	</ul>
	
	
	<!-- fieldsets -->
		<fieldset>
		<h2 class="fs-title">Signup</h2>
		<h3 class="fs-subtitle">Step 1</h3>
		<div class="fs-error"></div>
         <?php echo validation_errors(); ?>
         
         <img id="output" style="height:100px;width:100px" src="<?php echo base_url(); ?>images/dummy.jpg" />
         <input type="file" placeholder="image" name="userfile" size="20"   onchange="loadFile(event)"/>

		<input type="text" name="rollno" id="rollno" placeholder="Rollno" required />
                  
		<input type="password" name="pass"  id="pass" placeholder="Password" />
		<input type="password" name="cpass"  id="cpass" placeholder="Confirm Password" />
		<input type="button" name="next" class="next action-button" value="Next" />
	</fieldset>
	<fieldset>
		<h2 class="fs-title">Personal Details</h2>
		<h3 class="fs-subtitle">Step 2</h3>
		 <?php echo validation_errors(); ?>
		<input type="text" name="name" placeholder="name" required />
		<!-- <input type="text" name="Rollno" placeholder="RollNumber" required /> -->
		<input type="text" name="branch" id="branch" placeholder="Branch" required />
		<input type="text" name="ypass" id="ypass" placeholder="Year of Pass" required />
		<input type="text" name="phoneno" id="phoneno" placeholder="PhoneNo" required />
		<textarea name="address" id="address" placeholder="Address"></textarea>
                
                <input type="email" name="email" placeholder="Email" required/>
		<input type="button" name="previous" class="previous action-button" value="Previous" />
		<input type="button" name="next" class="next action-button" value="Next" />
	</fieldset>
	<fieldset class="field">

		<h2 class="fs-title">Academic Details</h2>
		<h3 class="fs-subtitle">Step 3</h3>
			<div class="fs-error"></div>
		<div class="multi-field-wrapper">
      <div class="multi-fields">
        <div class="multi-field">
        	 <?php echo validation_errors(); ?>
          
            <input type="text" name="school" id="school" placeholder="SSC school" required />
        <input type="text" name="spercent" id="sper" placeholder="Percentage" required />
        <input type="text" name="inter" id="inter" placeholder="Inter college" required />
        <input type="text" name="ipercent" id="ipercent" placeholder="Percentage" required />
        <input type="text" name="btech" id="btech" placeholder="Btech college" required />
         <input type="text" name="bpercent" id="bpercent" placeholder="Percentage" required />
         <!-- <button type="button" class="remove-field">Remove</button>-->
        </div>
      </div>
    <!--<input type="button" name="academic" class="add-field" value="Add field" />-->
    

  </div>


			
		<input type="button" name="previous" class="previous action-button" value="Previous" />
		<input type="button" name="next" class="next action-button" value="Next" />
		
			
	</fieldset>
	<fieldset>
		<h2 class="fs-title">Projects</h2>
		<h3 class="fs-subtitle">Step 4</h3>
        <div class="multi-field-wrapper">
      <div class="multi-fields">
        <div class="multi-field">
        	 <?php echo validation_errors(); ?>
		<input type="text" name="ptitle" id="ptitle" placeholder="Project Title" />
		<input type="text" name="tech" id="tech" placeholder="Project Technology">
		<textarea name="des" id="des" placeholder="Description" rows="10" cols="10"></textarea>
		<!--<button type="button" class="remove-field">Remove</button>-->
          </div>
          </div>
         <!-- <button type="button" class="add-field">Add field</button>-->
        </div>
		
		<input type="button" name="previous" class="previous action-button" value="Previous" />
		<!--<input type="button" name="next" class="next action-button" value="Next" />-->
		<input type="submit" name="submit" value="Submit" />
	</fieldset>
	<!--
	<fieldset>
		<h2 class="fs-title">Achievements</h2>
		<h3 class="fs-subtitle">Step 5</h3>
		<div class="multi-field-wrapper">
      <div class="multi-fields">
        <div class="multi-field">
        	 <?php echo validation_errors(); ?>
		<textarea name="achieve" id="achieve" placeholder="Achievements"rows="10" cols="10"></textarea>
		 <button type="button" class="remove-field">Remove</button>
        </div>
      </div>
    <button type="button" class="add-field">Add field</button>
  </div>
		<input type="button" name="previous" class="previous action-button" value="Previous" />
		<!--<input type="button" name="next" class="next action-button" value="Next" />-->
		<input type="submit" name="submit" value="Submit" />
	</fieldset>
	
	<fieldset>
		<h2 class="fs-title">Skill set</h2>
		<h3 class="fs-subtitle">Step 6</h3>
		
		<div class="multi-field-wrapper">
      <div class="multi-fields">
        <div class="multi-field">
        	 <?php echo validation_errors(); ?>
          <select id="skill" name="skill[]" id="skill">
       <option>C</option>
       <option>C++</option>
       <option>JAVA</option>
       <option>PHP</option>
       <option>HTML</option>
       <option>CSS</option>
       <option>JAVASCRIPT</option>
       <option>ANGULAR JS</option>
       <option>NODE JS</option>
       <option>MYSQL</option>
       <option>CODEIGNITER</option>
       <option>EXPRESS JS</option>
       <option>POSTGRESQL</option>
       <option>BOOTSTRAP</option>
       <option>MONGODB</option>
       <option>AJAX</option>

       </select>
          <button type="button" class="remove-field">Remove</button>
        </div>
      </div>
    <button type="button" class="add-field">Add field</button>
  </div>
       
        
    
		<input type="button" name="previous" class="previous action-button" value="Previous" />
		<input type="submit" name="submit" value="Submit" /> 
	</fieldset>
-->
</div>

<?php echo form_close(); ?>
</body>
</html>