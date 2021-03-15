<?php
    if(isset($_POST['submit']))
    {
        if(empty($_POST['Class']) || empty($_POST['classStartTime']) || empty($_POST['classEndTime']) ||
        empty($_POST['Teacher_id']) || empty($_POST['subjectName']))
        {
            echo 'Please fill out all the field';
        }
        else
        {
            $error_mssag='';

            $Class=$_POST['Class'];
            $classStartTime=$_POST['classStartTime'];
            $classEndTime=$_POST['classEndTime'];
            $Teacher_id=$_POST['Teacher_id'];
            $Subject=$_POST['subjectName'];

            

            $startTime = strtotime(date('Y-m-d').' '.$classStartTime)/60;
            $endTime = strtotime(date('Y-m-d').' '.$classEndTime)/60;
            
            if(($endTime-$startTime)>50)
            {
                $error_mssag.="<div>No class can be more than 50 minutes</div>";
            }
            if($error_mssag != "")
            {
                echo $error_mssag;
            }
            else{
                
                    $ClassInfo= ['Class'=> $Class, 'classStartTime'=>$classStartTime, 'classEndTime'=>$classEndTime, 'Teacher_id'=>$Teacher_id,
                    'subject'=>$Subject];
                    if(filesize('../Model/class_assign.json')==0){
                        $json=json_encode($ClassInfo);
                        $myfile=fopen('../Model/class_assign.json', 'w');
                        fwrite($myfile, '['.$json.']');
                    }
                    else{
                        $inp = file_get_contents('../Model/class_assign.json');
                        $tempArray = json_decode($inp);
                        array_push($tempArray, $ClassInfo);
                        $jsonData = json_encode($tempArray);
                        file_put_contents('../Model/class_assign.json', $jsonData);
                    }
                    header('location: ../view/classesInfo_list.php');
                
                
            }
        }
    }
?>