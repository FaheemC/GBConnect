<?php
/**
 * Created by PhpStorm.
 * User: sctcad
 * Date: 28/11/2016
 * Time: 3:00 PM
 */
session_start();
require ('include' . DIRECTORY_SEPARATOR . 'functions.inc.php');
require ('include' . DIRECTORY_SEPARATOR . 'db.inc.php');


$_SESSION['gpa'] = $_POST['gpa'];
$_SESSION['grade'] = $_POST['grade'];
$_SESSION['tutorcourse'] = $_POST['course'];
$_SESSION['desc'] = $_POST['desc'];
$_SESSION['studentID'] =  $_SESSION['is_valid_user'][0];
$firstname = $_SESSION['is_valid_user'][1];
$lastname = $_SESSION['is_valid_user'][2];
$email = $_SESSION['is_valid_user'][5];

newTUTOR($_SESSION['studentID'],$_SESSION['tutorcourse'],$_SESSION['grade'],$_SESSION['gpa'],$_SESSION['desc'], $firstname, $lastname, $email);
header('Location: TabControl.php#books');
?>
<hr>
<a href="/folder_view/vs.php?s=<?php echo __FILE__?>" target="_blank">View Source</a>

