<?php
    include('teacher_header.php');
    date_default_timezone_set("Asia/Dhaka");
?>

<h3><b><?php echo "Date : " . date("d-M-Y") . "<br>"; ?></b></h3>
<h3><b><?php echo "Time : " . date("h:i a") . "<br>"; ?></b></h3>
<form method="post" action="../controller/teacher_attendance_check.php">
<table border="0" width="100%">
    <tr>
        <td align='center' width="30%">Student Name</td>
        <td align='center'>Present</td>
        <td align='center'>Absent</td>
        <td align='center'>Late</td>
    </tr>
    <tr>
        <td > Will Stgermain</td>
        <td align='center'><input type="radio" name="student1" value="present" id=""></td>
        <td align='center'><input type="radio" name="student1" value="absent" id=""></td>
        <td align='center'><input type="radio" name="student1" value="late" id=""></td>
    </tr>
    <tr>
        <td>Aubrey Pinion</td>
        <td align='center'><input type="radio" name="student2" value="present" id=""></td>
        <td align='center'><input type="radio" name="student2" value="absent" id=""></td>
        <td align='center'><input type="radio" name="student2" value="late" id=""></td>
    </tr>
    <tr>
        <td>Hope Simpler</td>
        <td align='center'><input type="radio" name="student3" value="present" id=""></td>
        <td align='center'><input type="radio" name="student3" value="absent" id=""></td>
        <td align='center'><input type="radio" name="student3" value="late" id=""></td>
    </tr>
    <tr>
        <td>Candida Oneill</td>
        <td align='center'><input type="radio" name="student4" value="present" id=""></td>
        <td align='center'><input type="radio" name="student4" value="absent" id=""></td>
        <td align='center'><input type="radio" name="student4" value="late" id=""></td>
    </tr>
    <tr>
        <td>Paulita Coletti</td>
        <td align='center'><input type="radio" name="student5" value="present" id=""></td>
        <td align='center'><input type="radio" name="student5" value="absent" id=""></td>
        <td align='center'><input type="radio" name="student5" value="late" id=""></td>
    </tr>
    <tr>
        <td>Gabriella Bracamonte</td>
        <td align='center'><input type="radio" name="student6" value="present" id=""></td>
        <td align='center'><input type="radio" name="student6" value="absent" id=""></td>
        <td align='center'><input type="radio" name="student6" value="late" id=""></td>
    </tr>
    <tr>
        <td>Doug Albury</td>
        <td align='center'><input type="radio" name="student7" value="present" id=""></td>
        <td align='center'><input type="radio" name="student7" value="absent" id=""></td>
        <td align='center'><input type="radio" name="student7" value="late" id=""></td>
    </tr>
    <tr>
        <td>Floy Funes</td>
        <td align='center'><input type="radio" name="student8" value="present" id=""></td>
        <td align='center'><input type="radio" name="student8" value="absent" id=""></td>
        <td align='center'><input type="radio" name="student8" value="late" id=""></td>
    </tr>
    <tr>
        <td>Ewa Saleem</td>
        <td align='center'><input type="radio" name="student9" value="present" id=""></td>
        <td align='center'><input type="radio" name="student9" value="absent" id=""></td>
        <td align='center'><input type="radio" name="student9" value="late" id=""></td>
    </tr>
    <tr>
        <td>Krishna Thweatt</td>
        <td align='center'><input type="radio" name="student10" value="present" id=""></td>
        <td align='center'><input type="radio" name="student10" value="absent" id=""></td>
        <td align='center'><input type="radio" name="student10" value="late" id=""></td>
    </tr>
    <tr>
        <td>Janina Portner</td>
        <td align='center'><input type="radio" name="student11" value="present" id=""></td>
        <td align='center'><input type="radio" name="student11" value="absent" id=""></td>
        <td align='center'><input type="radio" name="student11" value="late" id=""></td>
    </tr>
    <tr>
        <td>Rosaline Bryan</td>
        <td align='center'><input type="radio" name="student12" value="present" id=""></td>
        <td align='center'><input type="radio" name="student12" value="absent" id=""></td>
        <td align='center'><input type="radio" name="student12" value="late" id=""></td>
    </tr>
    <tr>
        <td>Marylin Popovich</td>
        <td align='center'><input type="radio" name="student13" value="present" id=""></td>
        <td align='center'><input type="radio" name="student13" value="absent" id=""></td>
        <td align='center'><input type="radio" name="student13" value="late" id=""></td>
    </tr>
    <tr>
        <td>Trena Gunther</td>
        <td align='center'><input type="radio" name="student14" value="present" id=""></td>
        <td align='center'><input type="radio" name="student14" value="absent" id=""></td>
        <td align='center'><input type="radio" name="student14" value="late" id=""></td>
    </tr>
    <tr>
        <td>Latanya Earls</td>
        <td align='center'><input type="radio" name="student15" value="present" id=""></td>
        <td align='center'><input type="radio" name="student15" value="absent" id=""></td>
        <td align='center'><input type="radio" name="student15" value="late" id=""></td>
    </tr>
    <tr>
        <td>Homer Storck</td>
        <td align='center'><input type="radio" name="student16" value="present" id=""></td>
        <td align='center'><input type="radio" name="student16" value="absent" id=""></td>
        <td align='center'><input type="radio" name="student16" value="late" id=""></td>
    </tr>
    <tr>
        <td align='right' colspan="2"><input type="submit" name="submit" value="Submit"></td>
        <td colspan="2"><input type="reset" value="reset"></td>
    </tr>
</table>
</form>





<?php 
    include('teacher_footer.php');
?>