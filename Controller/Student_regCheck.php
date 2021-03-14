<?php 
session_start();
    if(isset($_POST['submit'])){
        if(empty($_POST['id']) || empty($_POST['name']) ||empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['pass']) ||
        empty($_POST['cPass']) || empty($_POST['dob']) ||empty($_POST['bloodGroup'])||empty($_POST['gender'])||
        empty($_POST['Class'])||empty($_FILES['profilePicStudent']['name']) ||
        empty($_FILES['profilePicStudent']['type'])||empty($_FILES['profilePicStudent']['size'])||
        empty($_FILES['profilePicStudent']['tmp_name']))
        {
            echo"Plaese fill out all the field"."<br>";
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
            $Class=$_POST['Class'];


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


            $profilePicFile = basename($_FILES['profilePicStudent']['name']);
            $profilePicExtensions = strtolower(pathinfo($profilePicFile,PATHINFO_EXTENSION));

            if ($profilePicExtensions!="jpg" && $profilePicExtensions!="jpeg") 
            {
                $error_msg .= "<div>Only .jpg or .jpeg files are allowed</div>";
            }
            $temp_dob=explode('-',$_POST['dob']);
            if($temp_dob[0]>2016)
            {
                $error_msg .= "<div>Please select year before 2016</div>";
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
            else{
                move_uploaded_file($_FILES['profilePicStudent']['tmp_name'], '../Assets/'.$_FILES['profilePicStudent']['name']);
                $profilePicStudent='../Assets/'.$_FILES['profilePicStudent']['name'];

                $Student=['id'=> $id,'name'=> $name, 'email'=> $email, 'phone'=>$phone, 'pass'=>$pass, 'dob'=>$dob,
                    'profilePicStudent'=>$profilePicStudent, 'gender'=>$gender,'bloodGroup'=>$bloodGroup,
                    'Class'=>$Class];
                    if(filesize('../Model/Student.json')==0){
                        $json=json_encode($Student);
                        $myfile=fopen('../Model/Student.json', 'w');
                        fwrite($myfile, '['.$json.']');
                    }
                    else{
                        $inp = file_get_contents('../Model/Student.json');
                        $tempArray = json_decode($inp);
                        array_push($tempArray, $Student);
                        $jsonData = json_encode($tempArray);
                        file_put_contents('../Model/Student.json', $jsonData);
                    }
                    header('location: ../View/login.html');
                }
                
            }
        
    }
     
?>