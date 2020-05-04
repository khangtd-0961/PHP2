<?php

namespace Controllers;

use Models\Student;

class Student_Add_EditController
{
	public $model;
	public function __construct()
	{
		$this->model = new Student;

		$action = isset($_GET["action"]) ? $_GET["action"] : null;
		switch ($action) {
			case "edit":
				$id = isset($_GET["id"]) && is_numeric($_GET["id"]) ? $_GET["id"] : 0;
				$arr = $this->model->fetch_one("select * from sinhviens where id=$id");
				$form_action = "index.php?Controllers=Student_Add_Edit&action=do_edit&id=$id";
				break;
			case "do_edit":
				$id = isset($_GET["id"]) && is_numeric($_GET["id"]) ? $_GET["id"] : 0;
				$masinhvien = $_POST["masinhvien"];
				$malop = $_POST["malop"];
				$hoten = $_POST['hoten'];
				$ngaysinh = $_POST["ngaysinh"];
				$gioitinh = 1;
				$quequan = $_POST["quequan"];
				$sql = "UPDATE sinhviens set masinhvien='$masinhvien', malop='$malop', ten='$hoten', ngaysinh='$ngaysinh', gioitinh='$gioitinh', quequan='$quequan' where id=$id";
				$this->model->execute($sql);
					header('location:index.php?Controllers=Student');
				break;
			case "add":
				$form_action = "index.php?Controllers=Student_Add_Edit&action=do_add";
				break;
			case "do_add":
				$masinhvien = $_POST["masinhvien"];
				$malop = $_POST["malop"];
				$hoten = $_POST['hoten'];
				$ngaysinh = $_POST["ngaysinh"];
				$gioitinh = $_POST["gioitinh"];
				$quequan = $_POST["quequan"];
					$sql = "insert into sinhviens (masinhvien, malop, ten, ngaysinh, gioitinh, quequan) values('$masinhvien', '$malop', '$hoten', '$ngaysinh', '$gioitinh', '$quequan')";
				   $this->model->execute($sql);
				// $this->model->execute("insert into sinhviens(id, masinhvien, malop, ten, ngaysinh, gioitinh, quequan) values'$masinhvien', '$malop', '$hoten', '$ngaysinh', '$gioitinh', '$quequan')");
				header('Location:index.php?Controllers=Student');
				break;
		}
		include "Views/view_add_edit.php";		
	}
}
new Student_Add_EditController();
