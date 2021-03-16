<?php 
        include('admin_header.php');
        session_start();
    ?>
                <table border="1" width="100%">
                    
                    <tr>
                        <td>CLASS</td>
                        <td>CLASS START TIME</td>
                        <td>CLASS START TIME</td>
                        <td>TEACHER ID</td>
                        <td>SUBJECT</td>
                    </tr>
                    <?php
                        $classdatas=json_decode(file_get_contents('../Model/class_assign.json'),true);
                        foreach($classdatas as $classdata)
                        {
                            echo '<tr>
                            <td>'.$classdata['Class'].'</td>
                            <td>'.$classdata['classStartTime'].'</td>
                            <td>'.$classdata['classEndTime'].'</td>
                            <td>'.$classdata['Teacher_id'].'</td>
                            <td>'.$classdata['subject'].'</td>
                            </tr>';
                        }
                    ?>
                </table>

                

                <?php 
        include('admin_footer.php');
        session_start();
    ?>