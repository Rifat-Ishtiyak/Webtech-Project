<?php 
    if(isset($_POST['submit'])){
        if(empty($_POST['name']) || empty($_POST['id']) || empty($_POST['email']) || empty($_POST['phone']) ||  empty($_POST['address']) || empty($_POST['bloodGroup']) || empty($_POST['pass']) || empty($_POST['cPass']) || empty($_POST['dob'])){
            echo"Plaese fill out all the field";
        }
        else{
            //validation check

            $temp_dob=explode('-', $_POST['dob']);

            $target_file = basename($_FILES["profilePic"]["name"]);
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
                echo "only jpeg, jpg & png files are allowed.";
            }
            if ($temp_dob[0]>2015) {
                echo"Please select year before 2015.";
            }
            else{

                $name= $_POST['name'];
                $id=$_POST['id'];
                $email= $_POST['email'];
                $phone = $_POST['phone'];
                $address=$_POST['address'];
                $pass = $_POST['pass'];
                $cPass=$_POST['cPass'];
                $dob=$_POST['dob'];
                move_uploaded_file($_FILES['profilePic']['tmp_name'], '../assets/'.$_FILES['profilePic']['name']);
                $profilePic='../assets/'.$_FILES['profilePic']['name'];
                $bloodGroop=$_POST['bloodGroup'];
               

                $user=['name'=> $name, 'id'=>'S'.$id, 'desig'=>$designation,'email'=> $email, 'bloodGroup'=> $bloodGroop , 'phone'=>$phone, 'address'=>$address, 'pass'=>$pass, 'dob'=>$dob, 'profilePic'=>$profilePic];

                if ($pass!=$cPass) {
                    echo"please check your password and confirm password";
                }
                else{
                    if(filesize('../model/student.json')==0){
                        $json=json_encode($user);
                        $myfile=fopen('../model/student.json', 'w');
                        fwrite($myfile, '['.$json.']');
                    }
                    else{
                        $inp = file_get_contents('../model/student.json');
                        $tempArray = json_decode($inp);
                        array_push($tempArray, $user);
                        $jsonData = json_encode($tempArray);
                        file_put_contents('../model/student.json', $jsonData);
                    }
                    header('location: ../view/login.html');
                }

            }

            
        }
    }

?>