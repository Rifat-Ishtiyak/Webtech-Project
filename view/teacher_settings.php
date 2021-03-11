<?php
	session_start();
	if(!isset($_SESSION['flag'])){
		header('location: login.html');
	}
    $name=$_SESSION['nam'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>settings</title>
</head>
<body>
    <table border="1" width="100%">
        <tr>
            <td align="center" width="550px"><h2><img src="../assets/logo.png" width="40px" height="60px" alt=""> School Management System</h2></td>
            <td width="400px" align="center"><h3><b>Welcome <a href="teacher_profile.php"><?php echo $name ?></a></b></h3> </td>
            <td align="center"><a href="../view/teacher_dashboard.php">Home</a> | <a href=" ">Notifications</a> | <a href="../view/teacher_settings.php">Settings | <a href="../controller/teacher_logout.php">Logout</a></a></td>
        </tr>
        <tr height=600px>
            <td style="font-size: large;">
                <ul>
                    <li>
                        Assignments
                        <ul>
                            <li><a href="">upload files</a></li>
                        </ul>
                    </li>
                    <li>
                        Attendence
                        <ul>
                            <li><a href="">Take Attendence</a></li>
                            <li><a href="">View Attendence</a></li>
                        </ul>
                    </li>
                    <li>Course Result</li>
                    <li>Student Details</li>
                    <a href=""><li>Contact Parents</li></a>
                    <li>
                        Others
                        <ul>
                            <li><a href="../view/download_form.php">Dowload Forms</a></li>
                            <li>
                                <a href="../view/academic_calender.php">Academic Calender</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </td>
            <td colspan="2">
                <fieldset>
                    <legend><h2><b>Password Change</b></h2></legend>
                    <form action="../controller/teacher_passChange.php" method="POST">
                        <table border="0">
                            <tr>
                                <td>
                                    Enter your ID
                                </td>
                                <td>:
                                    <input type="text" name="id" id="">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    New Pssword
                                </td>
                                <td>:
                                    <input type="text" name="newP" id="">
                                </td>
                            </tr>
                            <tr>
                                <td align="right" colspan="2">
                                    <input type="submit" name="submit" value="Submit">
                                    <input type="reset" value="reset">
                                </td>
                            </tr>
                        </table>
                    </form>
                </fieldset>
            </td>
        </tr>
        <tr>
            <td colspan="3" align="center">Copyright &COPY 2021</td>
        </tr>
    </table>
</body>
</html>