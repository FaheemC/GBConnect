<?php
include('include/header.inc.php');
?>	
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="author" content="Faheem Choudhury">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style>
		
	/*	html {
				margin-left: 15%;
				margin-right:25%;
				width: 50%;
			} */

			#error {
				color: red;
				font-size: 18px;
			}
		</style>
	</head>
	<div id="logo">
		<img src="assets/GBConnect.jpg" class="img-rounded" width="337.5" height="50">
	</div>
	<br><br>
	<section id = "main" align = "left">
		<h1>Create an account</h1>
		<br>
		<form method="post" class="form-inline" action="doRegistration.php">
			<input type = "radio" name ="answer" onclick = "javascript:ifClicked()" id = "radio1" value = "student" placeholder = "student" required>Student
			&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type = "radio" name ="answer" onclick = "javascript:ifClicked()" id = "radio2" value = "coordinator" placeholder = "student" required>Program Co-ordinator
			<br><br>
			<?php if(get('adminmessage')):?>
				<div id="error"><?php echo get('adminmessage');?></div>
			<?php endif ?>
			<label id = "fname">First Name</label>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;<label id = "lname">Last Name</label>
			<br>
			<input type = "text" class="form-control" id = "first" size = "10" name = "first">
			&emsp;&emsp;
			<input type = "text" class="form-control" id = "last" size = "10" name = "last">
			<br><br>
			<label>Date of Birth</label>
			<?php if(get('message11')):?>
				<div id="error"><?php echo get('message11');?></div>
			<?php endif ?>
			<br>
			<input type = "text" class="form-control" id = "dob" size = "12" name ="dob" placeholder = "dd/mm/yyyy">
			<br><br>
			<label for = "username">Username</label>
			<br>
			<?php if(get('message')):?>
				<div id="error"><?php echo get('message');?></div>
			<?php endif ?>
			<input type = "text" class="form-control" id = "user" size = "12" placeholder = "Username" name = "user">
			<br><br>
			<label for = "password">Password</label>
			<br>
			<input type = "password" class="form-control" id = "pass" size = "12" placeholder = "Password" name = "pass">
			<br>
			<p>6-character minimum; case sensitive</p>
			<label>Re-enter Password</label>
			<br>
			<input type = "password" class="form-control" id = "pass2" size = "12" placeholder = "Password" name = "pass2">
			<?php if(get('message2')):?>
				<div id="error"><?php echo get('message2');?></div>
			<?php endif ?>
			<br><br>
			<label>Email Address</label>
			<br>
			<input type = "text" class="form-control" id = "email" size = "12" placeholder = "Email Address" name = "email">
			<?php if(get('message10')):?>
				<div id="error"><?php echo get('message10');?></div>
			<?php endif ?>
			<br><br><br>
			<div id = "program"  align = "left">
				<label>Program</label> &emsp;&emsp;&emsp;&emsp;&emsp;
				<select name="program" class="form-control">
					<option value= "T127">T127</option>
					<option value= "T141">T141</option>
					<option value= "T147">T147</option>
					<option value= "T163">T163</option>
				</select>
			</div>
			<br>
			<div id = "ifstudent" align = "left">
				<label id ="currentsem">Current Semester</label>&emsp;
				<select name="currentsem" class = "form-control">
						<option value= "1">Semester 1</option>
						<option value= "2">Semester 2</option>
						<option value= "3">Semester 3</option>
						<option value= "4">Semester 4</option>
						<option value= "5">Semester 5</option>
						<option value= "6">Semester 6</option>
				</select>
			</div>
			<div id = "ifprof">
				<label id = "Acode">Access Code</label>&emsp;&emsp;&emsp;
				<input name = "acode" type = "text" class = "form-control" size = "8">
			</div>
				<br><br>
			<input type = submit name="submit" align = "center" class = "btn btn-primary" value = "Create Account">

		</form>
	</section>
		<script type = "text/javascript">
		window.onload = function(){
			document.getElementById('ifstudent').style.display = 'none';
			document.getElementById('ifprof').style.display = 'none';
		}
		
		function ifClicked() {
			if (document.getElementById('radio1').checked) {
				document.getElementById('ifstudent').style.display = "block";	
				document.getElementById('ifprof').style.display = "none";
			}
			
			else if (document.getElementById('radio2').checked) {
				document.getElementById('ifstudent').style.display = "none";
				document.getElementById('ifprof').style.display = "block";
			}
			
			
			
		}

		</script>
	<hr>
	<a href="/folder_view/vs.php?s=<?php echo __FILE__?>" target="_blank">View Source</a>
