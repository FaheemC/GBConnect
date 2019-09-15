<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"/>


<html>

<head>

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



    $today_sel = $calendars_array[$today_pcs[0]][$today_pcs[1]-1];





    $sel_month = $today_sel[0]; //selected month will refer one of array value in $yr_sixteen or $yrseventeen

    $sel_month_days = $today_sel[1];









    $count = 0;

    echo "<table class='table-bordered'><tr><th>Sunday</th><th>Monday</th><th>Tuesday</th><th>Wednesday</th><th>Thursday</th><th>Friday</th><th>Saturday</th></tr>";

    for ($i = 0; $i < 6; $i++)

    {

        echo "<tr>";

        for($n = 0; $n <7; $n++)

        {

            echo "<td id='cell".$count."' onclick = 'addplan(this.id)'></td>";

            $count++;

        }

        echo "</tr>";



    }

    echo "</table>";





    ?>





</div>

</body>
<script type="text/javascript">

    var calendar_array = [];

    calendar_array[2016]=[<?php for($i=0;$i<12; $i++)echo "[".$calendars_array[2016][$i][0].",".$calendars_array[2016][$i][1]."],"?>];

    calendar_array[2017]=[<?php for($i=0;$i<12; $i++)echo "[".$calendars_array[2017][$i][0].",".$calendars_array[2017][$i][1]."],"?>];





    var today = [<?php echo $today_pcs[0].",".$today_pcs[1].",".$today_pcs[2]?>];

    var today_year = today[0];

    var today_month = today[1];

    var plan_array = {};

    plan_array[(today_year.toString()) + (today_month.toString())] = [];

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

    function displayPlan(){

        drawCalendar();

        for (var plan in plan_array[(today_year.toString()) + (today_month.toString())]){

            if(plan)

                for (var dayplan in plan_array[(today_year.toString()) + (today_month.toString())][plan])

                {

                    if(plan_array[(today_year.toString()) + (today_month.toString())][plan][dayplan])

                        document.getElementById(plan).innerHTML += plan_array[(today_year.toString()) + (today_month.toString())][plan][dayplan];

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

                if (!plan_array[(today_year.toString()) + (today_month.toString())]){

                    plan_array[(today_year.toString()) + (today_month.toString())] = []

                }

                displayPlan();

            }

        }

        else

        {

            today_month--;

            if (!plan_array[(today_year.toString()) + (today_month.toString())]){

                plan_array[(today_year.toString()) + (today_month.toString())] = []

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

                if (!plan_array[(today_year.toString()) + (today_month.toString())]){

                    plan_array[(today_year.toString()) + (today_month.toString())] = []

                }

                displayPlan();

            }

        }

        else

        {

            today_month++;

            if (!plan_array[(today_year.toString()) + (today_month.toString())]){

                plan_array[(today_year.toString()) + (today_month.toString())] = []

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

            if (!plan_array[(today_year.toString()) + (today_month.toString())][cellid])

                plan_array[(today_year.toString()) + (today_month.toString())][cellid] = [];

            input = "<div id='dayplan_"+plan_array[(today_year.toString()) + (today_month.toString())][cellid].length+"' onclick = 'removeplan(\""+cellid+"\",this.id);event.cancelBubble=true;'>"+ input + "</div>";

            plan_array[(today_year.toString()) + (today_month.toString())][cellid].push(input);

            document.getElementById(cellid).innerHTML += plan_array[(today_year.toString()) + (today_month.toString())][cellid][plan_array[(today_year.toString()) + (today_month.toString())][cellid].length-1];

        }

    }



    function removeplan(cellid,planid){

        var dconfirm = confirm("Do you want to delete the plan?");

        if (dconfirm){

            plan_array[(today_year.toString()) + (today_month.toString())][cellid][planid.split("_").pop()] = null;

            displayPlan();

        }

    }

</script>