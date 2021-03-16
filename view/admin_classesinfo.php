<?php 
        include('admin_header.php');
    ?>
        <table border="1" align="center">
            <tr>
                <td align="left" width="375px">
                    <form method="POST" action="../Controller/ClassInfo_check.php">
                        <fieldset>
                            <legend>Classes Info</legend>
                            <table>
                                <tr>
                                    <td>Class</td>
                                    <td>:
                                        <select name="Class" id="">
                                            <option value=""></option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                        </select>
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="2"><hr></td>
                                </tr>

                                <tr>
                                    <td>
                                        Class Start Time
                                    </td>

                                    <td>:
                                        <input type="time" name="classStartTime">
                                    </td>

                                </tr>

                                <tr>
                                    <td colspan="2"><hr></td>
                                </tr>

                                <tr>
                                    <td>
                                        Class End Time
                                    </td>

                                    <td>:
                                        <input type="time" name="classEndTime">
                                    </td>

                                </tr>

                                <tr>
                                    <td colspan="2"><hr></td>
                                </tr>

                                <tr>
                                    <td>
                                        Teacher_id:
                                    </td>

                                    <td>:
                                        <input type="text" name="Teacher_id">
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="2"><hr></td>
                                </tr>
                                <tr>
                                    <td>
                                        Subject name
                                    </td>
                                    <td>:
                                        <input type="text" name="subjectName">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2"><hr></td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="submit" name="submit" id="">
                                    </td>
                                </tr>
                            </table>
                        </fieldset>
                    </form>
            </tr>
        </table>

    <?php 
        include('admin_footer.php');
    ?>