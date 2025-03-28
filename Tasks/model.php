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
        $arr = [];
        while ($fetch = $run->fetch_object()) {
            $arr[] = $fetch;
        }
        return $arr;
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


    public function search($table, $value, $limit, $page)
    {
        $offset = ($page - 1) * $limit;
        $search = "SELECT * FROM $table WHERE name LIKE '%$value%' OR email LIKE '%$value%' OR gender LIKE '$value' OR language LIKE '%$value%' OR city LIKE '%$value%' LIMIT $offset, $limit";
        $run = $this->conn->query($search);
        $arr = [];
        while ($fetch = $run->fetch_object()) {
            $arr[] = $fetch;
        }
        return $arr;
    }
    public function sort($table, $column, $order, $value, $limit)
    {
        $search = "SELECT * FROM $table  WHERE name LIKE '%$value%' OR email LIKE '%$value%' OR gender LIKE '$value' OR language LIKE '%$value%' OR city LIKE '%$value%' ORDER BY $column $order LIMIT 0, $limit";
        $run = $this->conn->query($search);
        $arr = [];
        while ($fetch = $run->fetch_object()) {
            $arr[] = $fetch;
        }
        return $arr;
    }
    public function pagination($table, $page, $limit, $value)
    {
        $offset = ($page - 1) * $limit;

        $query = "SELECT * FROM $table WHERE name LIKE '%$value%' OR email LIKE '%$value%' OR gender LIKE '$value' OR language LIKE '%$value%' OR city LIKE '%$value%' LIMIT $offset, $limit";
        $q_run = $this->conn->query($query);

        $arr = [];
        while ($fetch = $q_run->fetch_object()) {
            $arr[] = $fetch;
        }
        return $arr;
    }
    public function totalpage($table, $limit)
    {
        $sel = "SELECT * FROM $table ";
        $run = $this->conn->query($sel);
        $rows = $run->num_rows;
        $totalPage = ceil($rows / $limit);
        return $totalPage;

    }
    public function totalSpage($table, $limit, $value)
    {
        $sel = "SELECT * FROM $table WHERE name LIKE '%$value%' OR email LIKE '%$value%' OR gender LIKE '$value' OR language LIKE '%$value%' OR city LIKE '%$value%'";
        $run = $this->conn->query($sel);
        $rows = $run->num_rows;
        $totalPage = ceil($rows / $limit);
        return $totalPage;

    }
}
$obj = new Model();
?>