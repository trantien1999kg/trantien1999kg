<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>QUANLYTTHC</title>
</head>

<body>

<?php
//Nhan du lieu
$username=$_POST["username"];
//Tao ket noi den server
$conn = mysql_connect("localhost","root","") or die("khong the ket noi");
//Quy định bảng mã utf8 cho câu truy vấn
mysql_query("SET character_set_results=utf8", $conn);
//Chon CSDL
mysql_select_db("ql_thutuchanhchinh");
//XOA vào CSDL
$sql="DELETE FROM user WHERE username=$username";
$qr=mysql_query($sql);
//Dong ket noi
mysql_close($conn);
//Chuyen ve trang chu de xem ket qua
echo "<meta http-equiv='refresh' content='1;URL=qltaikhoan.php'>";
?>
</body>
</html>