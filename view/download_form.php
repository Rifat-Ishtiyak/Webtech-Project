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
    <title>Download Form</title>
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
                <table border="0" width="100%" style="font-size: 25px;">
                    <tr>
                        <td align="center">Assignment Cover Sheet (.doc) <br>
                            <a href="../assets/download form/Assignment_Cover_Sheet.docx"> <button><b>Download</b></button></a>
                        </td>
                        <td align="center">
                            Assignment Cover Sheet (.pdf) <br>
                            <a href="../assets/download form/Assignment_Cover_Sheet.pdf"> <button><b>Download</b></button></a>
                        </td>
                        <td align="center">
                            Thesis Group List (.pdf) <br>
                            <a href="../assets/download form/Thesis_group_list.pdf"> <button><b>Download</b></button></a>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3"><hr></td>
                    </tr>
                    <tr>
                        <td align="center">Course Adjustment Form <br>
                            <a href="../assets/download form/Course_Adjustment_Form.pdf"> <button><b>Download</b></button></a>
                        </td>
                        <td align="center">
                             Application for Transfer Waive Courses Form <br>
                            <a href="../assets/download form/Application_for_Transfer_Waive_Courses.pdf"> <button><b>Download</b></button></a>
                        </td>
                        <td align="center">
                            Transfer Credit Request Form <br>
                            <a href="../assets/download form/Transfer_Credit_Request.pdf"> <button><b>Download</b></button></a>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3"><hr></td>
                    </tr>
                    <tr>
                        <td align="center">Set B Exam Form <br>
                            <a href="../assets/download form/Set_B_Form-Fillable.pdf"> <button><b>Download</b></button></a>
                        </td>
                        <td align="center">
                            Course Evaluation Form <br>
                            <a href="../assets/download form/Course_Evaluation_by_Students.docx"> <button><b>Download</b></button></a>
                        </td>
                        <td align="center">
                            Parental Agrement Letter <br>
                            <a href="../assets/download form/Parental_Agrement_Letter.docx"> <button><b>Download</b></button></a>
                        </td>
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