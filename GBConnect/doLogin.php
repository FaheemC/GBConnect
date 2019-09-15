<?php
session_start();
require ('include' . DIRECTORY_SEPARATOR . 'db.inc.php');
require ('include' . DIRECTORY_SEPARATOR . 'functions.inc.php');
if(auth(get('username'),get('password'))){
    $_SESSION['is_valid_user'] = getUserByUsername(get('username'));
    $_SESSION['username'] = $_SESSION['is_valid_user'][3];
    $_SESSION['fname'] = $_SESSION['is_valid_user'][1];
    $_SESSION['lname'] = $_SESSION['is_valid_user'][2];
    $_SESSION['email'] = $_SESSION['is_valid_user'][5];
    $_SESSION['dob'] = $_SESSION['is_valid_user'][6];
    $_SESSION['program'] = $_SESSION['is_valid_user'][7];
    $_SESSION['sem'] = $_SESSION['is_valid_user'][8];
    $_SESSION['ID'] = $_SESSION['is_valid_user'][0];
    if (isset($_POST['setcookie']))
        setcookie('rememberme', $_SESSION['username'], time() + (86400 * 30));
    header('Location: TabControl.php#myAccount');
}

else if (authAdmin(get('username'),get('password'))) {
    $_SESSION['is_valid_user'] = getAdminByUsername(get('username'));
    $_SESSION['username'] = $_SESSION['is_valid_user'][3];
    $_SESSION['fname'] = $_SESSION['is_valid_user'][1];
    $_SESSION['lname'] = $_SESSION['is_valid_user'][2];
    $_SESSION['email'] = $_SESSION['is_valid_user'][5];
    $_SESSION['dob'] = $_SESSION['is_valid_user'][6];
    $_SESSION['program'] = $_SESSION['is_valid_user'][7];
    $_SESSION['sem'] = $_SESSION['is_valid_user'][8];
    $_SESSION['ID'] = $_SESSION['is_valid_user'][0];
    if (isset($_POST['setcookie']))
        setcookie('rememberme', $_SESSION['username'], time() + (86400 * 30));
        header('Location: AdminTabControl.php#myAccount');
}
else {
    header('Location: index.php?msg=Wrong Username and Password');

}
?>
<hr>
<a href="/folder_view/vs.php?s=<?php echo __FILE__?>" target="_blank">View Source</a>

