<form action="modules/quanlychitietsp/xuly.php" method="post" enctype="multipart/form-data">
<script src="//tinymce.cachefly.net/4.2/tinymce.min.js"></script>
<script>tinymce.init({selector:'textarea'});</script>
<table width="601" border="1">
  <tr>
    <td colspan="2"><div align="center">Thêm Chi Tiết SP</div></td>
  </tr>
  <tr>
    <td width="77"><div align="center">Tên SP</div></td>
    <td width="508"><input type="text" name="tensp"></td>
  </tr>
  <tr>
    <td><div align="center">Giá SP</div></td>
    <td><input type="text" name="gia"></td>
  </tr>
  <tr>
    <td><div align="center">Hình ảnh</div></td>
    <td><input type="file" name="hinhanh"></td>
  </tr>
  <tr>
    <td><div align="center">Mô tả</div></td>
    <td><textarea name="motasp" cols="45" rows="20"></textarea></td>
  </tr>
  <?php
  	$con = mysqli_connect($tenmaychu,$tentaikhoan,$pass,$csdl);
  	$sql="select * from loaisp";
	$run = mysqli_query($con, $sql);
  ?>
  <tr>
    <td><div align="center">Loại SP</div></td>
    <td><select name="loaisp">
    <?php
	while($dong=mysqli_fetch_array($run)){
	?>
    <option value="<?php echo $dong['id_loaisp'] ?>"><?php echo $dong['tenloaisp']?></option>
    <?php
	}
	?>
    </select></td>
  </tr>
  <tr>
    <td><div align="center">Thứ tự</div></td>
    <td><input type="text" name="thutu"></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <button name="them" value="THÊM">THÊM</button>
    </div></td>
  </tr>
</table>
</form>