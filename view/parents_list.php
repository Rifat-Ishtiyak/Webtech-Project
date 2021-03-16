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
                        <td>STUDENT ID</td>
                        <td>DATE OF BIRTH</td>
                        <td>PROFILE PIC</td>
                    </tr>
                    <?php
                        $Parents=json_decode(file_get_contents('../Model/Parents.json'),true);
                        $i=1;
                        $Type='P';
                        foreach($Parents as $Parent)
                        {
                            echo '<tr>
                            <td>'.$Type.''.$i++.'</td>
                            <td>'.$Parent['name'].'</td>
                            <td>'.$Parent['email'].'</td>
                            <td>'.$Parent['bloodGroup'].'</td>
                            <td>'.$Parent['phone'].'</td>
                            <td>'.$Parent['gender'].'</td>
                            <td>'.$Parent['studentId'].'</td>
                            <td>'.$Parent['dob'].'</td>
                            <td>'.$Parent['profilePicParents'].'</td>
                            </tr>';
                        }
                    ?>
                </table>

                <?php 
    include('admin_footer.php');
    session_start();
    ?>