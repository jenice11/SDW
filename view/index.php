<?php
require_once '../controller/studentController.php';

$student = new studentController();
$data = $student->viewAll();

if(isset($_POST['delete'])){
    $student->delete();
}

?>
<html>
<head>
   <title>CRUD</title>
</head>
<body>
  <center><h2>List Of Student</h2>
     <br>
     Click <a href="addStudent.php">here</a> to add student.
     <br>
      <table>
            <thead>
            <th>No</th>
            <th>Name</th>
            <th>ID</th>
            <th>Action</th>
            </thead>
            <?php
            $i = 1;
            foreach($data as $row){
               echo "<tr>"
                . "<td>".$i."</td>"
                       . "<td>".$row['studname']."</td>"
                       . "<td>".$row['studidd']."</td>";
               ?>
            <td><form action="" method="POST">
                    <input type="button" onclick="location.href='view.php?studID=<?=$row['studidd']?>'" value="VIEW">&nbsp;
                    <input type="hidden" name="studID" value="<?=$row['studidd']?>"><input type="submit" name="delete" value="DELETE">
                </form></td>
              <?php
              $i++;
             echo "</tr>";
            }
            ?>
        </table>
    </center>
</body>
</html>

