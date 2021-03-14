<?php
session_start(); 
    if(isset($_POST['submit'])){
        if(empty($_POST['id']) ||empty($_POST['name']) ||empty($_POST['email']) ||empty($_POST['bloodGroup'])|| empty($_POST['phone']) ||
        empty($_POST['Qualification']) || empty($_POST['pass']) || empty($_POST['cPass']) ||
        empty($_POST['gender']) || empty($_POST['dob'])||empty($_FILES['profilePic']['name']) ||
        empty($_FILES['profilePic']['type'])||empty($_FILES['profilePic']['size'])||
        empty($_FILES['profilePic']['tmp_name']))
        {
            echo "Please fill out all the field";
        }
        else{
            $error_msg = '';
            
            $id= $_POST['id'];
            $name= $_POST['name'];
            $email= $_POST['email'];
            $phone = $_POST['phone'];
            $pass = $_POST['pass'];
            $cPass=$_POST['cPass'];
            $dob=$_POST['dob'];
            $bloodGroup=$_POST['bloodGroup'];
            $gender=$_POST['gender'];
            $Qualification=$_POST['Qualification'];


            $CapitalLetter = array();
            $SmallLetter = array();
            $NumberRange = array();

            foreach (range('A', 'Z') as $letterC) 
            {
                $CapitalLetter[]=$letterC;
            }
            foreach (range('a', 'z') as $letterS) 
            {
                $SmallLetter[]=$letterS;
            }
            foreach (range('0', '9') as $Number) 
            {
                $NumberRange[]=$Number;
            }
            
            $SpecialCharacters = array('@','!','#','$','%','^','&','*');

            $profilePicFile = basename($_FILES['profilePic']['name']);
            $profilePicExtensions = strtolower(pathinfo($profilePicFile,PATHINFO_EXTENSION));

            if ($profilePicExtensions!="jpg" && $profilePicExtensions!="jpeg") 
            {
                $error_msg .= "<div>Only .jpg or .jpeg files are allowed</div>";
            }
            $temp_dob=explode('-',$_POST['dob']);
            if($temp_dob[0]>2000)
            {
                $error_msg .= "<div>Please select year before 2000</div>";
            }
           
            if($pass!=$cPass)
                $error_msg .= "<div>please check your password and confirm password</div>";
                

            $isThereAnyCapitalLetter = false;
            foreach($CapitalLetter as $c)
            {
                if(strpos($pass, $c) !== false)
                    $isThereAnyCapitalLetter = true;
            }    

            if(!$isThereAnyCapitalLetter)
                $error_msg .= "<div>Password must contain at least 1 Capital letter</div>";
        
            $isThereAnySmallLetter = false;
            foreach($SmallLetter as $c)
            {
                if(strpos($pass, $c) !== false)
                    $isThereAnySmallLetter = true;
            }    

            if(!$isThereAnySmallLetter)
                $error_msg .= "<div>Password must contain at least 1 Small letter</div>";


            $isThereAnyNumber = false;
            foreach($NumberRange as $c)
            {
                if(strpos($pass, $c) !== false)
                    $isThereAnyNumber = true;
            }    
            
              
            if(!$isThereAnyNumber)
            {
                $error_msg .= "<div>Password must contain at least 1 Number</div>";
            }
            $isThereAnyNumberInName = false;
            foreach($NumberRange as $c)
            {
                if(strpos($name, $c) !==false)
                    $isThereAnyNumberInName = true;
            }  

            if($isThereAnyNumberInName)
            {
                $error_msg .= "<div>Name cannot contain Any Number</div>";
            }
            $isThereAnySpecialCharacter =false;
            foreach($SpecialCharacters as $c)
            {
                if(strpos($name,$c)!== false)
                {
                    $isThereAnySpecialCharacter =true;
                }
            }
            if($isThereAnySpecialCharacter)
            {
                $error_msg .= "<div>Name cannot contain Any Special Character</div>";
            }

            if($error_msg != "")
            {
                echo $error_msg;
            }
            else
            {
                    move_uploaded_file($_FILES['profilePic']['tmp_name'], '../Assets/'.$_FILES['profilePic']['name']);
                    $profilePic='../Assets/'.$_FILES['profilePic']['name'];
                    $Teacher=['id'=> $id,'name'=> $name, 'email'=> $email, 'phone'=>$phone, 'pass'=>$pass, 'dob'=>$dob,
                    'profilePic'=>$profilePic, 'gender'=>$gender,'bloodGroup'=>$bloodGroup,
                    'Qualification'=>$Qualification];
                    
                        if(filesize('../Model/Teacher.json')==0){
                            $json=json_encode($Teacher);
                            $myfile=fopen('../Model/Teacher.json', 'w');
                            fwrite($myfile, '['.$json.']');
                        }
                        else{
                            $inp = file_get_contents('../Model/Teacher.json');
                            $tempArray = json_decode($inp);
                            array_push($tempArray, $Teacher);
                            $jsonData = json_encode($tempArray);
                            file_put_contents('../Model/Teacher.json', $jsonData);
                        }
                        header('location: ../View/login.html');
                   
                
            }
        }
    }