<?php
require_once '../libs/database.php';

class studentModel{
    public $studName,$studIC,$studPhone, $studGender,$studClass,$studPhoto,$pFatherName,$pFatherIC,$pMotherName,$pMotherIC,$eName,$eRelation,$eTel;
    
    function addStud(){
        $sql = "insert into student(studName, studIC, studPhone, studGender, studClass, studPhoto, pFatherName, pFatherIC, pMotherName, pMotherIC, eName, eRelation, eTel) values(:studName, :studIC, :studPhone,  :studGender,:studClass, :studPhoto, :pFatherName, :pFatherIC, :pMotherName, :pMotherIC, :eName, :eRelation, :eTel)";

        $args = [':studName'=>$this->studName, ':studIC'=>$this->studIC,  ':studPhone'=>$this->studPhone, ':studGender'=>$this->studGender,':studPhoto'=>$this->studPhoto,':studClass'=>$this->studClass, ':pFatherName'=>$this->pFatherName, ':pFatherIC'=>$this->pFatherIC, ':pMotherName'=>$this->pMotherName, ':pMotherIC'=>$this->pMotherIC, ':eName'=>$this->eName, ':eRelation'=>$this->eRelation, ':eTel'=>$this->eTel];

        $sql2 = "select * from student where studIC=:studIC";
        $args2 = [':studIC'=>$this->studIC];
        $stmt2 = DB::run($sql2,$args2);
        $count2 = $stmt2->rowCount();  

        if($count2>=1)
        {
            $count = -999;
            return $count;
        }
        else
        {
            $stmt = DB::run($sql, $args);
            $count = $stmt->rowCount();
            return $count;
        }

        
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
        $sql = "update student set studPhone=:studPhone, studClass=:studClass, studPhoto=:studPhoto, eName=:eName, eRelation=:eRelation, eTel=:eTel where studIC=:studIC";

        $args = [':studIC'=>$this->studIC, ':studPhone'=>$this->studPhone, ':studClass'=>$this->studClass, ':studPhoto'=>$this->studPhoto, ':eName'=>$this->eName, ':eRelation'=>$this->eRelation, ':eTel'=>$this->eTel];

        return DB::run($sql,$args);
    }
    
    function deleteStud(){
        $sql = "delete from student where studIC=:studIC";
        $args = [':studIC'=>$this->studIC];
        return DB::run($sql,$args);
    }
}
?>
