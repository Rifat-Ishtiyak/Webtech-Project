<?php
	$title = "User List Page";
	// $DataInput = file_get_contents('../Model/TeacherDataStorage.json');
	// $DataArray = json_decode($DataInput, true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <table border="1" width="100%">
        <tr>
            <td align="center" width="350px"><h2><img src="../Assets/logo.png" width="40px" height="60px" alt=""> School Management System</h2></td>
            <td width="400px" align="center"><h3><b>Welcome <a href=" ">ABC</a></b></h3> </td>
            <td align="center"><a href="AdminLandingPage.html">Home</a> | <a href=" ">Notifications</a> | <a href=" ">Settings | <a href="">Logout</a></a></td>
        </tr>
        <tr height=600px>
            <td >
                <ul>
                    <li><a href="../View/Admin_UserManip.html"><button>Users</button></a></li>
                    <li><a href="../View/AdmissionInfo.html"><button>Admission Info</button></a></li>
                    <li><a href="../View/Admin_Events.html"><button>Events</button></a></li>
                    <li><a href="../View/AcademicCalender.html"><button>Academic Calender</button></a></li>
                    <li><a href="../View/ClassesInfo.html"><button>Classes Info</button></a></li>
                    <li><a href="../View/Funds&Fees.html"><button>Funds & Fees</button></a></li>
                    <li><a href="../View/Exams.html"><button>Exams</button></a></li>
                    <li><a href="../View/AlumniInfo.html"><button>Alumni Info</button></a></li>
                    
                </ul>
            </td>
            <td colspan="2">
                <table border="1" width="100%">
                    <tr>
                        <td>ID</td>
                        <td>NAME</td>
                        <td>EMAIL</td>
                        <td>BLOODGROUP</td>
                        <td>PHONE</td>
                        <td>GENDER</td>
                        <td>QUALIFICATION</td>
                        <td>DATE OF BIRTH</td>
                        <td>PROFILE PIC</td>
                    </tr>
                    <?php
                        $teachers=json_decode(file_get_contents('../Model/Teacher.json'),true);
                        foreach($teachers as $teacher)
                        {
                            echo '<tr>
                            <td>'.$teacher['id'].'</td>
                            <td>'.$teacher['name'].'</td>
                            <td>'.$teacher['email'].'</td>
                            <td>'.$teacher['bloodGroup'].'</td>
                            <td>'.$teacher['phone'].'</td>
                            <td>'.$teacher['gender'].'</td>
                            <td>'.$teacher['Qualification'].'</td>
                            <td>'.$teacher['dob'].'</td>
                            <td>'.$teacher['profilePic'].'</td>
                            </tr>';
                        }
                    ?>
                </table>

            </td>
        </tr>
        <tr>
            <td colspan="3" align="center">Copyright ©2021</td>
        </tr>
    </table>
</body>
</html>