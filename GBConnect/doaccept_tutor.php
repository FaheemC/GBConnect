<?php
session_start();
require ('include' . DIRECTORY_SEPARATOR . 'db.inc.php');
require ('include' . DIRECTORY_SEPARATOR . 'functions.inc.php');

$accept = $_POST['accept_decline'];
if ($accept != "accept") {

    $query = 'DELETE FROM tutor where id = ?';
    $stmt = $conn->prepare($query);
    $stmt->bind_param('s',$id);
    $stmt->execute();
}


else {
    header('Location: accept_tutor.php?msg2=Accept or Decline Tutors');
}
?>
<hr>
<a href="/folder_view/vs.php?s=<?php echo __FILE__?>" target="_blank">View Source</a>





