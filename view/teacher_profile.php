<?php
	include('teacher_header.php');

    $inp = file_get_contents('../model/teacher.json');
	$temp = json_decode($inp, true);

    foreach ($temp as $key1 => $value1) {
        if ($temp[$key1]["name"]==$name) {
            $namep=$temp[$key1]["name"];
            $id=$temp[$key1]["id"];
            $email=$temp[$key1]["email"];
            $bloodGroup=$temp[$key1]["bloodGroup"];
            $phone=$temp[$key1]["phone"];
            $dob=$temp[$key1]["dob"];
            $picture=$temp[$key1]["profilePic"];
            $address=$temp[$key1]["address"];
            $designation=$temp[$key1]["desig"];
            $qualification=$temp[$key1]["qualification"];

        }
    }


?>


                <table border="0" width="80%">
                    <tr>
                        <td>Name </td>
                        <td>: <?php echo $namep ?></td>
                        <td rowspan=8 align="center">
                            <img src=<?php echo $picture ?> height="200px" weidth="200px" alt=""><br>
                       </td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                        <td>ID </td>
                        <td>: <?php echo $id ?></td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                        <td>Designation </td>
                        <td>: <?php echo $designation ?></td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>

                    <tr>
                        <td>Email </td>
                        <td>: <?php echo $email ?></td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                        <td>Blood Group </td>
                        <td>: <?php echo $bloodGroup ?></td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                        <td>Phone </td>
                        <td>: <?php echo $phone ?></td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                        <td>Address </td>
                        <td>: <?php echo $address ?></td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                        <td>Date of Birth </td>
                        <td>: <?php echo $dob ?></td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                        <td>Qualifiaction </td>
                        <td>: <?php echo $qualification ?></td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    
                </table>
    <?php 
        include('teacher_footer.php');
    ?>