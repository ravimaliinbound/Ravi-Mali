<?php

class model
{
	public $conn = null;
	function __construct()
	{
		$this->conn = new mysqli('localhost', 'root', '', 'crud');
	}
	function insert($tbl, $arr)
	{
		$column_arr = array_keys($arr);
		$column = implode(",", $column_arr);

		$values_arr = array_values($arr);
		$values = implode("','", $values_arr);

		$sel = "insert into $tbl ($column) value ('$values')";
		$run = $this->conn->query($sel);
		return $run;
	}
	function select($tbl)
	{
		$sel = "select * from $tbl";  // query

		$run = $this->conn->query($sel);  // query run on db

		while ($fetch = $run->fetch_object()) {
			$arr[] = $fetch;
		}
		return $arr;
	}
	function select_where($tbl, $arr)
	{
		$column_arr = array_keys($arr);
		$values_arr = array_values($arr);

		$sel = "select * from $tbl where 1=1";  // 1=1 means query contnue
		$i = 0;
		foreach ($arr as $w) {
			$sel .= " and $column_arr[$i]='$values_arr[$i]'";
			$i++;
		}

		$run = $this->conn->query($sel);  // query run on db
		return $run;
	}
	function delete_where($tbl, $arr)
	{
		$column_arr = array_keys($arr);
		$values_arr = array_values($arr);

		$del = "delete from $tbl where 1=1";  // 1=1 means query contnue
		$i = 0;
		foreach ($arr as $w) {
			echo $del .= " and $column_arr[$i]='$values_arr[$i]'";
			$i++;
		}
		$run = $this->conn->query($del);  // query run on db
		return $run;
	}
	function update_where($tbl,$data,$where)
	{
		// print_r($tbl);die;
		$upd="update $tbl set"; // 1=1 means query continue
		
		$col_d=array_keys($data);
		$value_d=array_values($data);
		$j=0;
		
		$count=count($data);
		foreach($data as $d)
		{
			if($count==$j+1)
			{
				$upd.=" $col_d[$j]='$value_d[$j]'";
			}
			else
			{
				$upd.=" $col_d[$j]='$value_d[$j]' , ";
				$j++;
			}
		}
	
		$upd.=" where 1=1";
		$col_w=array_keys($where);
		$value_w=array_values($where);
		$i=0;
		foreach($where as $w)
		{
			 $upd.=" and $col_w[$i]='$value_w[$i]'";
			$i++;
		}
		$run=$this->conn->query($upd);
		return $run;
	}
}
$obj = new model;