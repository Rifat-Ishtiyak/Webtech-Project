<?php 
    session_start();
    if (isset($_POST['submit'])) {
        if (empty($_POST['student1']) || empty($_POST['student2']) || empty($_POST['student3']) 
        || empty($_POST['student4']) || empty($_POST['student5']) || empty($_POST['student6']) 
        || empty($_POST['student7']) || empty($_POST['student8']) || empty($_POST['student9']) 
        || empty($_POST['student9']) || empty($_POST['student10']) || empty($_POST['student11']) 
        || empty($_POST['student12']) || empty($_POST['student13']) || empty($_POST['student14']) 
        || empty($_POST['student15']) || empty($_POST['student16'])) {
            echo"null value found..";
        }
        else{
            $student1=$_POST['student1'];
            $student2=$_POST['student2'];
            $student3=$_POST['student3'];
            $student4=$_POST['student4'];
            $student5=$_POST['student5'];
            $student6=$_POST['student6'];
            $student7=$_POST['student7'];
            $student8=$_POST['student8'];
            $student9=$_POST['student9'];
            $student10=$_POST['student10'];
            $student11=$_POST['student11'];
            $student12=$_POST['student12'];
            $student13=$_POST['student13'];
            $student14=$_POST['student14'];
            $student15=$_POST['student15'];
            $student16=$_POST['student16'];

            $_SESSION['student1']=$student1;
            $_SESSION['student2']=$student2;
            $_SESSION['student3']=$student3;
            $_SESSION['student4']=$student4;
            $_SESSION['student5']=$student5;
            $_SESSION['student6']=$student6;
            $_SESSION['student7']=$student7;
            $_SESSION['student8']=$student8;
            $_SESSION['student9']=$student9;
            $_SESSION['student10']=$student10;
            $_SESSION['student11']=$student11;
            $_SESSION['student12']=$student12;
            $_SESSION['student13']=$student13;
            $_SESSION['student14']=$student14;
            $_SESSION['student15']=$student15;
            $_SESSION['student16']=$student16;
            
            header('location: ../view/teacher_dashboard.php');
        }
    }
    else{
        echo"error";
    }

?>