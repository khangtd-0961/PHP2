<!DOCTYPE html>
<html>

<head>
	<style type="text/css" href="style.css"></style>
</head>
<style type="text/css">
	* {
		margin: 0;
		padding: 0;
	}

	/*==Style cơ bản cho website==*/
	body {
		font-family: sans-serif;
		color: #333;
	}

	/*==Style cho menu===*/
	#menu ul {
		background: #1F568B;
		list-style-type: none;
		text-align: center;
	}

	#menu li {
		color: #f1f1f1;
		display: inline-block;
		width: 120px;
		height: 40px;
		line-height: 40px;
		margin-left: -5px;
	}

	#menu ul {
		background: #1F568B;
		list-style-type: none;
		overflow: hidden;
		width: 100%;
	}

	#menu a {
		text-decoration: none;
		color: #fff;
		display: block;
	}

	#menu a:hover {
		background: #F1F1F1;
		color: #333;
	}

	input[type=text],
	select {
		width: 100%;
		padding: 12px 20px;
		margin: 8px 0;
		display: inline-block;
		border: 1px solid #ccc;
		border-radius: 4px;
		box-sizing: border-box;
	}

	input[type=submit] {
		width: 100%;
		background-color: #4CAF50;
		color: white;
		padding: 14px 20px;
		margin: 8px 0;
		border: none;
		border-radius: 4px;
		cursor: pointer;
	}

	input[type=submit]:hover {
		background-color: #45a049;
	}

	div {
		border-radius: 5px;
		background-color: #f2f2f2;
		padding: 20px;
	}

	/*tables*/
	table {
		font-family: arial, sans-serif;
		border-collapse: collapse;
		width: 100%;
	}

	td,
	th {
		border: 1px solid #dddddd;
		text-align: left;
		padding: 8px;
	}

	tr:nth-child(even) {
		background-color: #dddddd;
	}

	.form-style-5 {
		max-width: 500px;
		padding: 10px 20px;
		background: #f4f7f8;
		margin: 10px auto;
		padding: 20px;
		background: #f4f7f8;
		border-radius: 8px;
		font-family: Georgia, "Times New Roman", Times, serif;
	}

	.form-style-5 fieldset {
		border: none;
	}

	.form-style-5 legend {
		font-size: 1.4em;
		margin-bottom: 10px;
	}

	.form-style-5 label {
		display: block;
		margin-bottom: 8px;
	}

	.form-style-5 input[type="text"],
	.form-style-5 input[type="date"],
	.form-style-5 input[type="datetime"],
	.form-style-5 input[type="email"],
	.form-style-5 input[type="number"],
	.form-style-5 input[type="search"],
	.form-style-5 input[type="time"],
	.form-style-5 input[type="url"],
	.form-style-5 textarea,
	.form-style-5 select {
		font-family: Georgia, "Times New Roman", Times, serif;
		background: rgba(255, 255, 255, .1);
		border: none;
		border-radius: 4px;
		font-size: 15px;
		margin: 0;
		outline: 0;
		padding: 10px;
		width: 100%;
		box-sizing: border-box;
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		background-color: #e8eeef;
		color: #8a97a0;
		-webkit-box-shadow: 0 1px 0 rgba(0, 0, 0, 0.03) inset;
		box-shadow: 0 1px 0 rgba(0, 0, 0, 0.03) inset;
		margin-bottom: 30px;
	}

	.form-style-5 input[type="text"]:focus,
	.form-style-5 input[type="date"]:focus,
	.form-style-5 input[type="datetime"]:focus,
	.form-style-5 input[type="email"]:focus,
	.form-style-5 input[type="number"]:focus,
	.form-style-5 input[type="search"]:focus,
	.form-style-5 input[type="time"]:focus,
	.form-style-5 input[type="url"]:focus,
	.form-style-5 textarea:focus,
	.form-style-5 select:focus {
		background: #d2d9dd;
	}

	.form-style-5 select {
		-webkit-appearance: menulist-button;
		height: 35px;
	}

	.form-style-5 .number {
		background: #1abc9c;
		color: #fff;
		height: 30px;
		width: 30px;
		display: inline-block;
		font-size: 0.8em;
		margin-right: 4px;
		line-height: 30px;
		text-align: center;
		text-shadow: 0 1px 0 rgba(255, 255, 255, 0.2);
		border-radius: 15px 15px 15px 0px;
	}

	.form-style-5 input[type="submit"],
	.form-style-5 input[type="button"] {
		position: relative;
		display: block;
		padding: 19px 39px 18px 39px;
		color: #FFF;
		margin: 0 auto;
		background: #1abc9c;
		font-size: 18px;
		text-align: center;
		font-style: normal;
		width: 100%;
		border: 1px solid #16a085;
		border-width: 1px 1px 3px;
		margin-bottom: 10px;
	}

	.form-style-5 input[type="submit"]:hover,
	.form-style-5 input[type="button"]:hover {
		background: #109177;
	}
</style>

<body>
	<div id="menu">
		<ul>
			<li><a href="index.php?Controllers=Student">Trang chủ</a></li>
			<li><a href="index.php?Controllers=Student">Sinh viên</a></li>
			<li><a href="#">Điểm</a></li>
			<li><a href="#">Lớp</a></li>
			<li><a href="#">Môn Học</a></li>
		</ul>
	</div>

	<div>
		<?php
		if (file_exists($Controllers))
			include $Controllers;

		?>
	</div>
</body>

</html>