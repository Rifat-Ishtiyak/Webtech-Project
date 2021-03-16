<?php
	$title = "Index Page";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Notice</title>
</head>
<body>
    <table border="1" width="100%">
        <tr>
            <td align="center" width="550px"><h2><img src="../assets/logo.png" width="40px" height="60px" alt="">School Management System</h2></td>
            <td width="400px">
                    <a href="../project/view/teacher_reg.html"><button style="background-color: lightgreen;">Teacher Registration</button><a/><br>
                    <a href="../project/view/student_reg.html"><button style="background-color: lightgreen;">student Registration</button><a/><br>
                    <a href="../project/view/parents_reg.html"><button style="background-color: lightgreen;">Parents Registration</button><a/><br>
                     </td>
            <td align="center"><a href="../admin_home.php">Home</a> | <a href="view/admin_login.html">Admin Login</a> | <a href="view/Admin_registration.php">Admin Registration</a></td>
        </tr>
        <tr>
            <td style="background-color:rgb(171, 178, 185);">
                <?php
                
                    echo $_COOKIE['EventDate'].'<br>';
                    echo $_COOKIE['EventTime'].'<br>';
                    echo $_COOKIE['EDescription'].'<br>';
                
                ?>
            </td>
            <td  height="550px" align="center" style="background-color:lightblue;">
                   
            </td>
            <td style="background-color:rgb(171, 178, 185);"></td>
        </tr>
        <tr>
            <td colspan="3" align="center" >Copyright ©2021</td>
        </tr>
    </table>
</body>
</html>