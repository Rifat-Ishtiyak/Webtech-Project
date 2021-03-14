<?php
session_start(); 
if(isset($_POST['submit']))
{
    if(empty($_POST['EventDate']) || empty($_POST['EventTime'])|| empty($_POST['EDescription']))
    {
        echo 'Null value found';
    }
    else
    {
        $eventdate =$_POST['EventDate'];
        $eventtime =$_POST['EventTime'];
        $edescription =$_POST['EDescription'];
        
        
        $events=['EventDate'=>$eventdate,'EventTime'=>$eventtime,'EDescription'=>$edescription,];

        if(filesize('../Model/events.json')==0){
            $json=json_encode($events);
            $myfile=fopen('../Model/events.json', 'w');
            fwrite($myfile, '['.$json.']');
        }
        else{
            $inp = file_get_contents('../Model/events.json');
            $tempArray = json_decode($inp);
            array_push($tempArray, $calender);
            $jsonData = json_encode($tempArray);
            file_put_contents('../Model/events.json', $jsonData);
        }
        header('location: ../Controller/index.php');
           
    }
}