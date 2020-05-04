<div class="form-style-5">
  <form method="POST" enctype="multipart/form-data" action="<?php echo $form_action; ?>">
    <fieldset>
      <legend><span class="number">1</span> Add</legend>
      <label>Mã Sinh Viên</label>
      <input type="text" name="masinhvien" placeholder="Your Ma Sinh Vien *" value="<?php echo isset($arr->masinhvien) ? $arr->masinhvien : null; ?>">
      <label>Họ Và Tên</label>
      <input type="text" name="hoten" placeholder="Your Name *" value="<?php echo isset($arr->ten) ? $arr->ten : null; ?>">
      <label>Lớp</label>
      <input type="text" name="malop" placeholder="Your Lop *" value="<?php echo isset($arr->malop) ? $arr->malop : null; ?>">
      <label for="gioitinh">Giới Tính</label>
      <select id="gioitinh" name="gioitinh" value="<?php echo isset($arr->gioitinh) ? $arr->gioitinh : null; ?>">
        <option value="0">Nam</option>
        <option value="1">Nữ</option>
        <option value="2">Khác</option>
      </select>
      <label>Năm Sinh</label>
      <input type="text" name="ngaysinh" value="<?php echo isset($arr->ngaysinh) ? $arr->ngaysinh : null; ?>">
      <label>Quê Quán</label>
      <input type="text" name="quequan" placeholder="Your Que Quan *" value="<?php echo isset($arr->quequan) ? $arr->quequan : null; ?>">
    </fieldset>
    <input type="submit" value="Apply" />
  </form>
</div>
<!-- <script>
$(function() {
  $('input[name="birthday"]').daterangepicker({
    singleDatePicker: true,
    showDropdowns: true,
    minYear: 1901,
    maxYear: parseInt(moment().format('YYYY'),10)
  }, function(start, end, label) {
    var years = moment().diff(start, 'years');
    alert("You are " + years + " years old!");
  });
});
</script> -->