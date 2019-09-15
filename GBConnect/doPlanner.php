<?php
/**
 * Created by PhpStorm.
 * User: sctcad
 * Date: 30/11/2016
 * Time: 1:15 PM
 */
session_start();
require ('include' . DIRECTORY_SEPARATOR . 'functions.inc.php');
require ('include' . DIRECTORY_SEPARATOR . 'db.inc.php');

if (isset($_POST['actiontype']))
{
    $studentID = $_POST['studentID'];
    $yearMonth = $_POST['yearMonth'];
    $dayCell = $_POST['dayCell'];
    $planID = $_POST['planID'];
    $planContent = $_POST['planContent'];

    if($_POST['actiontype'] == 'addplan')
    {
        addPlan($studentID, $yearMonth, $dayCell, $planContent);
        setcookie('showmonth', $yearMonth, strtotime('+1 year'),'/');
    }

    elseif ($_POST['actiontype']=='deleteplan')
    {
        deletePlan($studentID, $yearMonth, $dayCell, $planID, $planContent);
        setcookie('showmonth', $yearMonth, strtotime('+1 year'),'/');
    }


}
header('Location: TabControl.php');
?>
<hr>
<a href="/folder_view/vs.php?s=<?php echo __FILE__?>" target="_blank">View Source</a>

