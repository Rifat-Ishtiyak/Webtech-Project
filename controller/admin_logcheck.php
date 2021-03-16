<?php

	session_start();

	if(isset($_POST['submit'])){
        $data = json_decode(file_get_contents('../model/admin.json'),true);
        if(empty($_POST['id']) || empty($_POST['pass']))
        {
            echo "Please fill out all the fields";
        }
        else{
            $f=0;
			foreach ($data as $key1 => $value1) {
				if ($data[$key1]["id"]==$_POST['id'] and $data[$key1]["pass"]==$_POST['pass']) {
					$f=1;
					$_SESSION['name']=$data[$key1]["name"];
					$_SESSION['id']=$data[$key1]["id"];
                    $_SESSION['email']=$data[$key1]["email"];
                    $_SESSION['desig']=$data[$key1]["desig"];
                    $_SESSION['gender']=$data[$key1]["gender"];
                    $_SESSION['bloodGroup']=$data[$key1]["bloodGroup"];
                    $_SESSION['phone']=$data[$key1]["phone"];
                    $_SESSION['address']=$data[$key1]["address"];
                    $_SESSION['dob']=$data[$key1]["dob"];
                    $_SESSION['qualification']=$data[$key1]["qualification"];
                    $_SESSION['profilePic']=$data[$key1]["profilePic"];
				}

			}
			if($f==1){
				$_SESSION['flag'] = true;
				$name=$_POST['username'];
				header('location: ../view/admin_landingpage.php');
			}
			else{
				echo"invaild user";
			}
        
        }
    }
    ?>