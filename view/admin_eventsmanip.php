<?php 
        include('admin_header.php');
    ?>
        <table border="1" align="center" height="450px" width ="">
            <tr>
                <td align="left" width="375px">
                    <form method="POST" action="../Controller/Event_validation.php" enctype="multipart/form-data">
                        <fieldset>
                            <legend>Events</legend>
                            <table>
                                <tr>
                                    <td>Event Date</td>
                                    <td>:
                                        <input type="date" name="EventDate" id="">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2"><hr></td>
                                </tr>
                                <tr>
                                    <td>Time</td>
                                    <td>:
                                        <input type="time" name="EventTime" id="">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2"><hr></td>
                                </tr>
                                <tr>
                                    <td>Event Description</td>
                                    <td>:
                                        <textarea rows="5" cols="50" name="EDescription"></textarea>
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