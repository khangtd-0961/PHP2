<?php

namespace Models;

include "config.php";

class Student
{
	public function fetch($sql)
	{
		global $db;
		$result = mysqli_query($db, $sql);
		$arr = array();
		while ($rows = mysqli_fetch_object($result)) {
			$arr[] = $rows;
		}
		return $arr;
	}
	public function fetch_one($sql)
	{
		global $db;
		$result = mysqli_query($db, $sql);
		$rows = mysqli_fetch_object($result);
		return $rows;
	}
	public function count($sql)
	{
		global $db;
		$result = mysqli_query($db, $sql);
		$count = mysqli_num_rows($result);
		return $count;
	}
	public function execute($sql)
	{
		global $db;
		if (mysqli_query($db, $sql) === true) {
			 echo "New record created successfully";
			return mysqli_insert_id($db);
		}
		return 0;
	}
	public function get_insert_id($id_name, $table_name)
	{
		global $db;
		$result = mysqli_query($db, "select $id_name from $table_name order by $id_name desc limit 0,1");
		$rows = mysqli_fetch_array($result);
		return $rows;
	}
}
