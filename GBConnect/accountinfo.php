
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"/>

	<title>Account Info</title>
    <style>

        #title {
            display: table;
            margin: 0 auto;
        }

        #info {
            width: 500px;
            margin: 0 auto;
            border: 1px solid black;
        }

        #editbttn{
            display: table;
            margin: 0 auto;
            background-color: #4CAF50;
			border-color: #4CAF50;
            color: white;
            text-align: center;
            font-size: 16px;
		}

		#confirmMessage {
			color: red;
			font-size: 18px;s
		}

    </style>
</head>
<body>
	<div class="container">
    <div id = "title"><h1>Personal Information</h1></div>
	<div id = "info">
		<p id="fname">First Name: <?php  echo $_SESSION['fname'];?></p>
		<p id="lname">Last Name: <?php  echo $_SESSION['lname'];?></p>
		<p id="dob">Date of Birth: <?php  echo $_SESSION['dob'];?></p>
		<p id="username">Username: <?php echo $_SESSION['username'];?></p>
		<p id="email">Email Address: <?php  echo $_SESSION['email'];?></p>
		<p id="cProgram">Current Program: <?php  echo $_SESSION['program'];?></p>
		<p id="cSemester">Current Semester: <?php  echo $_SESSION['sem'];?></p>
		<p id="tutorin">Tutor in: <?php  echo (isset($_SESSION['tutorcourse']))? $_SESSION['tutorcourse']: "";?></p>
	</div>
	<div id="editbttn">
		<a href="editInformation.php" class="btn btn-primary btn-lg" id="editbttn">Edit Information</a>
	</div>
		<div id="confirmMessage">
			<?php if(get('message')):?>
				<div class="error"><?php echo get('message');?></div>
			<?php endif ?>
		</div>
	</div>

	<script type="text/javascript">
	</script>
	<a href="/folder_view/vs.php?s=<?php echo __FILE__?>" target="_blank">View Source</a>
	
	
	
	