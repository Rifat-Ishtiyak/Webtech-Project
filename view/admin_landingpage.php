<?php 
        include('admin_header.php');
        session_start();
    ?>

                <table border="0">
                    <tr>
                        <td align="center" width="100px"></td>
                        <td align="center" width="500px">
                            <form action="" method="">
                                <fieldset>
                                    <legend>Profile</legend>
                                    <h4 align="left">Name:<?php echo $_SESSION['name'] ?><hr></h4><br>
                                        <h4 align="left">ID:<?php echo $_SESSION['id'] ?><hr></h4><br>
                                            <h4 align="left">Email:<?php echo $_SESSION['email'] ?><hr></h4><br>
                                                <h4 align="left">Gender:<?php echo $_SESSION['gender'] ?><hr></h4><br>
                                                <h4 align="left">Date of Birth:<?php echo $_SESSION['dob'] ?><hr></h4><br>
                                                <h4 align="left">Designation:<?php echo $_SESSION['desig'] ?><hr></h4><br>
                                                <h4 align="left">BloodGroup:<?php echo $_SESSION['bloodGroup'] ?><hr></h4><br>
                                                <h4 align="left">Phone No:<?php echo $_SESSION['phone'] ?><hr></h4><br>
                                                <h4 align="left">Address:<?php echo $_SESSION['address'] ?><hr></h4><br>
                                                <h4 align="left">qualification:<?php echo $_SESSION['qualification'] ?><hr></h4><br>
                                                    
                                                </td>
                        <td><h3><b>Welcome <?php echo $_SESSION['name'] ?></b></h3><br>
                            <img src=<?php echo $_SESSION['profilePic'] ?>width="250px" height="250px"><br>
                            <center>
                        <a href="ChangeProfile.html">Change</a></td>
                            </center>
                                </fieldset>
                            </form>
                        </td>
                    </tr>
                </table>


<?php 
        include('admin_footer.php');
    ?>