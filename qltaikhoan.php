<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
		.border{
			border: solid 1px teal;

		}
		.button {
  background-color: Crimson;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.container-1 .icon{
  position: absolute;
  top: 50%;
  margin-left: 17px;
  margin-top: 17px;
  z-index: 1;
  color: #4f5b66;
}
	</style>
	
	<tr>
			<td width="1000" height="200" colspan="3">
            <img src="hinhanh/logo.png" width="804" height="95" />		</tr>



</head>
<body>

		
<div align="center">
	<?php 
	//ket noi csdl
	$conn=mysql_connect("localhost","root","") or die ("Không Thể Kết Nối");
	//set ma utf-8 cho kq tra ve
	mysql_query("SET character_set_results=utf8",$conn);
	//chon CSDL
	mysql_select_db("ql_thutuchanhchinh");
	/////////////PHAN TRANG/////////////////////
	//Qui dinh so dong tren 1 trang
	$Sodong_trentrang = 2;
	//Trang mac dinh la 1
	if (!isset($_GET['page']))
		$page = 1;
	else $page = $_GET['page'];

	//Dem tong so dong trong bang du lieu
	$Tongsodong = mysql_num_rows(mysql_query("SELECT * FROM user")) or die(mysql_error());
	//Tinh so trang
	$Sotrang = $Tongsodong / $Sodong_trentrang;
	if($Tongsodong % $Sodong_trentrang != 0){
	$Sotrang = $Tongsodong / $Sodong_trentrang + 1 ;
	}
		if(!isset($_GET['page']));
	//Tao cau truy van
	$sql = "SELECT * FROM user LIMIT " . ($page-1) * $Sodong_trentrang . "," . $Sodong_trentrang;

	//thuc hien truy van lay du lieu ra web
	//$sql="select * from sinhvien";
	$query=mysql_query($sql);
	//hien thi dl ra man hinh
	if (mysql_num_rows($query)==0)
		echo "Chưa Có Dữ Liệu";
	else{echo "<table border=1 bgcolor=LightGoldenRodYellow>";
		echo "<tr bgcolor=LightGoldenRodYellow>";
			echo "<td>Tên Tài Khoản</td>";
			echo "<td>Mật Khẩu</td>";
			echo "<td>Họ Tên</td>";
			echo "<td>Hình Ảnh</td>";
			echo "<td>Thao Tác</td>";
			
			

			
		echo "</tr>";
		while($row = mysql_fetch_array($query)){
			echo "<tr bgcolor=LightGoldenRodYellow>";
				echo "<td>" .$row["username"]. "</td>";
				echo "<td>" .$row["password"]. "</td>";
				echo "<td>" .$row["HoTen"]. "</td>";
			
				
				
				echo "<td><img src='hinhanh/".$row["HinhAnh"]."' width='200' height='200' /></td>";
				echo "<td><a href ='xoataikhoan.php?MATT=" .$row ["username"]."'>Xóa|</a></td>";
				
			echo "</tr>";
		}
		echo "</table>";
		}
		//DongKetNoi
		mysql_close($conn);
		/////////////In so tong so trang cho nguoi dung chon
	for ( $page = 1; $page <= $Sotrang; $page ++ ){
		echo "<a href='qltaikhoan.php?page={$page}'>{$page} </a>";
		
	}
	?>
</div>

<div align="center"><img src="hinhanh/duoi.png" width="700" height="200" />
</html>
