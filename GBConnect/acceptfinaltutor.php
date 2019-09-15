<?php
global $conn;
$id = $_GET['tutorid'];
$query = "UPDATE tutor SET status = '2' WHERE tutorID = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param('s',$id);
$stmt->execute();
header('Location: accept_tutor.php');
?>
<hr>
<a href="/folder_view/vs.php?s=<?php echo __FILE__?>" target="_blank">View Source</a>

