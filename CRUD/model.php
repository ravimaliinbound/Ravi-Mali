<?php
class Model
{
    public $conn="";
    function __construct()
    {
        $this->conn= new mysqli('localhost','root','','ravi');
    }
    function insert($table,$data)
    {
        $column_arr = array_keys($data);
        $column = implode(",", $column_arr);

        $value_arr = array_values($data);
        $value = implode("','", $value_arr);

        $ins = "INSERT INTO $table ($column) VALUE ('$value')";
        $run = $this->conn->query($ins);

        return $run;
    }
    function select($table)
    {
        $sel = "SELECT * FROM $table WHERE 1=1 ";
        
    }
}
$obj = new Model();
?>