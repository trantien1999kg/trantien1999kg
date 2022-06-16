<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	font-size: 36px;
	font-weight: bold;
	color: #CC6633;
}
.content {
height: 400px;
width: 100%;
background-image:url(TsukasachanDuongCong.jpg) ;
background-size: cover
}
.text {
color: #fff;
position: absolute;
top: 10px;
left: 70px;
}
</style>
<div align="center">

 
</head>

<body>
<div align="center">

  <form action="thutuconline.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <script src="//tinymce.cachefly.net/4.2/tinymce.min.js"></script>
<script>tinymce.init({selector:'textarea'});</script>
    <p class="style1">Đăng Ký Online  </p>
	
	<hr>
	
    <table width="1050" height="1044" border="0">
      <tr>
        <td width="271" height="49">CMND/CCCD </td>
        <td width="769"><label>
          <input name="CMND" type="text" size="100" />
        </label></td>
      </tr>
	  <tr>
        <td>Mã Thủ Tục Muốn Đăng Ký </td>
        <td><label>
          <input name="MATT" type="text" size="100" />
        </label></td>
      </tr>
	  <tr>
        <td>Tên Thủ Tục </td>
        <td><label>
          <input name="TenTT" type="text" size="100" />
        </label></td>
      </tr>
	  <tr>
        <td>Họ Tên </td>
        <td><label>
          <input name="HoTen" type="text" size="100" />
        </label></td>
      </tr>
	  <tr>
        <td>Giới Tính </td>
        <td><label>
          <input name="GT" type="text" size="100" />
        </label></td>
      </tr>
	  <tr>
        <td>Ngày Sinh </td>
        <td><label>
          <input name="NgaySinh" type="text" size="100" />
        </label></td>
      </tr>
	  <tr>
        <td>Nơi Sinh </td>
        <td><label>
          <input name="NoiSinh" type="text" size="100" />
        </label></td>
      </tr>
	  <tr>
        <td>Số Điện Thoại </td>
        <td><label>
          <input name="SDT" type="text" size="100" />
        </label></td>
      </tr>
	  <tr>
        <td>Quốc Tịch </td>
        <td><label>
          <input name="QuocTich" type="text" size="100" />
        </label></td>
      </tr>
	  <tr>
        <td height="111">ĐC Thường Trú</td>
        <td><textarea name="DCThuongTru" cols="100" rows="15"></textarea></td>
      </tr>
	  <tr>
        <td>ĐC Tạm Trú </td>
        <td><label>
          <label>
          <textarea name="DCTamTru" cols="100" rows="15"></textarea>
          </label>
        </label></td>
      </tr>
	  <tr>
        <td>Ảnh 3/4(Nền Trắng) Đi Kèm </td>
        <td><label>
		<img src="hinhanh/<?php echo $HinhAnh;?>" width='200' height='130' />
			<br>
          <input name="file" type="file" size="100" />
        </label></td>
      </tr>
	  <tr>
        <td>Thông Tin Cha(Họ Tên+Năm Sinh (NguyễnVănA31022021)) </td>
        <td><label>
          <input name="Cha" type="text" size="100" />
        </label></td>
      </tr>
      <tr>
        <td>Thông Tin Mẹ(Họ Tên+Năm Sinh (NguyễnVănA31022021)) </td>
        <td><label>
          <input name="Me" type="text" size="100" />
        </label></td>
      </tr>
      <tr>
        <td>Thông Tin Vợ Chồng(Họ Tên+Năm Sinh (NguyễnVănA31022021)) </td>
        <td><label>
          <input name="VoChong" type="text" size="100" />
        </label></td>
      </tr>
	  
    </table>
    <p>
      <label>
      <input name="Submit" type="submit" class="style1" value="Thêm" />
      </label>
    </p>
  </form>

</div>
</body>
</html>
