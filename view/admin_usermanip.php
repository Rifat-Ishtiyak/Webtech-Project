<?php 
        include('admin_header.php');
    ?>

                <table border="1">
                    <tr>
                        <td align="left" width="375px">
                            <h2><u>Teacher</u></h2>
                            <a href="../view/admin_addteacher.php"><button>Add Teacher</button></a><br>
                            <a href="../view/teachers_list.php"><button>Teachers List</button></a><br>
                            <a href="TeacherInfoUpdate.html"><button>Teacher Info Update</button></a><br>
                            <a href="ClassesSections.html"><button>Classes</button></a><br>
                            
                        </td>
                        <td align="left"  width="375px">
                            <h2><u>Students</u></h2>
                            <a href="../view/admin_addStudents.php"><button>Add Students</button></a><br>
                            <a href="../view/Students_List.php"><button>Students List</button></a><br>
                            <a href="StudentsInfoUpdate.html"><button>Students Info Update</button></a><br>
                        </td>
                        <td align="left" width="375px">
                            <h2><u>Parents</u></h2>
                            <a href="../view/admin_addparents.php"><button>Add Parents</button></a><br>
                            <a href="../view/Parents_List.php"><button>Parents List</button></a><br>
                            <a href="ParentsInfoUpdate.html"><button>Parents Info Update</button></a><br>
                        </td>
                    </tr>
                </table>
<?php 
        include('admin_footer.php');
    ?>