<?php 
        include('admin_header.php');
    ?>
                <table border="0" width="100%">
                    <tr>
                        <td width="300px"></td>
                        <td>
                            <form method="POST" action="../controller/admin_regcheck.php" enctype="multipart/form-data">
                                <fieldset style="background-color:lemonchiffon;">
                                    <legend><b>Admin Regetration</b></legend>
                                    <table border="0">
                                    <tr>
                                <td>Name</td>
                                <td>:
                                    <input type="text" name="name" id="">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><hr></td>
                            </tr>
                            <tr>
                                <td>ID</td>
                                <td>: 
                                    <input type="text" name="id" id="">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><hr></td>
                            </tr>
                            <tr>
                                <td>Designation</td>
                                <td>:
                                    <input type="text" name="desig" id="">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><hr></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:
                                    <input type="email" name="email" id=""> <button title="sample@example.com"><b> i</b></button>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><hr></td>
                            </tr>
                            <tr>
                                <td>Blood Group</td>
                                <td>:
                                    <select name="bloodGroup" id="">
                                        <option value=""></option>
                                        <option value="A+">A+</option>
                                        <option value="B+">B+</option>
                                        <option value="AB+">AB+</option>
                                        <option value="O+">O+</option>
                                        <option value="A-">A-</option>
                                        <option value="AB-">AB-</option>
                                    </select>
                                    
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><hr></td>
                            </tr>
                            <tr>
                                <td>Phone</td>
                                <td>:
                                    <input type="tel" name="phone" id=""> 
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><hr></td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td>:
                                    <input type="text" name="address" id=""> 
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><hr></td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td>:
                                    <input type="password" name="pass" id="">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><hr></td>
                            </tr>
                            <tr>
                                <td>Confirm Password</td>
                                <td>:
                                    <input type="password" name="cPass" id="">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><hr></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <fieldset>
                                        <legend>Gender</legend>
                                        <input type="radio" name="gender" value="Male" id="">Male
                                        <input type="radio" name="gender" value="Female" id="">Female
                                        <input type="radio" name="gender" value="Other" id="">Other
                                    </fieldset>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><hr></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <fieldset>
                                        <legend>Date Of Birth</legend>
                                        <input type="date" name="dob" id="">
                                    </fieldset>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><hr></td>
                            </tr>
                            
                            <tr>
                                <td colspan="2">
                                    <fieldset>
                                        <legend>Picture Upload</legend>
                                     <input type="file" name="profilePic" id="">
                                    </fieldset>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><hr></td>
                            </tr>
                            <tr>
                                <td>Qualification</td>
                                <td>
                                    <textarea name="qualification" id="" ></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><hr></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input type="submit" name="submit" value="Submit">
                                    <input type="reset" value="reset">
                                </td>
                                        </tr>
                                    </table>
                                </fieldset>
                            </form>
                            <td width="300px"></td>
                        </td>
                        <td width="100px"></td>
                    </tr>
            </table>
            <?php 
        include('admin_footer.php');
    ?>