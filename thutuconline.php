<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<?php
//Nhan du lieu
	$CMND =$_POST["CMND"];
	$MATT =$_POST["MATT"];
	$TenTT =$_POST["TenTT"];
	$HoTen =$_POST["HoTen"];
	$GT =$_POST["GT"];
	$NgaySinh =$_POST["NgaySinh"];
	$NoiSinh =$_POST["NoiSinh"];
	$SDT =$_POST["SDT"];
	$QuocTich =$_POST["QuocTich"];
	$DCThuongTru =$_POST["DCThuongTru"];
	$DCTamTru =$_POST["DCTamTru"];
	
	//Nhan file hinh anh 
	if ($_FILES["file"]["error"] > 0){
echo "Error: " . $_FILES["file"]["error"] . "<br />";
}else{
move_uploaded_file($_FILES["file"]["tmp_name"],"hinhanh/" . $_FILES["file"]["name"]);
echo "Stored in: " . "FILE/" . $_FILES["file"]["name"]. "<br />";
echo "Da upload thanh cong!!!!!!!!!!!!";
$HinhAnh = $_FILES["file"]["name"];
}
	$Cha =$_POST["Cha"];
	$Me =$_POST["Me"];
	$VoChong =$_POST["VoChong"];
	//Nhan file hinh anh
	
//Tao ket noi den server
	$conn = mysql_connect("localhost","root","") or die("khong the ket noi");
	//Quy d?nh b?ng mã utf8 cho câu truy v?n
	mysql_query("SET character_set_results=utf8", $conn);
	//Chon CSDL
	mysql_select_db("ql_thutuchanhchinh");
	//Insert vào CSDL
	$query="INSERT INTO DKONLINE values($CMND,$MATT,N'$TenTT',N'$HoTen',N'$GT',$NgaySinh,N'$NoiSinh',$SDT,N'$QuocTich',N'$DCThuongTru',N'$DCTamTru',N'$HinhAnh',N'$Cha',N'$Me',N'$VoChong')";
	$result=mysql_query($query);
	//Dong ket noi
	mysql_close($conn);
	//Quay ve trang chu
	echo"<meta http-equiv='refresh' content ='3;URL=index.php'>";
?>
<body>
</body>
</html>
