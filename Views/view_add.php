<div class="form-style-5">
  <form method="POST" enctype="multipart/form-data" action="<?php echo $form_action; ?>">
    <fieldset>
      <legend><span class="number">1</span> Add</legend>
      <label>Mã Sinh Viên</label>
      <input type="text" name="masinhvien" placeholder="Your Ma Sinh Vien *">
      <label>Họ Và Tên</label>
      <input type="text" name="hoten" placeholder="Your Name *" value="">
      <label>Lớp</label>
      <input type="text" name="malop" placeholder="Your Lop *" value="">
      <label for="gioitinh">Giới Tính</label>
      <select id="gioitinh" name="gioitinh" value="">
        <optgroup>
          <option value="0">Nam</option>
          <option value="1">Nữ</option>
          <option value="2">Khác</option>
        </optgroup>
      </select>
      <label>Năm Sinh</label>
      <input type="text" name="birthday" value="">
      <label>Quê Quán</label>
      <input type="text" name="quequan" placeholder="Your Que Quan *" value="">
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