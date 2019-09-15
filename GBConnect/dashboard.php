<?php
include('include\header.inc.php');
hasAccess();

$users = getAllUsers();
?>

    <div class="starter-template">
        <h1>List of users</h1>
    </div>

<table class="table table-hover">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
		<th>Email</th>
		<th>Date of Birth</th>
        <th>Last Access</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>

    <?php foreach($users as $user):?>
        <tr>
            <td><?php echo $user[0]?></td>
            <td><?php echo $user[1]?></td>
            <td><?php echo $user[3]?></td>
			<td><?php echo $user[4]?></td>
			<td><?php echo $user[5]?></td>
            <td>
                <a href="userCRUD.php?id=<?php echo $user[0]?>&action=edit"  class="btn btn-primary">Edit</a>
                <a href="userCRUD.php?id=<?php echo $user[0]?>&action=delete" class="btn btn-danger">Delete</a>
            </td>
        </tr>
    <?php endforeach;?>

    </tbody>
</table>
</div>

<?php
include('include\footer.inc.php');
?>
