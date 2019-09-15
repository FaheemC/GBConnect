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

$firstname = ucfirst($_POST['first']);
$lastname = ucfirst($_POST['last']);
$username = $_POST['user'];
$password = $_POST['pass'];
$password2 = $_POST['pass2'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$course = $_POST['program'];
$sem = $_POST['currentsem'];

function validateDate($dob) {
    $d = DateTime::createFromFormat('d/m/Y', $dob);
    return $d && $d-> format('d/m/Y') === $dob;
}

if (validateDate($dob) == FALSE) {
    header('Location: registration.php?message11=Enter A Valid Date');
}
else if ( checkUSERbyusername($username) == TRUE  )
{
    header('Location: registration.php?message=Username Already Exists');
}

else if ($password != $password2){
    header('Location: registration.php?message2=Both Passwords Must Match');
}
else if (filter_var($email, FILTER_VALIDATE_EMAIL) == FALSE) {
    header('Location: registration.php?message10=Enter A Valid Email');
}
else {
    if ($_POST['answer'] == 'student') {
        newUSER($firstname, $lastname, $username, md5($password), $email, $dob, $course, $sem);

        header('Location: index.php');
    }
    else {
        if ($_POST['acode'] == 'GBC2016')
        {
            newADMIN($firstname,$lastname,$username,md5($password),$email,$dob,$course);

            header('Location: index.php');
        }
        else
        {
            header('Location: registration.php?adminMessage=Wrong access code');
        }
    }
}

