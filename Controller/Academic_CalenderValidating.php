<?php
session_start(); 
if(isset($_POST['submit']))
{
    if(empty($_FILES['AcademicCalender']['name']) ||
    empty($_FILES['AcademicCalender']['type'])||empty($_FILES['AcademicCalender']['size'])||
    empty($_FILES['AcademicCalender']['tmp_name']))
    {
        echo 'Please Upload a valid file First';
    }
    else
    {
        $error_msg = '';
        $calenderfile = basename($_FILES['AcademicCalender']['name']);
        $calenderfileExtensions = strtolower(pathinfo($calenderfile,PATHINFO_EXTENSION));

        if ($calenderfileExtensions!="jpg" && $calenderfileExtensions!="jpeg" && $calenderfileExtensions!="pdf") 
        {
            $error_msg .= "<div>Only .pdf, .jpg or .jpeg files are allowed</div>";
        }
    
        if($error_msg != "")
        {
            echo $error_msg;
        }

        else
        {
            move_uploaded_file($_FILES['AcademicCalender']['tmp_name'], '../Assets/'.$_FILES['AcademicCalender']['name']);
            $AcademicCalender='../Assets/'.$_FILES['AcademicCalender']['name'];

            $calender=['AcademicCalender'=>$AcademicCalender];

            if(filesize('../Model/academicCalender.json')==0){
                $json=json_encode($calender);
                $myfile=fopen('../Model/academicCalender.json', 'w');
                fwrite($myfile, '['.$json.']');
            }
            else{
                $inp = file_get_contents('../Model/academicCalender.json');
                $tempArray = json_decode($inp);
                array_push($tempArray, $calender);
                $jsonData = json_encode($tempArray);
                file_put_contents('../Model/academicCalender.json', $jsonData);
            }
            header('location: ../Controller/index.php');
        }   
    }
}