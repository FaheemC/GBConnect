<?php

############# USER related functions###############
/*
 * chaeck username/password
 *
 */


function auth($username,$password)
{
    $user = getUserByUsername($username);
    if($user){
        return $user[4] == md5($password);

    }
}

function authAdmin($username,$password)
{
    $user = getAdminByUsername($username);
    if($user){
        return $user[4] == md5($password);

    }
}

function getUserByUsername($username){
    global $conn;

    $query = 'SELECT * FROM users where username = \''. mysqli_escape_string($conn,$username). '\'';
    $result = $conn->query($query);
    if($result->num_rows)
    {
        return $result->fetch_row();
    }
}

function getAdminByUsername($username){
    global $conn;

    $query = 'SELECT * FROM admin where username = \''. mysqli_escape_string($conn,$username). '\'';
    $result = $conn->query($query);
    if($result->num_rows)
    {
        return $result->fetch_row();
    }
}

function checkUSERbyusername($username) {
    global $conn;
    $query = 'SELECT * from USERS where username = \''.mysqli_escape_string($conn,$username). '\'';
    $query2 = 'SELECT * from ADMIN where username = \''.mysqli_escape_string($conn,$username). '\'';
    $result = $conn->query($query);
    $result2 = $conn->query($query2);
    if($result->num_rows || $result2->num_rows)
    {
        return TRUE;
    }
    else
        return FALSE;
}

function getTutor() {
    global $conn;
    $query = 'SELECT * from tutor WHERE status = 1';
    $result = $conn->query($query);
    $resultArray = array();
        {
        while ($row = $result->fetch_array()) {
            $resultArray[] = $row['GPA'];
            $resultArray[] = $row['finalmark'];
            $resultArray[] = $row['description'];
            $resultArray[] = $row['course'];
            $resultArray[] = $row['tutorID'];
            $resultArray[] = $row['fname'];
            $resultArray[] = $row['lname'];

        }
    }
    return $resultArray;
}


function getTutorRow() {
    global $conn;
    $query = "SELECT tutorID from tutor";
    $result = $conn->query($query);
    if($result->num_rows)
    {
        return $result->fetch_row();
    }
    else
        {
        return "<h1>No Pending Tutors</h1>";
    }
}



function getTutorCourse($course)
{
    global $conn;
    $query = "SELECT * FROM tutor WHERE course = '$course'";
    $result = $conn->query($query);
    $results_array=[];
    if($result->num_rows)
    {
        while ($row = $result->fetch_row()) {
             array_push($results_array,$row);

        }
        return $results_array;
    }
}

function deleteUser($id)
{
    global $conn;
    $query = 'DELETE FROM users where id = ?';
    $stmt = $conn->prepare($query);
    $stmt->bind_param('s',$id);
    $stmt->execute();
}



function newUSER($firstname,$lastname,$username,$email,$password,$dob, $program, $sem)
{
    global $conn;
    $query = ("INSERT INTO users ( fname, lname, username, password, email, dob, program, sem) 
    VALUES (?,?,?,?,?,?,?,?)");
    $stmt = $conn->prepare($query);
    $stmt->bind_param('ssssssss', $firstname, $lastname, $username, $email, $password, $dob, $program, $sem);
    $stmt->execute();

    if ($conn->query($query) === TRUE) {
        return "New account created";
    } else {
        return "Error:";
    }

}

function checkADMINbyCode($code) {
    global $conn;
    $query = "SELECT * from admin where code = '$code'";
    $result = $conn->query($query);
    if($result->num_rows )
    {
        return TRUE;
    }
    else
        return FALSE;
}

function newADMIN($firstname,$lastname,$username,$email,$password,$dob, $program)
{
    global $conn;
    $query = ("INSERT INTO admin ( fname, lname, username, password, email, dob, program) 
    VALUES (?,?,?,?,?,?,?)");
    $stmt = $conn->prepare($query);
    $stmt->bind_param('sssssss', $firstname, $lastname, $username, $email, $password, $dob, $program);
    $stmt->execute();
        if ($conn->query($query) === TRUE) {
            return "New account created";
    } else {
            return "Error:";
    }

}

    function getPlan(){
        global $conn;
        $id = $_SESSION['ID'];
        $query = "SELECT * from plant WHERE studentID = '$id' ORDER BY yearMonth, dayCell, planID";
        return $results = $conn->query($query);
    }



    function addPlan($studentID, $yearMonth, $dayCell, $planContent)
    {
        global $conn;
        $query = "INSERT INTO plant (studentID, yearMonth, dayCell, planContent) VALUES(?,?,?,?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('ssss', $studentID, $yearMonth, $dayCell, $planContent);
        $stmt->execute();

        if ($conn->prepare($query) === TRUE) {
            return "New account created";
        } else {
            return "Error:";
        }
    }
    function deletePlan($studentID, $yearMonth, $dayCell, $planID, $planContent ) {
        global $conn;
        $query = "DELETE from plant WHERE studentID ='$studentID' AND yearMonth = '$yearMonth' AND dayCell = '$dayCell' AND planID = '$planID'";
        $stmt = $conn->prepare($query);
        $stmt->execute();
    }

    function newTUTOR($StudentID,$course,$finalmark,$GPA,$Description, $firstname, $lastname, $email)
    {
        global $conn;
        $query = ("INSERT INTO tutor (studentID,course, finalmark, GPA, description, fname, lname, email) 
    VALUES (?,?,?,?,?,?,?,?)");
        $stmt = $conn->prepare($query);

        $stmt->bind_param('ssssssss', $StudentID,$course,$finalmark,$GPA,$Description, $firstname, $lastname, $email);

        $stmt->execute();
        return $stmt;

}

function getAllUsers(){
    global $conn;

    $query = 'SELECT * FROM USERS';
    $result = $conn->query($query);
    if($result->num_rows)
    {
        return $result->fetch_all();
    }
}

function getUserByID($id)
{
    global $conn;

    $query = 'SELECT * FROM USERS where id = ' . $id;
    $result = $conn->query($query);
    if($result->num_rows)
    {
        return $result->fetch_row();
    }
    return array();

}

function userSave($user_name,$id){
    global $conn;

    $stmt = $conn->prepare('UPDATE users SET status=? where id = ?');
    $stmt->bind_param('s',$id);
    $stmt->execute();
}

function acceptTutor($id)
{

    define('HOST','gblearn.com');
    define('USER','f6team29_Haitham');
    define('PASS','team29');
    define('DATABASE','f6team29_schooldb');
    $conn2 = new mysqli(HOST,USER,PASS,DATABASE);
    $stmt = $conn2->prepare('UPDATE tutor SET status=2 where tutorid = ?');
    $stmt->bind_param('s',$id);
    $stmt->execute();
    $conn2->close();
    header('Location: ../AdminTabControl.php#books');
}

function updateUser($firstname, $lastname, $username, $password, $email, $dob, $program, $id)
{
    global $conn;
    $sql = "UPDATE users SET fname='$firstname',lname='$lastname',username='$username',password='$password',email='$email',dob='$dob',program='$program' WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        return "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }

}


function deleteTutor($id) {
    define('HOST','gblearn.com');
    define('USER','f6team29_Haitham');
    define('PASS','team29');
    define('DATABASE','f6team29_schooldb');
    $conn3 = new mysqli(HOST,USER,PASS,DATABASE);
    $query = 'DELETE FROM tutor WHERE tutorid = ?';
    $stmt = $conn3->prepare($query);
    $stmt->bind_param('s',$id);
    $stmt->execute();
    $conn3->close();
    header('Location: ../AdminTabControl.php#books');
}

if (isset($_POST['accept'])) {
    acceptTutor($_POST['accept']);
}

if (isset($_POST['decline'])) {
    deleteTutor($_POST['decline']);
}
########### Util function ########################
function get($name,$def=''){
    return (isset($_REQUEST[$name]) ? $_REQUEST[$name] : $def);
}

function hasAccess()
{
    if(!isset($_SESSION['is_valid_user']) or !$_SESSION['is_valid_user']){
        header('Location: login.php?msg=You need to login to view the page');
    }

}

function __autoload($className){
    $path = 'include/classes/';

    if(!empty($className) && file_exists($path.$className.'.php')){
        require_once($path.$className.'.php');
    }
}
