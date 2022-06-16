<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php
	//Nhan du lieu
	$username=$_POST["username"];
	$password=$_POST["password"];
	//$HoTen=$_POST["HoTen"];
	//$HinhAnh=$_POST["HinhAnh"];
	
	//Tao ket noi den server
	$conn = mysql_connect("localhost","root","") or die("khong the ket noi");
	//Quy d?nh b?ng mã utf8 cho câu truy v?n
	mysql_query("SET character_set_results=utf8", $conn);
	//Chon CSDL
	mysql_select_db("ql_thutuchanhchinh");
	//kiem tra trong CSDL
	$sql="SELECT * FROM user WHERE username='$username'";
	$query=mysql_query($sql);
	$row = mysql_fetch_array($query);
	
//Dong ket noi
	mysql_close($conn);
//Kiem tra du lieu nhap
	if($username == $row["username"] && $password == $row["password"]){
		echo "Login Succes! Hello" . $row["HoTen"];
		echo "<td><img src='hinhanh/".$row["HinhAnh"]."' width='200' height='200' /></td>";
		$_SESSION["login"]=true;
		$_SESSION["username"]=$username;
		
		//$_SESSION["HoTen"]=$HoTen;
		echo"<meta http-equiv='refresh' content ='1;URL=index.php'>";
	}else{
		echo "Login fail!";
		echo"<meta http-equiv='refresh' content ='1;URL=dangnhap.php'>";
	}
?>
</body>
</html>
