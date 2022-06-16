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

 <audio src="hinhanh/Hentai.mp3" controls loop></audio>
</head>

<body>
<div align="center">

  <form action="insert.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <script src="//tinymce.cachefly.net/4.2/tinymce.min.js"></script>
<script>tinymce.init({selector:'textarea'});</script>
    <p class="style1">Thêm Thủ Tục </p>
	<hr>
	
    <table width="1050" height="1044" border="0">
      <tr>
        <td width="271" height="49">Mã Thủ Tục </td>
        <td width="769"><label>
          <input name="MATT" type="text" size="100" />
        </label></td>
      </tr>
	  <tr>
        <td>Số Quyết Định </td>
        <td><label>
          <input name="SoQD" type="text" size="100" />
        </label></td>
      </tr>
	  <tr>
        <td>Tên Thủ Tục </td>
        <td><label>
          <input name="TenTT" type="text" size="100" />
        </label></td>
      </tr>
	  <tr>
        <td>Bộ Ban Ngành </td>
        <td><label>
          <input name="BoBanNganh" type="text" size="100" />
        </label></td>
      </tr>
	  <tr>
        <td>Cấp Thực Hiện </td>
        <td><label>
          <input name="CapTH" type="text" size="100" />
        </label></td>
      </tr>
	  <tr>
        <td>Loại Thủ Tục </td>
        <td><label>
          <input name="LoaiTT" type="text" size="100" />
        </label></td>
      </tr>
	  <tr>
        <td>Lĩnh Vực </td>
        <td><label>
          <input name="LinhVuc" type="text" size="100" />
        </label></td>
      </tr>
	  <tr>
        <td height="111">Trình Tự Thực Hiện</td>
        <td><textarea name="TrinhTuTH" cols="100" rows="15"></textarea></td>
      </tr>
	  <tr>
        <td>Cách Thực Hiện </td>
        <td><label>
          <label>
          <textarea name="CachTH" cols="100" rows="15"></textarea>
          </label>
        </label></td>
      </tr>
	  <tr>
        <td>Thành Phần Hồ Sơ </td>
        <td><label>
        <textarea name="ThanhPhanHS" cols="100" rows="15"></textarea>
        </label></td>
      </tr>
      <tr>
        <td>Đối Tượng Thực Hiện </td>
        <td><label>
          <input name="DoiTuongTH" type="text" size="100" />
        </label></td>
      </tr>
      <tr>
        <td>Cơ Quan Thực Hiện </td>
        <td><label>
          <input name="CoQuanTH" type="text" size="100" />
        </label></td>
      </tr>
	  <tr>
        <td height="49">Cơ Quan Thẩm Quyền </td>
        <td><label>
          <input name="CQThamQuyen" type="text" size="100" />
        </label></td>
      </tr>
	  <tr>
        <td height="49">Địa Chỉ Tiếp Nhận </td>
        <td><label>
          <input name="DCTiepNhan" type="text" size="100" />
        </label></td>
      </tr>
	  <tr>
        <td height="49">Cơ Quan Uỷ Quyền </td>
        <td><label>
          <input name="CQUyQuyen" type="text" size="100" />
        </label></td>
      </tr>
      <tr>
        <td>Hình Ảnh Đơn Mẫu </td>
        <td><label>
		<img src="hinhanh/<?php echo $HinhAnh;?>" width='200' height='130' />
			<br>
          <input name="file" type="file" size="100" />
        </label></td>
      </tr>
	  <tr>
        <td height="49">Kết Qủa Thực Hiện </td>
        <td><label>
          <input name="KQTH" type="text" size="100" />
        </label></td>
      </tr>
	  <tr>
        <td height="49">Căn Cứ Pháp Lý </td>
        <td><label>
          <textarea name="PhapLy" cols="100" rows="15"></textarea>
        </label></td>
      </tr>
	  <tr>
        <td height="49">Yêu Cầu </td>
        <td><label>
          <input name="YeuCau" type="text" size="100" />
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
