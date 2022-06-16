<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>QUANLYSINHVIENt</title>
</head>

<body>
<?php
//nhan du lieu
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
	//Tao ket noi den server
	$conn = mysql_connect("localhost","root","") or die("khong the ket noi");
	
	//Quy d?nh b?ng mã utf8 cho câu truy v?n
	mysql_query("SET character_set_results=utf8", $conn);
	//Chon CSDL
	mysql_select_db("ql_thutuchanhchinh");
	//insert CSDL
    	
		$query="UPDATE TTHC SET  SoQD=N'" .$SoQD. "',TenTT=N'" .$TenTT. "', BoBanNganh=N'" .$BoBanNganh. "', CapTH=N'" .$CapTH. "', LoaiTT=N'" .$LoaiTT. "', LinhVuc=N'" .$LinhVuc. "', TrinhTuTH=N'" .$TrinhTuTH. "', CachTH=N'" .$CachTH. "', ThanhPhanHS=N'" .$ThanhPhanHS. "', DoiTuongTH=N'" .$DoiTuongTH. "', CoQuanTH=N'" .$CoQuanTH. "',CQThamQuyen=N'" .$CQThamQuyen. "',DCTiepNhan=N'" .$DCTiepNhan. "',CQUyQuyen=N'" .$CQUyQuyen. "',  HinhAnh=N'".$HinhAnh. "', KQTH=N'" .$KQTH. "', PhapLy=N'" .$PhapLy. "', YeuCau=N'" .$YeuCau. "' WHERE MATT=" .$MATT;
		$result=mysql_query($query);
		//Dong ket noi
	mysql_close($conn);
		echo "Da sua thanh cong";
		echo "<meta http-equiv='refresh' content= '5; URL=index.php'>";
		
    ?>

</body>
</html>