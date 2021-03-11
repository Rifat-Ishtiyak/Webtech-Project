<?php 
    if (isset($_POST['submit'])) {
        if (empty($_POST['id'] || $_POST['newP'])) {
            echo"fields cannot be empty";
        }
        else{
            $id=$_POST['id'];
            $new_pass=$_POST['newP'];
    
            $inp = file_get_contents('../model/teacher.json');
            $temp = json_decode($inp, true);

            foreach ($temp as $key1 => $value1) {
				if ($temp[$key1]["id"]==$_POST['id']) {
					$temp[$key1]["pass"]=$new_pass;
                   // array_push($temp, $temp[$key1]["pass"]);
                    $jsonData = json_encode($temp);
                    file_put_contents('../model/teacher.json', $jsonData);
                    header('location: teacher_logout.php');
				}
			}
        }

    }

?>