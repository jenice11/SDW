<?php
require_once 'libs/database.php';

class studentModel{
    public $studName,$studIC,$studPhone,$studClass,$studPhoto,$pFatherName,$pFatherIC,$pMotherName,$pMotherIC,$eName,$eRelation,$eTel;
    
    function addStud(){
        $sql = "insert into student(studName, studIC, studPhone, studClass, studPhoto, pFatherName, pFatherIC, pMotherName, pMotherIC, eName, eRelation, eTel) values(:studName, :studIC, :studPhone, :studClass, :studPhoto, :pFatherName, :pFatherIC, :pMotherName, :pMotherIC, :eName, :eRelation, :eTel)";

        $args = [':studName'=>$this->studName, ':studIC'=>$this->studIC, ':studPhone'=>$this->studPhone, ':studPhoto'=>$this->studPhoto,':studClass'=>$this->studClass, ':pFatherName'=>$this->pFatherName, ':pFatherIC'=>$this->pFatherIC, ':pMotherName'=>$this->pMotherName, ':pMotherIC'=>$this->pMotherIC, ':eName'=>$this->eName, ':eRelation'=>$this->eRelation, ':eTel'=>$this->eTel];
        $stmt = DB::run($sql, $args);
        $count = $stmt->rowCount();
        
        return $count;
    }
    
    function viewallStud(){
        $sql = "select * from student";
        return DB::run($sql);
    }
    
    function viewStud(){
        $sql = "select * from student where studIC=:studIC";
        $args = [':studIC'=>$this->studIC];
        return DB::run($sql,$args);
    }
    
    function modifyStud(){
        $sql = "update student set studPhone=:studPhone,studClass=:studClass where studIC=:studIC";
        $args = [':studIC'=>$this->studIC, ':studPhone'=>$this->studPhone, ':studClass'=>$this->studClass];
        return DB::run($sql,$args);
    }
    
    function deleteStud(){
        $sql = "delete from student where studIC=:studIC";
        $args = [':studIC'=>$this->studIC];
        return DB::run($sql,$args);
    }
}
?>
