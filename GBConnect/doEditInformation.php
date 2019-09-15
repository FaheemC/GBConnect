<?php
session_start();
require ('include' . DIRECTORY_SEPARATOR . 'functions.inc.php');
require ('include' . DIRECTORY_SEPARATOR . 'db.inc.php');
$firstname = ucfirst($_POST['first']);
$lastname = ucfirst($_POST['last']);
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$program = $_POST['program'];
$dob = $_POST['dob'];
$id= $_SESSION['ID'];
updateUser($firstname, $lastname, $username, md5($password), $email, $dob, $program, $id);
header( "Location: TabControl.php?message=Sign out to apply changes#myAccount");
?>
<hr>
<a href="/folder_view/vs.php?s=<?php echo __FILE__?>" target="_blank">View Source</a>

