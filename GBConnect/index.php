<?php
session_start();
session_destroy();
include('include/header.inc.php');
?>
<title>Login to GBConnect</title>
<style>

	#title {
		font-family: Arial, Helvetica, sans-serif;
	}

	body {
	}

	#loginsection {
		width: 50%;
		margin: auto;
		border:1px solid lightgrey;
		background-color: white !important;
	}

</style>
<div id="logincontainer">
<body >
			<br><br>
			<div id="title">
				<img src="assets/GBConnect.jpg" class="img-rounded" width="337.5" height="50">
			</div>
			<br><br><br><br><br>
    
	
	<div id = "loginsection" align = "center">
	<h1>Sign In</h1>
	<br>
		<form action="doLogin.php" class = "form-inline" method="post">
			<?php $usernamecookie = (isset($_COOKIE['rememberme'])) ? $_COOKIE['rememberme'] : "" ?>
			<label for="username">Username&nbsp;</label><input type="text" size="11" class="form-control" name="username" value="<?php echo $usernamecookie ?>" required><br><br>
			<label for="password">Password&nbsp;</label><input type="password" size="11" class="form-control" name="password" required><br><br>
			<div id = "check">
				<label for="remember"><input type="checkbox" name="setcookie">&nbsp;Remember Me</label>
			</div>
			<br>
			<a href="registration.php"><input id = "signup" class="btn btn-danger" type= "button" value="Sign Up"></a>
			<br><br>
			<input type="submit" class = "btn btn-primary" value = "&nbsp;Log In&nbsp;">
			<br><br>
			<? if(get('msg')):?>
				<div class="error"><?php echo get('msg');?></div>
			<?endif?>
		</form>
	</div>
</div>
</body>
<?php
include('include/footer.inc.php');
?>
<a href="/folder_view/vs.php?s=<?php echo __FILE__?>" target="_blank">View Source</a>

