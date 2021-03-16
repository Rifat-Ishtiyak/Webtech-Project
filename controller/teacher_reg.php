<?php 
    if(isset($_POST['submit'])){
        if(empty($_POST['name']) || empty($_POST['id']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['desig']) || empty($_POST['address']) || empty($_POST['bloodGroup']) || empty($_POST['pass']) || empty($_POST['cPass']) || empty($_POST['dob'])){
            echo"Plaese fill out all the field <br>";
        }
        else{
            //validation check 1
            
            $temp_dob=explode('-', $_POST['dob']);

            $target_file = basename($_FILES["profilePic"]["name"]);
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
                echo "only jpeg, jpg & png files are allowed.";
            }
            if ($temp_dob[0]>2000) {
                echo"Please select year before 2000. <br>";
            }
            else{
                $name= $_POST['name'];
                $id=$_POST['id'];
                $designation=$_POST['desig'];
                $email= $_POST['email'];
                $phone = $_POST['phone'];
                $address=$_POST['address'];
                $pass = $_POST['pass'];
                $cPass=$_POST['cPass'];
                $dob=$_POST['dob'];
                move_uploaded_file($_FILES['profilePic']['tmp_name'], '../assets/'.$_FILES['profilePic']['name']);
                $profilePic='../assets/'.$_FILES['profilePic']['name'];
                $bloodGroop=$_POST['bloodGroup'];
                $qualification=$_POST['qualification'];
                $user=['name'=> $name, 'id'=>'T'.$id, 'desig'=>$designation,'email'=> $email, 'bloodGroup'=> $bloodGroop , 'phone'=>$phone, 'address'=>$address, 'pass'=>$pass, 'dob'=>$dob, 'profilePic'=>$profilePic, 'qualification'=>$qualification ];
                
                //validation check 2
                $error=false;

                if(strlen($name)<3){
                    echo "name must contain at least 3 charecters<br>";
                    $error=true;
                }
                if(strpos($name, '!') || strpos($name, '@') || strpos($name, '#') || strpos($name, '%') || strpos($name, '&')){
                    echo "name cannot contain any special charecter<br>";
                    $error=true;
                }
                if(strlen($phone)<11 || strlen($phone)>11 ){
                    echo "phone no. must contain 11 digit <br>";
                    $error=true;
                }
                if(strlen($pass)<6){
                    echo "password must contain at least 6 charecters <br>";
                    $error=true;
                }
                if(!strpos($pass, '0') and !strpos($pass, '1') and !strpos($pass, '2') and !strpos($pass, '3') and !strpos($pass, '4') and !strpos($pass, '5') and !strpos($pass, '6') and !strpos($pass, '7') and !strpos($pass, '8') and !strpos($pass, '9')){
                    echo "password must contain atleast one number  <br>";
                    $error=true;
                }
                
                if ($pass!=$cPass) {
                    echo"please check your password and confirm password<br>";
                    $error=true;
                }



                elseif($error==false){
                    if(filesize('../model/teacher.json')==0){
                        $json=json_encode($user);
                        $myfile=fopen('../model/teacher.json', 'w');
                        fwrite($myfile, '['.$json.']');
                    }
                    else{
                        $inp = file_get_contents('../model/teacher.json');
                        $tempArray = json_decode($inp);
                        array_push($tempArray, $user);
                        $jsonData = json_encode($tempArray);
                        file_put_contents('../model/teacher.json', $jsonData);
                    }
                    header('location: ../view/login.html');
                }

            }

            
        }
    }

?>