<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<?php
//Nhan du lieu
	$MATT =$_POST["MATT"];
	$SoQD =$_POST["SoQD"];
	$TenTT =$_POST["TenTT"];
	$BoBanNganh =$_POST["BoBanNganh"];
	$CapTH =$_POST["CapTH"];
	$LoaiTT =$_POST["LoaiTT"];
	$LinhVuc =$_POST["LinhVuc"];
	$TrinhTuTH =$_POST["TrinhTuTH"];
	$CachTH =$_POST["CachTH"];
	$ThanhPhanHS =$_POST["ThanhPhanHS"];
	$DoiTuongTH =$_POST["DoiTuongTH"];
	$CoQuanTH =$_POST["CoQuanTH"];
	$CQThamQuyen =$_POST["CQThamQuyen"];
	$DCTiepNhan =$_POST["DCTiepNhan"];
	$CQUyQuyen =$_POST["CQUyQuyen"];
	//Nhan file hinh anh 
	if ($_FILES["file"]["error"] > 0){
echo "Error: " . $_FILES["file"]["error"] . "<br />";
}else{
move_uploaded_file($_FILES["file"]["tmp_name"],"hinhanh/" . $_FILES["file"]["name"]);
echo "Stored in: " . "FILE/" . $_FILES["file"]["name"]. "<br />";
echo "Da upload thanh cong!!!!!!!!!!!!";
$HinhAnh = $_FILES["file"]["name"];
}
	$KQTH =$_POST["KQTH"];
	$PhapLy =$_POST["PhapLy"];
	$YeuCau =$_POST["YeuCau"];
	//Nhan file hinh anh
	
//Tao ket noi den server
	$conn = mysql_connect("localhost","root","") or die("khong the ket noi");
	//Quy d?nh b?ng mã utf8 cho câu truy v?n
	mysql_query("SET character_set_results=utf8", $conn);
	//Chon CSDL
	mysql_select_db("ql_thutuchanhchinh");
	//Insert vào CSDL
	$query="INSERT INTO TTHC values($MATT,N'$SoQD',N'$TenTT',N'$BoBanNganh',N'$CapTH',N'$LoaiTT',N'$LinhVuc',N'$TrinhTuTH',N'$CachTH',N'$ThanhPhanHS',N'$DoiTuongTH',N'$CoQuanTH',N'$CQThamQuyen',N'$DCTiepNhan',N'$CQUyQuyen',N'$HinhAnh',N'$KQTH',N'$PhapLy',N'$YeuCau')";
	$result=mysql_query($query);
	//Dong ket noi
	mysql_close($conn);
	//Quay ve trang chu
	echo"<meta http-equiv='refresh' content ='3;URL=index.php'>";
?>
<body>
</body>
</html>
