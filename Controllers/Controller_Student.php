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
				header("localhost:index.php?Controllers=Student");
				break;
			case 'edit':
				$id = isset($_GET["id"]) && is_numeric($_GET["id"]) ? $_GET["id"] : 0;
				$arr = $this->model->fetch_one("select * from sinhviens where id=$id");
				$form_action = "index.php?Controllers=Student&action=do_edit&id=$id";
				include "Views/view_add_edit.php";
				break;
			case 'do_edit':
				$id = isset($_GET["id"]) && is_numeric($_GET["id"]) ? $_GET["id"] : 0;
				$masinhvien = $_POST["masinhvien"];
				$malop = $_POST["malop"];
				$hoten = $_POST['hoten'];
				$ngaysinh = 12;
				$gioitinh = $_POST["gioitinh"];
				$quequan = $_POST["quequan"];
				$this->model->execute("update sinhviens set masinhvien='$masinhvien', malop='$malop', ten='$hoten', ngaysinh='$ngaysinh', gioitinh='$gioitinh', quequan='$quequan' where id=$id");
				$this->model->execute("update sinhviens set masinhvien='$masinhvien',malop='$malop',ten='$hoten',ngaysinh='$ngaysinh',gioitinh='$gioitinh', quequan='$quequan' where pk_news_id=$id");
				var_dump($arr);
				header('location:index.php?Controllers=Student');
				break;
			case 'add':
				$from_action = "index.php?Controllers=Stundent&action=add&id=$id";
				include "Vies/view_add_edit.php";
				break;
			default:
				# code...
				break;
		}
		//So ban ghi tren 1 tran
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
