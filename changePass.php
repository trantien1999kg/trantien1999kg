<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<?php
//Nhan du lieu
	$username =$_POST["username"];
	$password =$_POST["password"];
	
//Tao ket noi den server
	$conn = mysql_connect("localhost","root","") or die("khong the ket noi");
	//Quy d?nh b?ng mã utf8 cho câu truy v?n
	mysql_query("SET character_set_results=utf8", $conn);
	//Chon CSDL
	mysql_select_db("ql_thutuchanhchinh");
	//Insert vào CSDL
	$query="INSERT INTO USER values(N'$username',N'$password')";
	$result=mysql_query($query);
	//Dong ket noi
	mysql_close($conn);
	//Quay ve trang chu
	echo"<meta http-equiv='refresh' content ='3;URL=dangnhap.php'>";
?>
<body>
</body>
</html>
