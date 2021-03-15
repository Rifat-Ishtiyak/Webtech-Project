<?php 
        include('admin_header.php');
        session_start();
    ?>
                <table border="1" width="100%">
                    <tr>
                        <td>ID</td>
                        <td>NAME</td>
                        <td>EMAIL</td>
                        <td>BLOODGROUP</td>
                        <td>PHONE</td>
                        <td>GENDER</td>
                        <td>CLASS</td>
                        <td>DATE OF BIRTH</td>
                        <td>PROFILE PIC</td>
                    </tr>
                    <?php
                        $Students=json_decode(file_get_contents('../model/Student.json'),true);
                        $i=1;
                        $Type='S';
                        foreach($Students as $Student)
                        {
                            echo '<tr>
                            <td>'.$Type.''.$i++.'</td>
                            <td>'.$Student['name'].'</td>
                            <td>'.$Student['email'].'</td>
                            <td>'.$Student['bloodGroup'].'</td>
                            <td>'.$Student['phone'].'</td>
                            <td>'.$Student['gender'].'</td>
                            <td>'.$Student['Class'].'</td>
                            <td>'.$Student['dob'].'</td>
                            <td>'.$Student['profilePicStudent'].'</td>
                            </tr>';
                        }
                    ?>
                </table>

    <?php 
    include('admin_footer.php');
    session_start();
    ?>