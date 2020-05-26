<?php
require_once '../controller/studentController.php';

$studid = $_GET['studID'];

$student = new studentController();
$data = $student->viewUser($studid); 
?>
<html>
    <head>
        <title>CRUD</title>
    </head>
    <body>
    <center><h2>View Student</h2>
        <br>
        <table>
            <?php
            foreach($data as $row){
            ?> 
            <tr>
                <td>NAME</td>
                <td><?=$row['studname']?></td>
            </tr>
            <tr>
                <td>STUDENT ID</td>
                <td><?=$row['studidd']?></td>
            </tr>
            <tr>
                <td>TELEPHONE NUMBER</td>
                <td><?=$row['phone']?></td>
            </tr>
            <tr>
                <td>RESIDENCE</td>
                <td><?=$row['residence']?></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="button" onclick="location.href='edit.php?studid=<?=$row['studidd']?>'" value="EDIT">&nbsp;
                    <input type="button" onclick="location.href='index.php'" value="BACK"></td>
            </tr>
            <?php } ?>
        </table>
    </center>
    </body>
</html>