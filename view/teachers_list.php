<?php 
        include('../view/admin_header.php');
    ?>
                <table border="1" width="100%">
                    <tr>
                        <td>ID</td>
                        <td>NAME</td>
                        <td>EMAIL</td>
                        <td>BLOODGROUP</td>
                        <td>PHONE</td>
                        <td>GENDER</td>
                        <td>ADDRESS</td>
                        <td>QUALIFICATION</td>
                        <td>DATE OF BIRTH</td>
                        <td>DESIGNATION</td>
                        <td>PROFILE PIC</td>
                    </tr>
                    <?php
                        $teachers=json_decode(file_get_contents('../Model/teacher.json'),true);
                        foreach($teachers as $teacher)
                        {
                            echo '<tr>
                            <td>'.$teacher['id'].'</td>
                            <td>'.$teacher['name'].'</td>
                            <td>'.$teacher['email'].'</td>
                            <td>'.$teacher['bloodGroup'].'</td>
                            <td>'.$teacher['phone'].'</td>
                            <td>'.$teacher['gender'].'</td>
                            <td>'.$teacher['address'].'</td>
                            <td>'.$teacher['qualification'].'</td>
                            <td>'.$teacher['dob'].'</td>
                            <td>'.$teacher['desig'].'</td>
                            <td>'.$teacher['profilePic'].'</td>
                            </tr>';
                        }
                    ?>
                </table>
                <?php 
        include('../view/admin_footer.php');
    ?>