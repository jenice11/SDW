<?php
require_once 'libs/database.php';

class studentModel{
    public $name,$studid,$phone,$residence;
    
    function addStud(){
        $sql = "insert into student(studname, studidd, phone, residence) values(:name, :studid, :phone, :residence)";
        $args = [':name'=>$this->name, ':studid'=>$this->studid, ':phone'=>$this->phone, ':residence'=>$this->residence];
        $stmt = DB::run($sql, $args);
        $count = $stmt->rowCount();
        return $count;
    }
    
    function viewallStud(){
        $sql = "select * from student";
        return DB::run($sql);
    }
    
    function viewStud(){
        $sql = "select * from student where studidd=:studidd";
        $args = [':studidd'=>$this->studid];
        return DB::run($sql,$args);
    }
    
    function modifyStud(){
        $sql = "update student set phone=:phone,residence=:residence where studidd=:studid";
        $args = [':studid'=>$this->studid, ':phone'=>$this->phone, ':residence'=>$this->residence];
        return DB::run($sql,$args);
    }
    
    function deleteStud(){
        $sql = "delete from student where studidd=:studid";
        $args = [':studid'=>$this->studid];
        return DB::run($sql,$args);
    }
}
?>
