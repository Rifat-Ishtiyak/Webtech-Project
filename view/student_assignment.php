<?php
	session_start();
	if(!isset($_SESSION['flag'])){
		header('location: login.html');
	}
    $name=$_SESSION['nam'];


?>


<!DOCTYPE html>
<html>
<head>
	<title>Student</title>
</head>
<body style="background-size: auto;">
	<fieldset>
		<legend style="background: bisque">Student</legend>
		<table border="5" width="100%" align="center">
			<tr>
				<td width="100px">
					<img src="../assets/logo.png" width="100px" height="100px">
				</td>
				<td colspan="0" height="80px" align="right">
					<div style="background: beige ; " align="right">
						<h2>
							<a href="../controller/student_logout.php"> Logout </a> 

						</h2>
						
					</div>
					
				</td>
			</tr>
			
			<tr align="left" height="500px" width="1000px">
				<td class="menu">
					<div>
						<a href="sinformation.php"><h4>Student Information</h4></a>
						<a href="sresult.php"><h4>Student Result</h4></a>
						<a href="sassignment.php"><h4>Student Assignment</h4></a>
						<a href="academic_calender.php"><h4>Academic Calender</h4></a>
						<a href="spayment.php"><h4>Paymment Status</h4></a>
						<a href="sattendence.php"><h4>Student Attendence</h4></a>
						<a href="scourse.php"><h4>Offered Courses</h4></a>
						<a href="Sforms.php"><h4>Forms Download</h4></a>
					</div>
				</td>
				<td align="center" colspan="2">
	                <h2>Uplaod Files</h2>

					<fieldset style="width:400px">
					    <legend>Please select your Subject:</legend>
					        <form action="../controller/student_upload_check.php" method="POST" enctype="multipart/form-data">
					            <?php 
					                if(isset($_COOKIE['class0'])){
					                                                                
					                    echo '<input type="checkbox" name="mark1" id="">'.$_COOKIE['subject0'];
					                }
					                if(isset($_COOKIE['class1'])){
					                                                                
					                    echo '<input type="checkbox" name="mark2" id="">'.$_COOKIE['subject1'];
					                }
					                if(isset($_COOKIE['class2'])){
					                                                                
					                    echo '<input type="checkbox" name="mark3" id="">'.$_COOKIE['subject2'];
					                }
					                if(isset($_COOKIE['class3'])){
					                                                                
					                    echo '<input type="checkbox" name="mark4" id="">'.$_COOKIE['subject3'];
					                }
					            ?>   
					            <br>
					            <br>
					            <input type="file" name="ufile" id="">
					            <input type="submit" name="submit" value=Uplaod>

					        </form>
					</fieldset>

            	</td>
			</tr>

           
	
        <tr>
            <td colspan="3" align="center">Copyright &COPY 2021</td>
        </tr>
    </table>
	</fieldset>

</body>
</html>







