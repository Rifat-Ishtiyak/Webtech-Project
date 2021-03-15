<?php 
        include('admin_header.php');
        session_start();
    ?>
            <table border="1" align="center" height="450px" width ="">
            <tr>
                <td align="left" width="375px">
                    <form method="" action="" enctype="multipart/form-data">
                        <fieldset>
                            <legend>Exams</legend>
                            <table>
                                <tr>
                                    <td>Exam Date</td>
                                    <td>:
                                        <input type="date" name="ExamDate" id="">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2"><hr></td>
                                </tr>
                                <tr>
                                    <td>Exam Time</td>
                                    <td>:
                                        <input type="time" name="ExamTime" id="">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2"><hr></td>
                                </tr>
                                <tr>
                                    <td>Exam notice</td>
                                    <td>:
                                        <textarea rows="5" cols="50" name="ExamDescription"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Exam routine</td>
                                    <td>:
                                        <input type="file" name="Examroutine" id="">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2"><hr></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><hr></td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="submit" name="submit" id="">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2"><hr></td>
                                </tr>
                            </table>
                        </fieldset>
                    </form>
            </tr>
        </table>

        
    
<?php 
    include('admin_footer.php');
?>