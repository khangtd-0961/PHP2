<div><a href="index.php?Controllers=Student_Add_Edit&action=add">ADD</a></div>
&nbsp;
<table>
	<tr>
		<td>Id</td>
		<td>Mã Sinh Viên</td>
		<td>Họ Và Tên</td>
		<td>Lớp </td>
		<td>Ngày Sinh</td>
		<td>Quê Quán</td>
		<td>Action</td>
	</tr>
	<?php
	$i = 0;
	foreach ($arr as $row) {
	?>
		<tr class="">
			<td><?php echo $row->id; ?></td>
			<td><?php echo $row->masinhvien; ?></td>
			<td><?php echo $row->ten; ?></td>
			<td><?php echo $row->malop; ?></td>
			<td><?php echo $row->ngaysinh; ?></td>
			<td><?php echo $row->quequan; ?></td>
			<td style="text-align: center;">
				<a href="index.php?Controllers=Student_Add_Edit&action=edit&id=<?php echo $row->id; ?>">Edit</a>&nbsp;&nbsp;
				<a href="index.php?Controllers=Student&action=delete&id=<?php echo $row->id; ?>">Delete</a>
			</td>
		</tr>
	<?php
		$i++;
	}
	?>
</table>