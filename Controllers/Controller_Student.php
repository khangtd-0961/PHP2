<?php

namespace Controllers;

use Models\Student;

class StudentController
{
	public $model;
	public function __construct()
	{
		$this->model = new Student;

		$action = isset($_GET["action"]) ? $_GET["action"] : null;
		switch ($action) {
			case "delete":
				$id = isset($_GET["id"]) ? $_GET["id"] : null;
				$this->model->execute("delete from sinhviens where id=$id");
				header('location:index.php?Controllers=Student');
				break;
			// case "edit":
			// 	$id = isset($_GET["id"]) && is_numeric($_GET["id"]) ? $_GET["id"] : 0;
			// 	$arr = $this->model->fetch_one("select * from sinhviens where id=$id");
			// 	$form_action = "index.php?Controllers=Student&action=do_edit&id=$id";
			// 	include "Views/view_add_edit.php";
			// 	break;
			// case "do_edit":
			// 	$id = isset($_GET["id"]) && is_numeric($_GET["id"]) ? $_GET["id"] : 0;
			// 	$masinhvien = $_POST["masinhvien"];
			// 	$malop = $_POST["malop"];
			// 	$hoten = $_POST['hoten'];
			// 	$ngaysinh = $_POST["ngaysinh"];
			// 	$gioitinh = 1;
			// 	$quequan = $_POST["quequan"];

			// 	$this->model->execute('UPDATE sinhviens set masinhvien="$masinhvien", malop="$malop", ten="$hoten", ngaysinh="$ngaysinh", gioitinh="$gioitinh", quequan="$quequan" where id=$id');
			// 		header('location:index.php?Controllers=Student');
			// 	break;
			// case "add":
			// 	$form_action = "index.php?Controllers=Student&action=do_add";
			// 	include "Views/view_add_edit.php";
			// 	break;
			// case "do_add":
			// 	$masinhvien = $_POST["masinhvien"];
			// 	$malop = $_POST["malop"];
			// 	$hoten = $_POST['hoten'];
			// 	$ngaysinh = $_POST["ngaysinh"];
			// 	$gioitinh = 1;
			// 	$quequan = $_POST["quequan"];
			// 		$sql = "INSERT INTO sinhviens(`id`, `masinhvien`, `malop`, `ten`, `ngaysinh`, `gioitinh`, `quequan`) VALUES ('$masinhvien', '$malop', '$hoten', '$ngaysinh', '$gioitinh', '$quequan')";
			// 	$this->model->execute($sql);
			// 	header('location:index.php?Controllers=Student');
			// 	break;
			// case 'getAll':
			// 	$record_per_page = 10;

			// 	$total = $this->model->count("select * from sinhviens");

			// 	$numpage = ceil($total / $record_per_page);

			// 	$page = isset($_GET["p"]) && $_GET["p"] > 0 ? $_GET["p"] - 1 : 0;

			// 	$from = $page * $record_per_page;

			// 	$arr = $this->model->fetch("select * from sinhviens order by id desc limit $from, $record_per_page");

			// 	include "Views/view_sinhvien.php";
			// 	break;
		}
				$record_per_page = 10;

				$total = $this->model->count("select * from sinhviens");

				$numpage = ceil($total / $record_per_page);

				$page = isset($_GET["p"]) && $_GET["p"] > 0 ? $_GET["p"] - 1 : 0;

				$from = $page * $record_per_page;

				$arr = $this->model->fetch("select * from sinhviens order by id desc limit $from, $record_per_page");

				include "Views/view_sinhvien.php";
	}
}
new StudentController();
