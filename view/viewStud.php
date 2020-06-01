<?php
require_once '../controller/studentController.php';

$studIC = base64_decode($_GET['studIC']);

$student = new studentController();
$data = $student->viewUser($studIC); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>I-Hadir || View Student</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- jsGrid -->
  <link rel="stylesheet" href="../../../plugins/jsgrid/jsgrid.min.css">
  <link rel="stylesheet" href="../../plugins/jsgrid/jsgrid-theme.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">




</head>
<body class="hold-transition sidebar-mini">
  <div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="addStud.php" class="nav-link">Add Student</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i
            class="fas fa-th-large"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="../images/icon/IH-W-1.png" alt="I-Hadir Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">I-Hadir</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Student Profile
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php" class="nav-link active">
                  <i class="fas fa-list nav-icon"></i>
                  <p>Student List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="addStud.php" class="nav-link">
                  <i class="fas fa-plus-circle nav-icon"></i>
                  <p>Add Student</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">

          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">View Student</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">

          <div class="col-md-12">
            <?php
            foreach($data as $row){
              ?>
              <!-- Student Information -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Student's Information</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <div class="row">
                    <div class="card-body p-0">
                      <table class="table table-sm table-borderless" width="100%" >
                        <col style="width:13%">
                        <col style="width:37%">
                        <col style="width:13%">
                        <col style="width:37%">
                        <tbody>
                          <tr>
                            <td><label>Name: </label></td>
                            <td><?=$row['studName']?></td>
                            <td rowspan="5"><label>Photo: </label></td>
                            <td rowspan="5"><img src="data:image/jpg;base64,<?php echo base64_encode(file_get_contents($row['studPhoto']))?>" width="200px" height="180px"></td>
                          </tr>
                          <tr>
                            <td><label>IC Number: </label></td>
                            <td><?=$row['studIC']?></td>
                          </tr>
                          <tr>
                            <td><label>Tel No: </label></td>
                            <td><?=$row['studPhone']?></td>
                          </tr>
                          <tr>
                            <td><label>Gender: </label></td>
                            <td><?=$row['studGender']?></td>
                          </tr>
                          <tr>
                            <td><label>Class: </label></td>
                            <td><?=$row['studClass']?></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                  </div>
                  </div>

                  <!-- Parent Information -->
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Parent's Information</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <div class="row">
                    <div class="card-body p-0">
                      <table class="table table-sm table-borderless " width="100%" >
                        <col style="width:13%">
                        <col style="width:37%">
                        <col style="width:13%">
                        <col style="width:37%">
                        <tbody>
                          <tr>
                            <td><label>Father's Name: </label></td>
                            <td><?=$row['pFatherName']?></td>
                            <td><label>Mother's Name: </label></td>
                            <td><?=$row['pMotherName']?></td>
                          </tr>
                          <tr>
                            <td><label>Father's IC</label></td>
                            <td><?=$row['pFatherIC']?></td>
                            <td><label>Mother's IC</label></td>
                            <td><?=$row['pMotherIC']?></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
              </div>

              <!-- Emergency Contact Information -->
              <div class="card card-secondary">
                <div class="card-header">
                  <h3 class="card-title">Emergency Contact Information</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <div class="row">
                    <div class="card-body p-0">
                      <table class="table table-sm table-borderless " width="100%" >
                        <col style="width:13%">
                        <col style="width:37%">
                        <col style="width:13%">
                        <col style="width:37%">
                        <tbody>
                          <tr>
                            <td><label>Name: </label></td>
                            <td><?=$row['eName']?></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td><label>Relationship: </label></td>
                            <td><?=$row['eRelation']?></td>
                          </tr>
                          <tr>
                            <td><label>Tel No</label></td>
                            <td><?=$row['eTel']?></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <!-- /.card-body -->
                    
                  </div>
                  <!-- /.card -->
                </div>
                <!-- footer button -->
                    <div class="card-footer">
                      <button type="submit" class="btn btn-success float-right" onclick="location.href='editStud.php?studIC=<?=$_GET['studIC']?>'" type="button">Edit</button>
                      <!-- <button type="submit" class="btn btn-default">Cancel</button> -->
                    </div>
                    <!-- /.card-footer -->
                </div>
              </div>

                <?php } ?>

            <!-- /.row -->
          </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

      <!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
          <b>Version</b> 1.0
        </div>
        <strong>Copyright &copy; 2020 I-Hadir</a>.</strong> All rights
        reserved.
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- jsGrid -->
    <script src="plugins/jsgrid/demos/db.js"></script>
    <script src="plugins/jsgrid/jsgrid.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- page script -->
    <script>
      $(function () {
        $("#example1").DataTable({
          "responsive": true,
          "autoWidth": false,
        });
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false,
          "responsive": true,
        });
      });
    </script>
  </body>
  </html>
