<?php
$results1 = getPlan();
function object_to_array($data)
{
    if (is_array($data) || is_object($data))
    {
        $result = array();
        foreach ($data as $key => $value)
        {
            $result[$key] = object_to_array($value);
        }
        return $result;
    }
    return $data;
}
$results = object_to_array($results1);
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"/>

<html>
    <head>
        <title>Planner</title>
        <style>
            .calendar {
                display: table;
                margin: 0 auto;
            }

            .calendar table,
            .calendar td{

                table-layout: fixed;
                border: 1px solid black;
                border-collapse: collapse;
                width: 1000px;
                height: 100px;
                vertical-align: top;
                text-align: left;

            }

            .calendar td > div{
                white-space: pre-wrap;
                white-space: -moz-pre-wrap;
                white-space: -o-pre-wrap;
                word-wrap: break-word;
                border: inset;
                background-color: lightblue;
            }

            .bttns{

                display: table;
                font-size: 50px;
                margin: 0 auto;

            }

            div.bttns button, div.bttns p{

                display: inline-block;

            }

            #showCalYear {
                padding-left: 600px;
                color: grey;
                font-size: 38px;
            }

        </style>

    </head>


    <body>

        <form action="doPlanner.php" method="post" name="dbform">

            <input type="hidden" name="studentID" id = "form_studentID">
            <input type="hidden" name="yearMonth" id = "form_yearMonth">
            <input type="hidden" name="dayCell" id = "form_dayCell">
            <input type="hidden" name="planID" id = "form_planID">
            <input type="hidden" name="planContent" id = "form_planContent">
            <input type="hidden" name="actiontype" id = "form_actiontype">

        </form>

        <div class = "bttns">

            <button class = "btn btn-default" onclick="lbclick()">&larr;</button><p id="showCalMonth"></p><button class= "btn btn-default" onclick="rbclick()">&rarr;</button><p id="showCalYear"></p>

        </div>

        <div class = 'calendar'>

            <?php

            $calendars_array = [];

            for($year=2016;$year<2018;$year++) {
                $calendars_array[$year]=[];
                for ($i = 0; $i<12; $i++)

                {
                    $calendars_array[$year][$i] = [Date('w',strtotime(($i+1).'/1/'.$year)), cal_days_in_month(0, $i+1, $year)];
                }

            }
            $today = date("Y-m-d");
            $today_pcs = explode('-',$today);

            $count = 0;

            echo "<table class='table-bordered'><tr><th>Sunday</th><th>Monday</th><th>Tuesday</th><th>Wednesday</th><th>Thursday</th><th>Friday</th><th>Saturday</th></tr>";
            for ($i = 0; $i < 6; $i++)
            {
                echo "<tr>";
                for($n = 0; $n <7; $n++)
                {
                    echo "<td title = 'Click the cell to add a plan' id='cell".$count."' onclick = 'addplan(this.id)'></td>";
                    $count++;
                }
                echo "</tr>";
            }
            echo "</table>";




            ?>





        </div>
        <script type="text/javascript">

            var calendar_array = [];

            calendar_array[2016]=[<?php for($i=0;$i<12; $i++)echo "[".$calendars_array[2016][$i][0].",".$calendars_array[2016][$i][1]."],";?>];

            calendar_array[2017]=[<?php for($i=0;$i<12; $i++)echo "[".$calendars_array[2017][$i][0].",".$calendars_array[2017][$i][1]."],";?>];

            var today_year = <?php if(isset($_COOKIE['showmonth'])) echo substr($_COOKIE['showmonth'],0,4); else echo $today_pcs[0];?>;
            var today_month = <?php if(isset($_COOKIE['showmonth'])) echo substr($_COOKIE['showmonth'],4); else echo $today_pcs[1];?>;
            var plan_array = {};



            plan_array[gettoday_YM()] = [];

            function gettoday_YM()
            {
                return today_year.toString() + today_month.toString();
            }

            function drawCalendar(){

                var months = new Array(12);
                months[0] = "January";
                months[1] = "February";
                months[2] = "March";
                months[3] = "April";
                months[4] = "May";
                months[5] = "June";
                months[6] = "July";
                months[7] = "August";
                months[8] = "September";
                months[9] = "October";
                months[10] = "November";
                months[11] = "December";

                document.getElementById("showCalMonth").innerHTML = months[today_month - 1];
                document.getElementById("showCalYear").innerHTML = today_year;

                for (i=0; i<42;i++)

                    document.getElementById("cell"+i).innerHTML = "";

                for (i = calendar_array[today_year][today_month - 1][0], d = 1; i < ((calendar_array[today_year][today_month - 1][0]) + (calendar_array[today_year][today_month - 1][1])); i++, d++)

                    document.getElementById("cell" + i).innerHTML = d;

            }

            <?php if(is_array($results)) { ?>

            <?php foreach ($results as $result){ ?>
            if(!plan_array["<?php echo $result['yearMonth'];?>"]) plan_array["<?php echo $result['yearMonth'];?>"]=[];
            if(!plan_array["<?php echo $result['yearMonth'];?>"]["<?php echo $result['dayCell'];?>"]) plan_array["<?php echo $result['yearMonth'];?>"]["<?php echo $result['dayCell'];?>"] =[];
            if(!plan_array["<?php echo $result['yearMonth'];?>"]["<?php echo $result['dayCell'];?>"]['<?php echo $result['planID']?>']) plan_array["<?php echo $result['yearMonth'];?>"]["<?php echo $result['dayCell'];?>"]['<?php echo $result['planID']?>']=[];
            plan_array["<?php echo $result['yearMonth'];?>"]["<?php echo $result['dayCell'];?>"]['<?php echo $result['planID']?>'].push('<?php echo $result['planContent']?>');
            <?php } } ?>

            function displayPlan(){

                drawCalendar();



                for (var day in plan_array[gettoday_YM()]){

                    if(day)

                        for (var dayplan in plan_array[gettoday_YM()][day])
                        {
                            if(plan_array[gettoday_YM()][day][dayplan])
                                if(plan_array[gettoday_YM()][day][dayplan]!="")
                                    document.getElementById(day).innerHTML += "<div id='"+dayplan+"' title = 'Click to delete the plan' onclick = 'removeplan(\""+day+"\",this.id);event.cancelBubble=true;'>"+ plan_array[gettoday_YM()][day][dayplan] + "</div>";
                        }

                }



            }

            displayPlan();



            function lbclick(){

                if(today_month<=1)

                {

                    if (today_year == 2016)

                        return;

                    else if (today_year == 2017)

                    {

                        today_year = 2016;

                        today_month = 12;

                        if (!plan_array[gettoday_YM()]){

                            plan_array[gettoday_YM()] = []

                        }

                        displayPlan();

                    }

                }

                else

                {

                    today_month--;

                    if (!plan_array[gettoday_YM()]){

                        plan_array[gettoday_YM()] = []

                    }

                    displayPlan();

                }

            }



            function rbclick(){

                if (today_month>=12)

                {

                    if (today_year==2017)

                        return;

                    else if (today_year == 2016)

                    {

                        today_year = 2017;

                        today_month = 1;

                        if (!plan_array[gettoday_YM()]){

                            plan_array[gettoday_YM()] = []

                        }

                        displayPlan();

                    }

                }

                else

                {

                    today_month++;

                    if (!plan_array[gettoday_YM()]){

                        plan_array[gettoday_YM()] = []

                    }

                    displayPlan();

                }

            }

            function addplan(cellid){
                if (document.getElementById(cellid).innerHTML==""){
                    return;
                }
                var input = prompt("Enter your plan");
                if (input != "" && input != null)
                {
                    if(!plan_array[gettoday_YM()][cellid])plan_array[gettoday_YM()][cellid]=[]
                    document.getElementById('form_studentID').value = '<?php echo $_SESSION['ID'] ?>';
                    document.getElementById('form_yearMonth').value = gettoday_YM();
                    document.getElementById('form_dayCell').value = cellid;
                    //document.getElementById('form_planID').value = "dayplan_"+Object.keys(plan_array[gettoday_YM()][cellid]).length;
                    document.getElementById('form_planContent').value = input;
                    document.getElementById('form_actiontype').value = "addplan";
                    document.dbform.submit();
                }
            }



            function removeplan(cellid,planid)
            {

                var dconfirm = confirm("Do you want to delete the plan?");
                if (dconfirm)
                {
                    document.getElementById('form_studentID').value = '<?php echo $_SESSION['ID'] ?>';
                    document.getElementById('form_yearMonth').value = gettoday_YM();
                    document.getElementById('form_dayCell').value = cellid;
                    document.getElementById('form_planID').value = planid;
                    document.getElementById('form_planContent').value = "";
                    document.getElementById('form_actiontype').value = "deleteplan";


                    document.dbform.submit();
                }
            }



        </script>
    </body>


</html>
<a href="/folder_view/vs.php?s=<?php echo __FILE__?>" target="_blank">View Source</a>