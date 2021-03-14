<?php
    session_start();
    
    if (isset($_POST['submit'])) {

        $inp = file_get_contents('../model/teacher.json');
		$temp = json_decode($inp, true);


        if (empty($_POST['id']) || empty($_POST['pass'])) {
            echo"Please fill out all the fields"; 
        }
        else{
            $f=0;
			foreach ($temp as $key1 => $value1) {
				if ($temp[$key1]["id"]==$_POST['id'] and $temp[$key1]["pass"]==$_POST['pass']) {
					$f=1;
					$_SESSION['nam']=$temp[$key1]["name"];
					$_SESSION['id']=$temp[$key1]["id"];
				}

			}
			if($f==1){
				$_SESSION['flag'] = true;
				$name=$_POST['username'];
				
				//header('location: ../view/teacher_dashboard.php');
				header('location: ../controller/teacher_class_schedule.php');
			}
			else{
				echo"invaild user";
			}
        }
    }

?>