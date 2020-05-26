<?php
require_once '../controller/studentController.php';

$studid = $_GET['studid'];

$student = new studentController();
$data = $student->viewUser($studid);

if(isset($_POST['update'])){
    $student->editUser();
}
?>
<html>
    <head>
        <title>CRUD</title>
    </head>
    <body>
    <center><h2>Edit Student</h2>
        <br>
        <form action="" method="POST">
        <table>
            <?php
            foreach($data as $row){
                ?>
            
            <tr>
                <td>NAME</td>
                <td><input type="text" name="name" value="<?=$row['studname']?>" readonly></td>
            </tr>
            <tr>
                <td>STUDENT ID</td>
                <td><input type="text" name="studID" value="<?=$row['studidd']?>" readonly></td>
            </tr>
            <tr>
                <td>TELEPHONE NUMBER</td>
                <td><input type="text" name="phone" value="<?=$row['phone']?>" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" required></td>
            </tr>
            <tr>
                <td>RESIDENCE</td>
                <td><input type="radio" name="residence" value="Residence College" <?=$row['residence']=="Residence College" ? "checked" : ""?> required>&nbsp;Residence College
                    <br>
                    <input type="radio" name="residence" value="Outside Campus" <?=$row['residence']=="Outside Campus" ? "checked" : ""?> required>&nbsp;Outside Campus</td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="update" value="UPDATE">&nbsp;<input type="button" onclick="location.href='view.php?studID=<?=$row['studidd']?>'" value="BACK"></td>
            </tr>
            <?php } ?>
        </table>
       </form>
    </center>
    </body>
</html>