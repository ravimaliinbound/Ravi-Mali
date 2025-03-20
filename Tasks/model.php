<?php
class Model
{
    public $conn;
    public function __construct()
    {
        $this->conn = new mysqli('localhost', 'root', '', 'crud');
    }

    public function insert($table, $arr)
    {
        $column_arr = array_keys($arr);
        $column = implode(",", $column_arr);

        $value_arr = array_values($arr);
        $values = implode("','", $value_arr);

        $ins = "INSERT INTO $table ($column) VALUES ('$values')";
        $run = $this->conn->query($ins);
        return $run;
    }

    public function select($table)
    {
        $sel = "SELECT * FROM $table";
        $run = $this->conn->query($sel);

        while ($fetch = $run->fetch_object()) {
            $arr[] = $fetch;
        }
        if($arr)
        {
        return $arr;
        }
    }

    public function delete_product($table, $arr)
    {
        $column_arr = array_keys($arr);
        $column = implode(",", $column_arr);

        $value_arr = array_values($arr);
        $value = implode("','", $value_arr);

        $del = "DELETE FROM $table WHERE $column = $value";
        $run = $this->conn->query($del);
        return $run;
    }

    public function select_where($table, $arr)
    {
        $column_arr = array_keys($arr);
        $column = implode(",", $column_arr);

        $value_arr = array_values($arr);
        $value = implode("','", $value_arr);

        $sel = "SELECT * FROM $table WHERE $column = $value";
        $run = $this->conn->query($sel);
        return $run;
    }

    public function update_product($table, $arr, $id)
    {
        $column_arr = array_keys($arr);
        $value_arr = array_values($arr);

        $update_arr = [];
        for ($i = 0; $i < count($column_arr); $i++) {
            $update_arr[] = "$column_arr[$i] = '$value_arr[$i]'";
        }
        $update_str = implode(",", $update_arr);
        $upd = "UPDATE $table SET $update_str WHERE id = $id";
        $run = $this->conn->query($upd);
        return $run;
    }
}
$obj = new Model();
?>