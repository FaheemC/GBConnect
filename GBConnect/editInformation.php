<?php
include("include/header.inc.php");
hasAccess();
?>
    <head>
        <title>Edit Account Information</title>
    </head>

    <body>
<form method = "post" action = "doEditInformation.php">
    <table class ="table">
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
            <th>Password</th>
            <th>Email</th>
            <th>Program</th>
            <th>DoB</th>
        </tr>
        <tr id="tr1">
            <td><input type = "text" name="first" size="12" value="<?php echo $_SESSION['fname'];?>"required></td>
            <td><input type = "text" name="last" size="12" value="<?php echo $_SESSION['lname'];?>" required></td>
            <td><input type = "text" name="username" size="12" value="<?php echo $_SESSION['username'];?>" required></td>
            <td><input type = "text" name="password" size="12"  required></td>
            <td><input type = "text" name="email" size="26" value="<?php echo $_SESSION['email'];?>" required></td>
            <td><label>Select</label> &emsp;&emsp;&emsp;&emsp;&emsp;
                <select name="program" class="form-control">
                    <option value= "T127">T127</option>
                    <option value= "T141">T141</option>
                    <option value= "T147">T147</option>
                    <option value= "T163">T163</option>
                </select></td>
            <td><input type = "text" name="dob" size="10" value="<?php echo $_SESSION['dob'];?>" required></td>
        </tr>
    </table>
    <br>
    <div align = "center">
        <button class="btn btn-primary btn-lg btn-block" type = "submit">Update</button>
    </div>
</form>






<?php
include ("include/footer.inc.php");
?>
<hr>
<a href="/folder_view/vs.php?s=<?php echo __FILE__?>" target="_blank">View Source</a>

