<?php
session_start();
require ('include' . DIRECTORY_SEPARATOR . 'db.inc.php');
require ('include' . DIRECTORY_SEPARATOR . 'functions.inc.php');
hasAccess();
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"/>

<html>
<title>GBConnect</title>
<style>
    .nav-tabs > li.active > a,
    .nav-tabs > li.active > a:hover,
    .nav-tabs > li.active > a:focus{
        color: black !important;
        border-top-color: deepskyblue !important;
    }

    .nav-tabs>li>a {
        border: 1px solid black !important;
        background-color: lightgrey;
        color: black;
    }

    #noborder {
        border-bottom: none !important;
    }

    #container {
        min-width: 200px;
        margin: auto;
        padding-top: 10px;
    }

    #buttons {
        float: right;
    }

    #applyTutor {
        position: absolute;
        right: 1%;
    }

    #signOut {
        position: absolute;
        top: 50px;
        right: 1%;
    }

    #Greeting {
        position: absolute;
        padding-top: 35px;
        padding-left: 1000px;
    }

    #logo {
        position: absolute;
        padding-left: 20px;
    }
</style>

<div id="container">
    <div id="buttons">
        <br>
        <span id="signOut">
        <a href="index.php"<button type="button" href="SignOut.php" onclick = "signOut()" class="btn btn-danger">Sign out</button></a>
        </span>
    </div>

    <div id="logo">
        <img src="assets/GBConnect.jpg" class="img-rounded" width="337.5" height="50">
    </div>

    <span id="Greeting">
        <h4>Hello, <?php echo $_SESSION['username']?></h4>
    </span>
    <br><br><br><br>
    <ul id="myTab" class="nav nav-tabs nav-justified">
        <li id="noborder" class=""><a href="#myAccount" data-toggle="tab">My Account</a></li>
        <li id="noborder" class=""><a href="#program" data-toggle="tab">Program Details</a></li>
        <li id="noborder" class=""><a href="#books" data-toggle="tab">Accept/Decline Tutors</a></li>
        <li id="noborder" class="active"><a href="#Planner" data-toggle="tab">Planner</a></li>
    </ul>
    <div id="myTabContent" class="tab-content">
        <div class="tab-pane" id="myAccount">
            <?php showAccount() ?>
        </div>
        <div class="tab-pane" id="program">
            <?php  showProgram()?>
        </div>
        <div class="tab-pane" id="books">
            <?php showTutor() ?>
        </div>
        <div class="tab-pane in active" id="Planner">
            <?php showPlanner() ?>
        </div>
    </div>

</div>
</html>
<?php
function showPlanner()
{
    include_once "planner.php";

}

function showTutor()
{
    include_once "accept_tutor.php";
}

function showProgram()
{
    include_once "CourseInformationoutline.php";
}

function showAccount()
{
    include_once "accountinfo.php";
}
?>
<hr>
<a href="/folder_view/vs.php?s=<?php echo __FILE__?>" target="_blank">View Source</a>


<script>
    $('#myTab a').click(function(e) {
        e.preventDefault();
        $(this).tab('show');
    });

    // store the currently selected tab in the hash value
    $("ul.nav-tabs > li > a").on("shown.bs.tab", function(e) {
        var id = $(e.target).attr("href").substr(1);
        window.location.hash = id;
    });

    // on load of the page: switch to the currently selected tab
    var hash = window.location.hash;
    $('#myTab a[href="' + hash + '"]').tab('show');
</script>
