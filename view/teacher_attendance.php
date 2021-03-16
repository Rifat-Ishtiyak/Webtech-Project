
<?php 
    include('teacher_header.php');
?>

<h2>Take Attendance</h2>
<a href=""></a>
<fieldset style="width:400px">
    <legend>Please select your Subject/Section:</legend>
        <form action="../controller/teacher_upload_check.php" method="POST" enctype="multipart/form-data">
            <?php 
                if(isset($_COOKIE['class0'])){
                                                                
                    echo '<a href="../view/teacher_attendance_class.php">'.$_COOKIE['subject0'].'</a> | ';
                }
                if(isset($_COOKIE['class1'])){
                                                                
                    echo '<a href="../view/teacher_attendance_class.php">'.$_COOKIE['subject1'].'</a> | ';
                }
                if(isset($_COOKIE['class2'])){
                                                                
                    echo '<a href="../view/teacher_attendance_class.php">'.$_COOKIE['subject2'].'</a> | ';
                }
                if(isset($_COOKIE['class3'])){
                                                                
                    echo '<a href="../view/teacher_attendance_class.php">'.$_COOKIE['subject3'].'</a>  ';
                }
            ?>   
            <br>

        </form>
</fieldset>



<?php 
    include('teacher_footer.php');
?>