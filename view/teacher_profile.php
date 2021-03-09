<?php
	session_start();
	if(!isset($_SESSION['flag'])){
		header('location: login.html');
	}
    $name=$_SESSION['nam'];

    $inp = file_get_contents('../model/teacher.json');
	$temp = json_decode($inp, true);

    foreach ($temp as $key1 => $value1) {
        if ($temp[$key1]["name"]==$name) {
            $namep=$temp[$key1]["name"];
            $id=$temp[$key1]["id"];
            $email=$temp[$key1]["email"];
            $bloodGroup=$temp[$key1]["bloodGroup"];
            $phone=$temp[$key1]["phone"];
            $dob=$temp[$key1]["dob"];
            $picture=$temp[$key1]["profilePic"];
            $address=$temp[$key1]["address"];
            $designation=$temp[$key1]["desig"];
            $qualification=$temp[$key1]["qualification"];

        }
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome <?php echo $namep ?></title>
</head>
<body>
    <table border="1" width="100%">
        <tr>
            <td align="center" width="550px"><h2><img src="../assets/logo.png" width="40px" height="60px" alt=""> School Management System</h2></td>
            <td width="400px" align="center"><h3><b>Welcome <a href="teacher_profile.php"><?php echo $name ?></a></b></h3> </td>
            <td align="center"><a href="../view/teacher_dashboard.php">Home</a> | <a href=" ">Notifications</a> | <a href=" ">Settings | <a href="../controller/teacher_logout.php">Logout</a></a></td>
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
            <td colspan="2" align="center">
                <table border="0" width="80%">
                    <tr>
                        <td>Name </td>
                        <td>: <?php echo $namep ?></td>
                        <td rowspan=8 align="center">
                            <img src=<?php echo $picture ?> height="200px" weidth="200px" alt=""><br>
                       </td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                        <td>ID </td>
                        <td>: <?php echo $id ?></td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                        <td>Designation </td>
                        <td>: <?php echo $designation ?></td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>

                    <tr>
                        <td>Email </td>
                        <td>: <?php echo $email ?></td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                        <td>Blood Group </td>
                        <td>: <?php echo $bloodGroup ?></td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                        <td>Phone </td>
                        <td>: <?php echo $phone ?></td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                        <td>Address </td>
                        <td>: <?php echo $address ?></td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                        <td>Date of Birth </td>
                        <td>: <?php echo $dob ?></td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                        <td>Qualifiaction </td>
                        <td>: <?php echo $qualification ?></td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="3" align="center">Copyright &COPY 2021</td>
        </tr>
    </table>
</body>
</html>