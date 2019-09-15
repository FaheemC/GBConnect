<?php
include('include\header.inc.php');
hasAccess();
$page_title = 'Student Management Page';

  $s = new Student();

?>

<div class="starter-template">
        <h1><?php print $page_title?></h1>
    </div>

<?php


$action = (isset($_GET['action']) ? $_GET['action'] : '');
switch($action){
    case 'delete':
    {
        $s->findById(get('id'));
        echo $s->delete();
        break;
    }
    case 'add':
    {
        include_once 'include\forms\studentForm.inc.php';
        break;
    }
    case 'new':{
        $s = new Student(null,get('stname'),get('stid'));
       // var_dump($s->toString());
        $s->save();
        break;
    }
    default: {
        $students = [];
        $db = new mysqli('localhost', 'root', '', 'schoolDb');
        $result = $db->query('SELECT * from students');
        while ($row = $result->fetch_object()) {
            $students[] = new Student($row->id,$row->name, $row->student_id, $row->active);
            //$students[sizeof($students) - 1]->id = $row->id;
        }
        $table = '<tr><th>ID</th><th>Name</th><th>Student ID</th><th>Status</th><th>Action</th></tr>';
        foreach ($students as $student) {
           $edit_btn = "<a class='btn btn-danger' href='?action=delete&id=" . $student->id . "'> Edit</a>";
           $table .= '<tr>' .
                        '<td>'. $student->id .'</td>' .
                        '<td>'. $student->name .'</td>' .
                        '<td>'. $student->student_id .'</td>' .
                        '<td>'. $student->active .'</td>' .
                        '<td>'. $edit_btn . '</td>' .
                     '</tr>';
        }
        echo '<table class="table table-hover">' . $table . '</table>';

    }// var_dump($students);
}


include('include\footer.inc.php');
?>
