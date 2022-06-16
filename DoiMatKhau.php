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
if(!isset($_GET['username']))
	$username = 0;
else $username = $_GET['username'];
//Tao ket noi den server
$conn = mysql_connect("localhost","root","") or die("khong the ket noi");
//Quy định bảng mã utf8 cho câu truy vấn
mysql_query("SET character_set_results=utf8", $conn);
//Chon CSDL
mysql_select_db("ql_thutuchanhchinh");
//Tao cau truy van
$sql = "SELECT * FROM USER WHERE username=" . $username;
//Thuc thi cau truy van
$query = mysql_query($sql);
//Hien thi du lieu
if(mysql_num_rows($query) == 0)
	echo "Ten dang nhap khong hop le ...";
else{
	$row = mysql_fetch_array($query);
	$password = $row["password"];
	
}
//Dong ket noi
mysql_close($conn);
?>

<form action="changePass.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
<div align="center" class="style1">
  <p>Đổi Mật Khẩu </p>
  <p>&nbsp;</p>
</div>
    <table width="1091" height="178" border="1">
      <tr>
        <td width="239" height="94"> Tên TK</td>
		<td width="144"><label>
<input type="text" name="username" readonly="true" value="<?php echo $username;?>"/>
</label><td width="82"></td>
	  </tr>
		<tr>
        <td height="76">Mật Khẩu </td>
        <td><label>
          <input type="text" name="password" value="<?php echo $password;?>"/>
        </label></td>
      </tr>

	  
  </table>
	  <p>&nbsp;</p>
	 
	  <p>
	    <label></label>
  <div align="center"><input name="submit" type="submit" class="style1" value="Đổi" />
  </div>
  </p>
</form>
	   <div align="center"><img src="hinhanh/baner.png" width="1300" height="50" /></div>
</body>
</html>