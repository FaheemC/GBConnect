<?php
session_start();
require ('include' . DIRECTORY_SEPARATOR . 'functions.inc.php');
require ('include' . DIRECTORY_SEPARATOR . 'db.inc.php');
hasAccess();
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"/>

<!DOCTYPE html>
<html>
<head>
    <meta name="author" content="Mansor Shirzada">
    <title>Apply for Tutorship</title>
</head>

<body>


            </b><center><h1> Apply To be a Tutor </h1></center></b>

            <br>


                 <br>

            <form method="post" class="form-inline" action="doTutorRegistration.php">

                 <label>Overall GPA</label>
                 <br>
                 <input type = "double" class="form-control" id = "gpa" size = "4" name="gpa">
                 <br><br>
                 <label>Final Grade </label>
                 <br>
                 <input type = "int" class="form-control" id = "grade" size = "15"  name = "grade">
                 <br><br>
                 <label> What course would you like to tutor in? </label>
                 <br>
                <div id = "program"  align = "left">&emsp;
                    <select name="course" class="form-control" id="selecttutorcourse">
                        <option value="COMP1151">COMP1151</option>
                        <option value="COMP1176">COMP1176</option>
                        <option value="COMP1223">COMP1223</option>
                        <option value="GSSC1045">GSSC1045</option>
                        <option value="MATH1071">MATH1071</option>
                        <option value="COMM1007">COMM1007</option>
                        <option value="COMP1168">COMP1168</option>
                        <option value="COMP1202">COMP1202</option>
                        <option value="COMP1231">COMP1231</option>
                        <option value="COMP1232">COMP1232</option>
                        <option value="MATH1172">MATH1172</option>
                        <option value="GSSC1027">GSSC1027</option>
                        <option value="COMP1230">COMP1230</option>
                        <option value="COMP2129">COMP2129</option>
                        <option value="COMP2130">COMP2130</option>
                        <option value="COMP3035">COMP3035</option>
                        <option value="COMM1034">COMM1034</option>
                        <option value="COMP2139">COMP2139</option>
                        <option value="COMP2080">COMP2080</option>
                        <option value="COMP2120">COMP2120</option>
                        <option value="COMP2138">COMP2138</option>
                        <option value="COMM1035">COMM1035</option>
                        <option value="COMP3095">COMP3095</option>
                        <option value="COMP3059">COMP3059</option>
                        <option value="COMP3061">COMP3061</option>
                        <option value="COMP3064">COMP3064</option>
                        <option value="COMP3065">COMP3065</option>
                        <option value="COMP3074">COMP3074</option>
                        <option value="COMP3060">COMP3060</option>
                        <option value="COMP3075">COMP3075</option>
                        <option value="COMP3078">COMP3078</option>
                        <option value="COMP3097">COMP3097</option>
                        <option value="COMP3080">COMP3080</option>
                        <option value="COMP1203">COMP1203</option>
                        <option value="COMP3044">COMP3044</option>
                        <option value="COMP1196">COMP1196</option>
                        <option value="COMP2064">COMP2064</option>
                        <option value="COMP2144">COMP2144</option>
                        <option value="COMP3066">COMP3066</option>
                        <option value="COMM2148">COMM2148</option>
                        <option value="COMP1197">COMP1197</option>
                        <option value="COMP2102">COMP2102</option>
                        <option value="COMP2141">COMP2141</option>
                        <option value="COMP3061">COMP3061</option>
                        <option value="COMM2149">COMM2149</option>
                        <option value="COMP3093">COMP3093</option>
                        <option value="COMP3098">COMP3098</option>
                        <option value="COMP3115">COMP3115</option>
                        <option value="COMP3049">COMP3049</option>
                        <option value="COMP3076">COMP3076</option>
                        <option value="COMP3112">COMP3112</option>
                        <option value="COMP3094">COMP3094</option>
                        <option value="COMP3099">COMP3099</option>
                        <option value="COMP3108">COMP3108</option>
                        <option value="COMP3107">COMP3107</option>
                        <option value="COMP3111">COMP3111</option>
                        <option value="GAME1001">GAME1001</option>
                        <option value="GAME1003">GAME1003</option>
                        <option value="GAME1005">GAME1005</option>
                        <option value="GSSC1045">GSSC1045</option>
                        <option value="MATH1162">MATH1162</option>
                        <option value="GAME1011">GAME1011</option>
                        <option value="GAME1012">GAME1012</option>
                        <option value="GAME1013">GAME1013</option>
                        <option value="GAME1014">GAME1014</option>
                        <option value="MATH1107">MATH1107</option>
                        <option value="DESN2013">DESN2013</option>
                        <option value="GAME2001">GAME2001</option>
                        <option value="GAME2005">GAME2005</option>
                        <option value="GAME2013">GAME2013</option>
                        <option value="GAME2016">GAME2016</option>
                        <option value="GAME3001">GAME3001</option>
                        <option value="DESN2017">DESN2017</option>
                        <option value="GAME2002">GAME2002</option>
                        <option value="GAME2011">GAME2011</option>
                        <option value="GAME2012">GAME2012</option>
                        <option value="GAME2015">GAME2015</option>
                        <option value="COMP2148">COMP2148</option>
                        <option value="DESN3010">DESN3010</option>
                        <option value="GAME2014">GAME2014</option>
                        <option value="GAME3002">GAME3002</option>
                        <option value="GAME3003">GAME3003</option>
                        <option value="GAME3111">GAME3111</option>
                        <option value="GAME3121">GAME3121</option>
                        <option value="DESN3012">DESN3012</option>
                        <option value="GAME3004">GAME3004</option>
                        <option value="GAME3011">GAME3011</option>
                        <option value="GAME3015">GAME3015</option>
                        <option value="GAME3110">GAME3110</option>
                        <option value="GAME3112">GAME3112</option>
                    </select>
                </div>
                <br><br>
                 <label> Why would you like to become a tutor? </label>
                 <br>
                 <input type = "string" class="form-control" id = "Description" size = "25" name = "desc">
                 <br><br>


                 <input type = "submit" name="submit" align = "center" class = "btn btn-primary" value = "Apply for Tutorship">


                 </form>

</body>
    <style>


        html {

            width: 45%;
            margin-right: 55%;
            margin-left: 25%;


        }

    </style>

</html>
<hr>
<a href="/folder_view/vs.php?s=<?php echo __FILE__?>" target="_blank">View Source</a>
