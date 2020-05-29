<?php
require_once '../controller/studentController.php';

$student = new studentController();

if(isset($_POST['add'])){
    $student->add();
}

?>
<html>
<head>
    <title>CRUD</title>
</head>
<body>
    <center><h2>Add Student</h2>
        <br>
        <form action="" method="POST">
            <table>
                
                <tr>
                    <td>NAME</td>
                    <td><input type="text" name="name" required></td>
                </tr>
                <tr>
                    <td>STUDENT ID</td>
                    <td><input type="text" name="studID" required></td>
                </tr>
                <tr>
                    <td>TELEPHONE NUMBER</td>
                    <td><input type="text" name="phone"  onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" required></td>
                </tr>
                <tr>
                    <td>RESIDENCE</td>
                    <td><input type="radio" name="residence" value="Residence College" required>&nbsp;Residence College
                        <br>
                        <input type="radio" name="residence" value="Outside Campus" required>&nbsp;Outside Campus</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="add" value="ADD">&nbsp;<input type="reset" value="RESET"></td>
                    </tr>
                </table>
                Click <a href="index.php">here</a> to going back to home
            </form>
        </center>
    </body>
    </html>
