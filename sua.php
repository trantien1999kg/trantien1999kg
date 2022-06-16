<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sửa Sinh Viên</title>
<style type="text/css">
<!--
.style1 {
	font-size: 36px;
	font-weight: bold;
	color: #FF6633;
}
-->

</style>
<tr>
			<td width="1000" height="200" colspan="3">
            <img src="hinhanh/logo.png" width="804" height="95" />		</tr>
			 <audio src="hinhanh/Hentai.mp3" controls loop></audio>
</head>	
<body>

<?php

//Nhan MSSV gửi qua
if(!isset($_GET['MATT']))
	$MATT = 0;
else $MATT = $_GET['MATT'];
//Tao ket noi den server
$conn = mysql_connect("localhost","root","") or die("khong the ket noi");
//Quy định bảng mã utf8 cho câu truy vấn
mysql_query("SET character_set_results=utf8", $conn);
//Chon CSDL
mysql_select_db("ql_thutuchanhchinh");
//Tao cau truy van
$sql = "SELECT * FROM tthc WHERE MATT=" . $MATT;
//Thuc thi cau truy van
$query = mysql_query($sql);
//Hien thi du lieu
if(mysql_num_rows($query) == 0)
	echo "MATT khong hop le";
else{
	$row = mysql_fetch_array($query);
	$SoQD = $row["SoQD"];
	$TenTT = $row["TenTT"];
	$BoBanNganh = $row["BoBanNganh"];
	$CapTH = $row["CapTH"];
	$LoaiTT = $row["LoaiTT"];
	$LinhVuc = $row["LinhVuc"];
	$TrinhTuTH = $row["TrinhTuTH"];
	$CachTH = $row["CachTH"];
	$ThanhPhanHS = $row["ThanhPhanHS"];
	$DoiTuongTH = $row["DoiTuongTH"];
	$CoQuanTH = $row["CoQuanTH"];
	$CQThamQuyen = $row["CQThamQuyen"];
	$DCTiepNhan = $row["DCTiepNhan"];
	$CQUyQuyen = $row["CQUyQuyen"];
	$HinhAnh = $row["HinhAnh"];
	$KQTH = $row["KQTH"];
	$PhapLy = $row["PhapLy"];
	$YeuCau = $row["YeuCau"];
}
//Dong ket noi
mysql_close($conn);
?>

<form action="update.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
<div align="center" class="style1">
  <p>Sửa </p>
  <p>&nbsp;</p>
</div>
    <table width="1091" height="178" border="1">
      <tr>
        <td width="239" height="94"> Tên TK</td>
		<td width="144"><label>
<input type="text" name="MATT" readonly="true" value="<?php echo $MATT;?>"/>
</label><td width="82"></td>
	  </tr>
		<tr>
        <td>Số Quyết Định </td>
        <td><label>
          <input type="text" name="SoQD" value="<?php echo $SoQD;?>"/>
        </label></td>
      </tr>
<tr>
        <td>Tên Thủ Tục </td>
        <td><label>
          <input type="text" name="TenTT" value="<?php echo $TenTT;?>"/>
        </label></td>
      </tr>
	  <tr>
        <td>Bộ Ban Ngành </td>
        <td><label>
          <input type="text" name="BoBanNganh" value="<?php echo $BoBanNganh;?>"/>
        </label></td>
      </tr>
	  <tr>
        <td>Cấp Thực Hiện </td>
        <td><label>
          <input type="text" name="CapTH" value="<?php echo $CapTH;?>"/>
        </label></td>
      </tr>
	  <tr>
        <td>Loại Thủ Tục </td>
        <td><label>
          <input type="text" name="LoaiTT" value="<?php echo $LoaiTT;?>"/>
        </label></td>
      </tr>
	  <tr>
        <td>Lĩnh Vực </td>
        <td><label>
          <input type="text" name="LinhVuc" value="<?php echo $LinhVuc;?>"/>
        </label></td>
      </tr>
	  <tr>
        <td>Trình Tự Thực Hiện </td>
        <td><label>
          <input type="text" name="TrinhTuTH" value="<?php echo $TrinhTuTH;?>"/>
        </label></td>
      </tr>
	  <tr>
        <td>Cách Thực Hiện </td>
        <td><label>
          <input type="text" name="CachTH" value="<?php echo $CachTH;?>"/>
        </label></td>
      </tr>
	  <tr>
        <td>Thành Phần Hồ Sơ </td>
        <td><label>
          <input type="text" name="ThanhPhanHS" value="<?php echo $ThanhPhanHS;?>"/>
        </label></td>
      </tr>
	  <tr>
        <td>Đối Tượng Thực Hiện </td>
        <td><label>
          <input type="text" name="DoiTuongTH" value="<?php echo $DoiTuongTH;?>"/>
        </label></td>
      </tr>
	  <tr>
        <td>Cơ Quan Thực Hiện </td>
        <td><label>
          <input type="text" name="CoQuanTH" value="<?php echo $CoQuanTH;?>"/>
        </label></td>
      </tr>
	  <tr>
        <td>Cơ Quan Thẩm Quyền </td>
        <td><label>
          <input type="text" name="CQThamQuyen" value="<?php echo $CQThamQuyen;?>"/>
        </label></td>
      </tr>
	  <tr>
        <td>Địa Chỉ Tiếp Nhận </td>
        <td><label>
          <input type="text" name="DCTiepNhan" value="<?php echo $DCTiepNhan;?>"/>
        </label></td>
      </tr>
	  <tr>
        <td height="33">Cơ Quan Uỷ Quyền </td>
        <td><label>
          <input type="text" name="CQUyQuyen" value="<?php echo $CQUyQuyen;?>"/>
        </label></td>
      </tr>
	  <tr>
        <td height="225">Hình Ảnh Mẫu Đơn</td>
        <td><label>
          <img src="hinhanh/<?php echo $HinhAnh;?>" width='200' height='130' />
			<br>
          <input type="file" name="file" />
        </label></td>
      </tr>
	  <tr>
        <td>Kết Qủa Thực Hiện </td>
        <td><label>
          <input type="text" name="KQTH" value="<?php echo $KQTH;?>"/>
        </label></td>
      </tr>
	  <tr>
        <td>Căn Cứ Pháp Lý </td>
        <td><label>
          <input type="text" name="PhapLy" value="<?php echo $PhapLy;?>"/>
        </label></td>
      </tr>
	  <tr>
        <td>Yêu Cầu </td>
        <td><label>
          <input type="text" name="YeuCau" value="<?php echo $YeuCau;?>"/>
        </label></td>
      </tr>
	  
  </table>
	  <p>&nbsp;</p>
	 
	  <p>
	    <label></label>
        <div align="center"><input name="submit" type="submit" class="style1" value="THÊM THỦ TỤC" />
        </div>
  </p>
</form>
	   <div align="center"><img src="hinhanh/baner.png" width="1300" height="50" /></div>
</body>
</html>