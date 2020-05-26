<?php
require_once 'model/studentModel.php';

class studentController{
    
    function add(){
        $student = new studentModel();
        $student->name = $_POST['name'];
        $student->studid = $_POST['studID'];
        $student->phone = $_POST['phone'];
        $student->residence = $_POST['residence'];
        if($student->addStud() > 0){
            $message = "Success Insert!";
		echo "<script type='text/javascript'>alert('$message');
		window.location = '../view';</script>";
        }
    }
    
    function viewAll(){
        $student = new studentModel();
        return $student->viewallStud();
    }
    
    function viewUser($studid){
        $student = new studentModel();
        $student->studid = $studid;
        return $student->viewStud();
    }
    
    function editUser(){
        $student = new studentModel();
        $student->studid = $_POST['studID'];
        $student->phone = $_POST['phone'];
        $student->residence = $_POST['residence'];
        if($student->modifyStud()){
            $message = "Success Update!";
		echo "<script type='text/javascript'>alert('$message');
		window.location = '../view/view.php?studID=".$_POST['studID']."';</script>";
        }
    }
    
    function delete(){
        $student = new studentModel();
        $student->studid = $_POST['studID'];
        if($student->deleteStud()){
            $message = "Success Delete!";
		echo "<script type='text/javascript'>alert('$message');
		window.location = '../view';</script>";
        }
    }
}
?>
