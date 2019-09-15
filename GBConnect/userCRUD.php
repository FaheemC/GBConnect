<?php
  include('include\header.inc.php');
  hasAccess();
  $id = get('id');
  switch (get('action')){
      case 'edit':{
          #echo 'I am in edit case and id is '. $id;
          $user = getUserByID($id);
          ?>

          <div class="starter-template">
              <h1>Edit User <?php echo $user[1]?></h1>
          </div>

          <form action="userCRUD.php" method="post">
              <input type="hidden" name="action" value="save">
              <input type="hidden" name="id" value="<?php echo $user[0]?>">
            <input type="text" name="id" disabled value="<?php echo $user[0]?>">
            <input type="text" name="name" value="<?php echo $user[1]?>">
            <input type="text" name="last_access" value="<?php echo $user[3]?>" disabled>
              <input type="submit" class='btn btn-primary' value="Save"><a href="" class="btn btn-warning">Cancel</a>
          </form>
         <?php
          break;
      }
      case 'save':{
          userSave(get('name'),get('id'));
          header('Location: dashboard.php');
          break;
      }
      case 'delete':{
          //echo 'I am in delete case and id is '. $id;
          deleteUser($id);
          break;
      }
  }
  include('include\footer.inc.php');
?>