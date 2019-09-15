
<!DOCTYPE html>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<html lang="en">
<head>
    <title>Accept Tutors</title>
    <style>
        #potential_Tutor {
            padding-left:10%;
        }

        #tutor_table table {
            font-family: arial, sans-serif
            border-collapse: collapse;
            width: 65%;
            margin: auto;

        }

        #tutor_table td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        #confirmButton {
            padding-left: 620px;
        }

    </style>
</head>
<body>
<h1 id="potential_Tutor">Potential Tutors</h1>
<hr>
<div id="tutor_table">
    <form action = "include/functions.inc.php" method="post">
        <?php
        //$allTutor[3+(($i)*5)]

        if (empty(getTutor()))
            echo '<h2>NO AVAILABLE TUTORS</h2>';
        else {
            $allTutor = getTutor();
            $tutorRow = count($allTutor) / 7;
            for ($i = 0; $i < $tutorRow; $i++) {
                ?>
                <br>
                <table>
                    <tr>
                        <td><?php echo $allTutor[5 + (($i) * 7)] . " " . $allTutor[6 + (($i) * 7)] ?></td>
                        <td><b>Final Grade:</b> <?php echo $allTutor[1 + (($i) * 7)] ?></td>
                        <td><b>Overall GPA:</b> <?php echo $allTutor[0 + (($i) * 7)] ?></td>
                        <td>
                            <button type="submit" name="accept" value="<?php echo $allTutor[4 + (($i) * 7)] ?>">Accept
                            </button>
                            <button type="submit" name="decline" value="<?php echo $allTutor[4 + (($i) * 7)] ?>">
                                Decline
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <p><?php echo $allTutor[2 + (($i) * 5)] ?></p>
                        </td>
                    </tr>
                </table>
                <?php
            }
        }
        ?>
    </form>
    <br>
</div>
</body>
</html>

<?php


?>