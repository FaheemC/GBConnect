<!DOCTYPE html>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<html lang="en">
<style>

    #pillMenu {
        list-style-type: none;
        margin: 0;
        padding: 0;
        width: 200px;
        background-color: #f1f1f1;
        border: 1px solid #555;
        position: absolute;
        right: 63%;
        top: 42%;
    }

    #myPillContent {
        padding-left: 740px;
    }

    li a {
        display: block;
        color: #000;
        padding: 8px 16px;
        text-decoration: none;
        height: 55px;
    }

    li.active > a,
    li.active > a:hover,
    li.active > a:focus{
        background-color: lightblue;
        color: white !important;
        text-decoration: none !important;
    }

    li > a:hover{
        background-color: white;
        color: black;
        text-decoration: none !important;
    }

    li {
        text-align: center;
        border-bottom: 1px solid #555;
    }

    li:last-child {
        border-bottom: none;
    }

    /* The Modal (background) */
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        padding-top: 100px; /* Location of the box */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }

    /* Modal Content */
    .modal-content {
        position: relative;
        background-color: #fefefe;
        margin: auto;
        padding: 0;
        border: 1px solid #888;
        height: 70%;
        width: 60%;
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
        -webkit-animation-name: animatetop;
        -webkit-animation-duration: 0.4s;
        animation-name: animatetop;
        animation-duration: 0.4s
    }

    /* Add Animation */
    @-webkit-keyframes animatetop {
        from {top:-300px; opacity:0}
        to {top:0; opacity:1}
    }

    @keyframes animatetop {
        from {top:-300px; opacity:0}
        to {top:0; opacity:1}
    }

    /* The Close Button */
    .close {
        color: white;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }

    .modal-header {
        padding: 2px 16px;
        background-color: deepskyblue;
        color: white;
    }

    .modal-body {padding: 2px 16px;}

    #yourcourses {
        padding-top: 5px;
        padding-left: 300px;
    }
    
    #ebay {
        padding-left: 50px;
    }

</style>

<?php
$course = array ();
$tutorArray = array ();
$book = array ();
$tutorNum = '1';
switch($_SESSION['program']) {
    case 'T127';
        switch($_SESSION['sem']) {
            case '1';
                $course[0] = 'COMP1151';
                $course[1] = 'COMP1176';
                $course[2] = 'COMP1223';
                $course[3] = 'GSSC1045';
                $course[4] = 'MATH1071';
                $course[5] = 'COMM1007';
                $book[0] = 'IT Essentials Companion Guide V6
                                Cisco Networking Academy';
                $book[1] = 'Cisco CCNA Routing and Switching 
                            200-120 Official Cert Guide Library, 
                            Academic Edition';
                $book[2] = 'Murach\'s HTML5 and CSS3';
                $book[3] = 'Business Driven Information Systems 4th ed.';
                $book[4] = 'Aufmann/Lockwood: Intermediate Algebra (9-edition)';
                $book[5] = 'Norton, S., Green, B, and Dynes, R. (2015). Essay Essentials with Readings. (6th ed.)';
                break;
            case '2';
                $course[0] = 'COMP1168';
                $course[1] = 'COMP1202';
                $course[2] = 'COMP1231';
                $course[3] = 'COMP1232';
                $course[4] = 'MATH1172';
                $course[5] = 'GSSC1027';
                $book[0] = 'Modern Database Management, 12/E';
                $book[1] = 'C# Programming: From Problem Analysis to Program Design, 5th Edition';
                $book[2] = 'Murach’s JavaScript and DOM Scripting';
                $book[3] = 'IT Essentials PC Hardware and Software Companion Guide';
                $book[4] = 'Aufmann/Lockwood: Intermediate Algebra (9-edition)';
                $book[5] = 'Personal Finance 6th ed, Kapoor, et al, McGraw Hill';
                break;
            case '3';
                $course[0] = 'COMP1230';
                $course[1] = 'COMP2129';
                $course[2] = 'COMP2130';
                $course[3] = 'COMP3035';
                $course[4] = 'COMM1034';
                $course[5] = 'Elective';
                $book[0] = 'Murach\'s PHP and MySQL by Joel Murach and Ray Harris';
                $book[1] = 'C# Programming: From Problem Analysis to Program Design, 5th Edition';
                $book[2] = 'Introduction to Java Programming, Comprehensive      Version, 10th Edition';
                $book[3] = 'Systems Analysis and Design: An Object Oriented Approach with UML 5th Edition';
                $book[4] = 'Lannon, J., Gurak, L., and Klepp, D. Technical Communication. (6th Canadian ed)';
                $book[5] = '';
                break;
            case '4';
                $course[0] = 'COMP2139';
                $course[1] = 'COMP2080';
                $course[2] = 'COMP2120';
                $course[3] = 'COMP2138';
                $course[4] = 'COMM1035';
                $course[5] = 'Elective';
                $book[0] = 'Murach\'s ASP.NET 4.5  Web Programming with C# 2012';
                $book[1] = 'Object-Oriented Data Structures Using Java, 3rd Edition';
                $book[2] = 'Systems Analysis and Design with UML, 4th Edition (©2012)';
                $book[3] = ' Murach\'s Oracle SQL and PL/SQL for Developers (2nd Edition)';
                $book[4] = 'Lannon, J., Gurak, L., and Klepp, D. Technical Communication. (6th Canadian ed)';
                $book[5] = '';
                break;
            case '5';
                $course[0] = 'COMP3095';
                $course[1] = 'COMP3059';
                $course[2] = 'COMP3061';
                $course[3] = 'COMP3064';
                $course[4] = 'COMP3065';
                $course[5] = 'COMP3074';
                $book[0] = 'Core Servlets and JavaServer Pages: Volume I: Core Technologies: 2/e';
                $book[1] = '';
                $book[2] = 'CompTIA Security + SYS-401 in Depth
                            by Mark Ciampa, 2nd Edition (Oct 2014)';
                $book[3] = 'Unity 4 fundamentals';
                $book[4] = 'Brian Larson, Delivering Business Intelligence with Microsoft SQL Server 2012, Third Edition, McGraw – Hill, 2012
                            ';
                $book[5] = 'Professional Android 4 Application Development [PA]';
                break;
            case '6';
                $course[0] = 'COMP3060';
                $course[1] = 'COMP3075';
                $course[2] = 'COMP3078';
                $course[3] = 'COMP3097';
                $course[4] = 'COMP3080';
                $course[5] = '';
                $book[0] = 'Microsoft SQL Server 2012 Reporting Services, 4th Edition';
                $book[1] = '';
                $book[2] = 'Programming iOS 8 for Programmers: An App-Driven Approach';
                $book[3] = '';
                $book[4] = '';
                $book[5] = '';
                break;
        }
        break;
    case 'T141';
        switch($_SESSION['sem']) {
            case '1';
                $course[0] = 'COMP1151';
                $course[1] = 'COMP1176';
                $course[2] = 'COMP1223';
                $course[3] = 'GSSC1045';
                $course[4] = 'MATH1062';
                $course[5] = 'COMM1007';
                $book[0] = 'IT Essentials Companion Guide V6
                                Cisco Networking Academy';
                $book[1] = 'Cisco CCNA Routing and Switching 
                            200-120 Official Cert Guide Library, 
                            Academic Edition';
                $book[2] = 'Murach\'s HTML5 and CSS3';
                $book[3] = 'Business Driven Information Systems 4th ed.';
                $book[4] = 'Aufmann/Lockwood: Intermediate Algebra (9-edition)';
                $book[5] = 'Norton, S., Green, B, and Dynes, R. (2015). Essay Essentials with Readings. (6th ed.)';
                break;
            case '2';
                $course[0] = 'COMP1203';
                $course[1] = 'COMP3044';
                $course[2] = 'COMP1231';
                $course[3] = 'COMP1232';
                $course[4] = 'MATH1172';
                $course[5] = 'GSSC1027';
                $book[0] = '';
                $book[1] = 'Fedora 8 and Red Hat Enterprise Linux ';
                $book[2] = 'Murach’s JavaScript and DOM Scripting';
                $book[3] = 'IT Essentials PC Hardware and Software Companion Guide';
                $book[4] = 'Aufmann/Lockwood: Intermediate Algebra (9-edition)';
                $book[5] = 'Personal Finance 6th ed, Kapoor, et al, McGraw Hill';
                break;
            case '3';
                $course[0] = 'COMP1196';
                $course[1] = 'COMP2064';
                $course[2] = 'COMP2144';
                $course[3] = 'COMP3066';
                $course[4] = 'COMM2148';
                $course[5] = 'Elective';
                $book[0] = 'LAN Switching and Wireless CCNA Exploration Companion Guide - Cisco Press';
                $book[1] = 'Hands-On Microsoft Windows Server 2008';
                $book[2] = 'Sams Teach Yourself PHP, MySQL and Apache All in One, 5th Edition';
                $book[3] = 'Jason Eckert, Novell, Advanced SUSE Linux Enterprise Server Administration (Course 3038). Course Technology Incorporated, 2007';
                $book[4] = 'Lannon, J., Gurak, L., and Klepp, D. Technical Communication. (6th Canadian ed)';
                $book[5] = '';
                break;
            case '4';
                $course[0] = 'COMP1197';
                $course[1] = 'COMP2102';
                $course[2] = 'COMP2141';
                $course[3] = 'COMP3061';
                $course[4] = 'COMM2149';
                $course[5] = 'Elective';
                $book[0] = 'WAN Technologies  Companion Guide - Cisco      Press';
                $book[1] = ' Wireless# Guide to Wireless Communications';
                $book[2] = 'MCTS Guide to Microsoft windows server 2008 network infrastructure configuration';
                $book[3] = 'CompTIA Security + SYS-401 in Depth by Mark Ciampa, 2nd Edition (Oct 2014)  ';
                $book[4] = 'Lannon, J., Gurak, L., and Klepp, D. Technical Communication. (6th Canadian ed)';
                $book[5] = '';
                break;
        }
        break;
    case 'T147';
        switch($_SESSION['sem']) {
            case '1';
                $course[0] = 'COMP1151';
                $course[1] = 'COMP1176';
                $course[2] = 'COMP1223';
                $course[3] = 'GSSC1045';
                $course[4] = 'MATH1062';
                $course[5] = 'COMM1007';
                $book[0] = 'IT Essentials Companion Guide V6
                                Cisco Networking Academy';
                $book[1] = 'Cisco CCNA Routing and Switching 
                            200-120 Official Cert Guide Library, 
                            Academic Edition';
                $book[2] = 'Murach\'s HTML5 and CSS3';
                $book[3] = 'Business Driven Information Systems 4th ed.';
                $book[4] = 'Aufmann/Lockwood: Intermediate Algebra (9-edition)';
                $book[5] = 'Norton, S., Green, B, and Dynes, R. (2015). Essay Essentials with Readings. (6th ed.)';
                break;
            case '2';
                $course[0] = 'COMP1203';
                $course[1] = 'COMP3044';
                $course[2] = 'COMP1231';
                $course[3] = 'COMP1232';
                $course[4] = 'MATH1172';
                $course[5] = 'GSSC1027';
                $book[0] = '';
                $book[1] = 'Fedora 8 and Red Hat Enterprise Linux ';
                $book[2] = 'Murach’s JavaScript and DOM Scripting';
                $book[3] = 'IT Essentials PC Hardware and Software Companion Guide';
                $book[4] = 'Aufmann/Lockwood: Intermediate Algebra (9-edition)';
                $book[5] = 'Personal Finance 6th ed, Kapoor, et al, McGraw Hill';
                break;
            case '3';
                $course[0] = 'COMP1196';
                $course[1] = 'COMP2064';
                $course[2] = 'COMP2144';
                $course[3] = 'COMP3066';
                $course[4] = 'COMM2148';
                $course[5] = 'Elective';
                $book[0] = 'LAN Switching and Wireless CCNA Exploration Companion Guide - Cisco Press';
                $book[1] = 'Hands-On Microsoft Windows Server 2008';
                $book[2] = 'Sams Teach Yourself PHP, MySQL and Apache All in One, 5th Edition';
                $book[3] = 'Jason Eckert, Novell, Advanced SUSE Linux Enterprise Server Administration (Course 3038). Course Technology Incorporated, 2007';
                $book[4] = 'Lannon, J., Gurak, L., and Klepp, D. Technical Communication. (6th Canadian ed)';
                $book[5] = '';
                break;
            case '4';
                $course[0] = 'COMP1197';
                $course[1] = 'COMP2102';
                $course[2] = 'COMP2141';
                $course[3] = 'COMP3061';
                $course[4] = 'COMM2149';
                $course[5] = 'Elective';
                $book[0] = 'WAN Technologies  Companion Guide - Cisco      Press';
                $book[1] = ' Wireless# Guide to Wireless Communications';
                $book[2] = 'MCTS Guide to Microsoft windows server 2008 network infrastructure configuration';
                $book[3] = 'CompTIA Security + SYS-401 in Depth by Mark Ciampa, 2nd Edition (Oct 2014)  ';
                $book[4] = 'Lannon, J., Gurak, L., and Klepp, D. Technical Communication. (6th Canadian ed)';
                $book[5] = '';
                break;
            case '5';
                $course[0] = 'COMP3093';
                $course[1] = 'COMP3098';
                $course[2] = 'COMP3115';
                $course[3] = 'COMP3049';
                $course[4] = 'COMP3076';
                $course[5] = 'COMP3112';
                $book[0] = 'VMware vSphere 5.0: Install, Configure, manage – materials from VMware education services';
                $book[1] = ' “Top-Down Network Design” by Priscilla Oppenheimer';
                $book[2] = 'Project Management: The Managerial Process 6th ed';
                $book[3] = 'CWNA Certified Wireless Network Administrator Official Study Guide ';
                $book[4] = 'CCNA Security Official Exam Certification Guide';
                $book[5] = 'CCNA Voice Official Exam Certification Guide (640-460 IIUC)';
                break;
            case '6';
                $course[0] = 'COMP3094';
                $course[1] = 'COMP3099';
                $course[2] = 'COMP3108';
                $course[3] = 'COMP3107';
                $course[4] = 'COMP3111';
                $course[5] = '';
                $book[0] = '';
                $book[1] = 'Guide to Supporting Microsoft Private Clouds';
                $book[2] = 'Guide to Supporting Microsoft Private Clouds';
                $book[3] = 'Top Down Network Design by Priscilla Oppenheimer, 3rd Ed.';
                $book[4] = 'Internet Routing Architectures by Sam Halabi, Ciscopress';
                $book[5] = '';
                break;
        }
        break;
    case 'T163';
        switch($_SESSION['sem']) {
            case '1';
                $course[0] = 'GAME1001';
                $course[1] = 'GAME1003';
                $course[2] = 'GAME1005';
                $course[3] = 'GSSC1045';
                $course[4] = 'MATH1162';
                $course[5] = 'COMM1007';
                $book[0] = 'C++ Programming: From Problem Analysis to Program Design, 7th Edition';
                $book[1] = 'Foundation Game Design with HTML5 and JavaScript';
                $book[2] = 'The Game Production Handbook, 3rd Ed.';
                $book[3] = 'Business Driven Information Systems 4th ed.';
                $book[4] = 'Aufmann/Lockwood: Intermediate Algebra (9-edition)';
                $book[5] = 'Norton, S., Green, B, and Dynes, R. (2015). Essay Essentials with Readings. (6th ed.)';
                break;
            case '2';
                $course[0] = 'GAME1011';
                $course[1] = 'GAME1012';
                $course[2] = 'GAME1013';
                $course[3] = 'GAME1014';
                $course[4] = 'MATH1107';
                $course[5] = 'GSSC1027';
                $book[0] = 'C++ Programming: From Problem Analysis to Program Design, 7th Edition';
                $book[1] = 'Unity in Action: Multiplatform Game Development in C# with Unity 5';
                $book[2] = ' Game Development Essentials: Game Interface Design, 2nd Edition';
                $book[3] = 'The Game Production Handbook, Third Edition';
                $book[4] = ' 3D Math Primer for Graphics and Game Development, 1 edition';
                $book[5] = 'Personal Finance 6th ed, Kapoor, et al, McGraw Hill, ISBN 978-1-25-945314-4';
                break;
            case '3';
                $course[0] = 'DESN2013';
                $course[1] = 'GAME2001';
                $course[2] = 'GAME2005';
                $course[3] = 'GAME2013';
                $course[4] = 'GAME2016';
                $course[5] = 'GAME3001';
                $book[0] = '';
                $book[1] = 'Data Structures and Algorithms for Game Developers, 1st Edition';
                $book[2] = 'Mathematics and Physics for Programmers, 1st Edition';
                $book[3] = '';
                $book[4] = 'Agile Game Development with Scrum
                            By Clinton Keith';
                $book[5] = 'Artificial Intelligence for Games, 2nd ed.';
                break;
            case '4';
                $course[0] = 'DESN2017';
                $course[1] = 'GAME2002';
                $course[2] = 'GAME2011';
                $course[3] = 'GAME2012';
                $course[4] = 'GAME2015';
                $course[5] = 'COMP2148';
                $book[0] = '';
                $book[1] = 'SFML Game Development
                            By: Haller, Hansson & Moreira';
                $book[2] = 'Learn Unity iOS Game Development, By: Kyle Langley';
                $book[3] = 'Computer Graphics Through OpenGL: From Theory to Experiments';
                $book[4] = 'Agile Game Development with Scrum
                            By Clinton Keith';
                $book[5] = '';
                break;
            case '5';
                $course[0] = 'DESN3010';
                $course[1] = 'GAME2014';
                $course[2] = 'GAME3002';
                $course[3] = 'GAME3003';
                $course[4] = 'GAME3111';
                $course[5] = 'GAME3121';
                $book[0] = '';
                $book[1] = '1- Java: A Beginner\'s Guide, 6th edition
                            By: Herbert Schildt';
                $book[2] = ' Game Physics Engine Development, 2nd edition';
                $book[3] = 'C# 6.0 in a Nutshell: The Definitive Reference';
                $book[4] = 'Introduction to 3D Game Programming with DirectX 11';
                $book[5] = 'Game Coding Complete, Fourth Edition
                            By: Mike McShaffry & David Graham';
                break;
            case '6';
                $course[0] = 'DESN3012';
                $course[1] = 'GAME3004';
                $course[2] = 'GAME3011';
                $course[3] = 'GAME3015';
                $course[4] = 'GAME3110';
                $course[5] = 'GAME3112';
                $book[0] = '';
                $book[1] = 'Game Development with Swift
                            By: Stephen Haney';
                $book[2] = '';
                $book[3] = 'Game Coding Complete, Fourth Edition
                            By: Mike McShaffry; David Graham';
                $book[4] = 'Programming a Multiplayer FPS in DirectX
                            By: Vaughan Young';
                $book[5] = 'C# 5.0 Pocket Reference
                            By: Joseph Albahari';
                break;
        }
        break;
}
?>


<head>
    <meta charset="UTF-8">
    <title>Find Textbooks/Tutors</title>
</head>
<body>
<h1 style="float:left" id="yourcourses">Your Courses</h1>
<ul id="pillMenu">
    <li class="active"><a data-toggle="pill" href="#course1"><?php echo $course[0]?></a></li>
    <li><a data-toggle="pill" href="#course2"><?php echo $course[1]?></a></li>
    <li><a data-toggle="pill" href="#course3"><?php echo $course[2]?></a></li>
    <li><a data-toggle="pill" href="#course4"><?php echo $course[3]?></a></li>
    <li><a data-toggle="pill" href="#course5"><?php echo $course[4]?></a></li>
    <li><a data-toggle="pill" href="#course6"><?php echo $course[5]?></a></li>
</ul>


<div id="myPillContent" class="tab-content">
    <div class="tab-pane active" id="course1">
        <?php showBookTutor($course[0],$book[0])?>
    </div>

    <div class="tab-pane" id="course2">
        <?php showBookTutor($course[1],$book[1])?>
    </div>

    <div class="tab-pane" id="course3">
        <?php showBookTutor($course[2],$book[2])?>
    </div>

    <div class="tab-pane" id="course4">
        <?php showBookTutor($course[3],$book[3])?>
    </div>

    <div class="tab-pane" id="course5">
        <?php showBookTutor($course[4],$book[4])?>
    </div>

    <div class="tab-pane" id="course6">
        <?php showBookTutor($course[5],$book[5])?>
    </div>
    </div>

</body>

<?php
function showBookTutor($courses, $book)
{
    $bookAmazon = "";
    $bookURL = explode(" ", $book); //make the amazon and ebay link
    $book = ($book == "") ? "No textbook for this class": $book; //check if there are any books
    foreach ($bookURL as $value) {
        $bookAmazon .= "+".$value;
    }
    ?>

    <h1>Textbook:</h1>


    <h4> <?php echo $book?> </h4>
    <br>
    <h1>Buy Textbook Online</h1>
    <hr style="clear:both;"/>
    <a href="https://www.amazon.ca/s/ref=nb_sb_noss?url=search-alias%3Daps&field-keywords=<?php echo $bookAmazon; ?>" target="_blank">
        <img src="assets/amazon-img1.png"
    </a>

    <a id="ebay" href="http://www.ebay.ca/sch/i.html?_nkw=<?php echo $bookAmazon; ?>" target="_blank">
        <img src="assets/ebay1.png">
    </a>
    <hr>
    <h1>Course Tutors</h1>
    <hr>
    <?php
    $tutorArray = getTutorCourse($courses);
    if ((count($tutorArray)) == 0)
        echo '<h2>No Tutors for this Course</h2>';

    for ($i=0;$i<(count($tutorArray));$i++)
    {
        $tutorString = $tutorArray[$i][6].",".$tutorArray[$i][7].",".$tutorArray[$i][4].",".$tutorArray[$i][3].",".$tutorArray[$i][8].",".$tutorArray[$i][5];
    ?>
    <!-- Trigger/Open The Modal -->
    <button type="button" id="myBtn" class="btn btn-primary" data-toggle="modal" data-target="#myModal" data-tutor="<?php echo $tutorString ?>">
        Contact <?php echo $tutorArray[$i][6] . " " . $tutorArray[$i][7] ?></button>
    <?php
}
}
?>

<!-- The Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">New message</h4>
            </div>
            <div class="modal-body">
                <b>Overall GPA: </b>
                <p class="modal-GPA"></p>
                <b>Final Mark: </b>
                <h4 class="modal-mark"></h4>
                <b>E-mail Address: </b>
                <h4 class="modal-Email"></h4>
                <b>Description: </b>
                <h4 class="modal-Desc"></h4>
            </div>
        </div>
    </div>
</div>

</html>
<script>
    $(document).ready(function(){
        $("#pillMenu a[href='#course1']").click(function(){
            arrowVisible('1');
        });
        $("#pillMenu a[href='#course2']").click(function(){
            arrowVisible('2');
        });
        $("#pillMenu a[href='#course3']").click(function(){
            arrowVisible('3');
        });
        $("#pillMenu a[href='#course4']").click(function(){
            arrowVisible('4');
        });
        $("#pillMenu a[href='#course5']").click(function(){
            arrowVisible('5');
        });
        $("#pillMenu a[href='#course6']").click(function(){
            arrowVisible('6');
        });

    });

    function arrowVisible(x)
    {
        //function for the arrows on the right on the courses to be visible when user clicks
        y = 'arrow' + x;
        document.getElementById('arrow1').style.visibility = 'hidden';
        document.getElementById('arrow2').style.visibility = 'hidden';
        document.getElementById('arrow3').style.visibility = 'hidden';
        document.getElementById('arrow4').style.visibility = 'hidden';
        document.getElementById('arrow5').style.visibility = 'hidden';
        document.getElementById('arrow6').style.visibility = 'hidden';
        document.getElementById(y).style.visibility = 'visible';
    }

    $('#myModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var tutorString = button.data('tutor') // Extract info from data-* attributes
        var tutorArray = tutorString.split(',');
        var name = tutorArray[0] + " " + tutorArray[1];
        var GPA = tutorArray[2];
        var mark = tutorArray[3];
        var email = tutorArray[4];
        var desc = tutorArray[5];
        var modal = $(this)
        modal.find('.modal-title').text(name)
        modal.find('.modal-GPA').text(GPA)
        modal.find('.modal-mark').text(mark)
        modal.find('.modal-email').text(email)
        modal.find('.modal-desc').text(desc)
    })

</script>