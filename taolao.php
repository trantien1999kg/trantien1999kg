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
	<?php
if(isset($_SESSION["login"])==true){
echo "Xin chao "  . $_SESSION["username"];
		echo "<a href='dangxuat.php'>ĐĂNG XUẤT</br></a>";
		
		
	}else echo "<a href='dangnhap.php'>Mời Bạn Đăng Nhập</a>";

 ?>
 <audio src="hinhanh/Hentai.mp3" controls loop></audio>
 <div class="clear"></div>
 <div class="main">
 <ul class="admincp_list">
 
 <li><a href="QLDatLich.php">Quản Lý Lịch Hen</a></li>
 <li><a href="QLDatLich.php">Quản Lý Tài Khoản</a></li>
 <li><a href="DoiMatKhau.php">Đổi Mật Khẩu</a></li>
 
 
 </ul>
 </div>
 
	
	<div align="center"class="hero-banner"> 
<div class="container"> 
    <div class="maxw991"> 
     <div class="form-group"> 
      <div class="box-search -adv"> 
	  <div class="container-1" class="adv" data-toggle="modal" data-target="#advsearch" onclick="showAdvSearch()">
         
       
       <form action="index.php" method="post">
   <input type="text" name="txttimkiem" placeholder="Tìm Kiếm.."/>
   <input type="submit" name="timkiem" value="Tìm Kiếm"/><br /><br />
 <?php 
	$conn=mysql_connect("localhost","root","") or die ("Not Connect");
	mysql_query("SET character_set_results=utf8",$conn);
	mysql_select_db("ql_thutuchanhchinh");
	if(isset($_POST["timkiem"])){
		$timkiem = $_POST["txttimkiem"];
		if($timkiem == ''){echo "Vui lòng nhập mã thủ tục!<br>"; echo "<a href='index.php'>Danh Sách Nhân viên</a>";}
		else{
			$sql = "SELECT * FROM tthc WHERE MATT LIKE '%$timkiem%'";
			$query = mysql_query($sql);
			$count = mysql_num_rows($query);
			if($count <= 0){echo "Không tìm được mã nhân viên ".$timkiem. "<br>"; echo "<a href='index.php'>Danh Sách Nhân Viên</a>";}
			else{
				echo "Tìm thấy ".$count." nhân viên có mã ".$timkiem;
			?>
			<table border="1" bgcolor=FFFFCC>
				<tr>
					<td>MATT</td>
					<td>SoQD</td>
					<td>TenTT</td>
					<td>BoBanNganh</td>
					<td>CapTH</td>
					<td>LoaiTT</td>
					<td>LinhVuc</td>
					<td>TrinhTuTH</td>
					<td>CachTH</td>
					<td>DoiTuongTH</td>
					<td>CoQuanTH</td>
					<td>CQThamQuyen</td>
					<td>DCTiepNhan</td>
					<td>CQUyQuyen</td>
					<td>Thao tác</td>
					<td>HinhAnh</td>
					<td>KQTH</td>
					<td>PhapLy</td>
					<td>YeuCau</td>
					<td>Thao Tác</td>
					<td><center>Chọn</center></td>
				</tr>
				<?php while($row=mysql_fetch_array($query)){ ?>
				<tr>
					<td><?php echo $row['MATT']; ?></td>
					<td><img src="hinhanh/<?php echo $row['HinhAnh']  ?>"width='80' height='100' /></td>
					<td><?php echo $row['SoQD']; ?></td>
					<td><?php echo $row['TenTT']; ?></td>
					<td><?php echo $row['BoBanNganh']; ?></td>
					<td><?php echo $row['CapTH']; ?></td>
					<td><?php echo $row['LoaiTT']; ?></td>
					<td><?php echo $row['LinhVuc']; ?></td>
					<td><?php echo $row['TrinhTuTH']; ?></td>
					<td><?php echo $row['CachTH']; ?></td>
					<td><?php echo $row['ThanhPhanHS']; ?></td>
					<td><?php echo $row['DoiTuongTH']; ?></td>
					<td><?php echo $row['CoQuanTH']; ?></td>
					<td><?php echo $row['CQThamQuyen']; ?></td>
					<td><?php echo $row['DCTiepNhan']; ?></td>
					<td><?php echo $row['CQUyQuyen']; ?></td>
					<td><img src="hinhanh/<?php echo $row['HinhAnh']  ?>"width='80' height='100' /></td>
					<td><?php echo $row['KQTH']; ?></td>
					<td><?php echo $row['PhapLy']; ?></td>
					<td><?php echo $row['YeuCau']; ?></td>
					<td><?php echo "<a href='sua.php?MATT=" .$row["MATT"]."'>Sửa|</a>";?>
					<?php echo "<a href='xoa.php?MATT=" .$row["MATT"]."'>Xóa</a>";?> </td>
					
			</tr>
				<?php } ?>
			</table>
			<a href="index.php">Xong</a>
				<?php
					}
				}
			}else {
		?><?php } ?>
   </form>

       
	   
       
	   </div> 
      </div> 
     </div> 
     <div class="actions"> 
      <div class="row"> 
       <div class="btn-group" data-toggle="buttons">
        <button type="button" class="button" >Đăng Ký Thủ Tục Online</button> 
       </div> 
	    <div class="actions"> 
      <div class="row"> 
       <div class="btn-group" data-toggle="buttons">
        <button type="button" class="button" ><a href="FORMDatLich.php">Đặt Lịch Làm Thủ Tục</a></button> 
       </div> 
       
      </div> 
     </div> 
    </div> 
   </div>
  </div>

</head>
<body>

		
<div align="left">
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
	$Tongsodong = mysql_num_rows(mysql_query("SELECT * FROM tthc")) or die(mysql_error());
	//Tinh so trang
	$Sotrang = $Tongsodong / $Sodong_trentrang;
	if($Tongsodong % $Sodong_trentrang != 0){
	$Sotrang = $Tongsodong / $Sodong_trentrang + 1 ;
	}
		if(!isset($_GET['page']));
	//Tao cau truy van
	$sql = "SELECT * FROM tthc LIMIT " . ($page-1) * $Sodong_trentrang . "," . $Sodong_trentrang;

	//thuc hien truy van lay du lieu ra web
	//$sql="select * from sinhvien";
	$query=mysql_query($sql);
	//hien thi dl ra man hinh
	if (mysql_num_rows($query)==0)
		echo "Chưa Có Dữ Liệu";
	else{
			
		while($row = mysql_fetch_array($query)){
			
				echo "<h5>Mã Thủ Tục</h5> : " .$row["MATT"]. "<br>";
				
				echo "<h1>Số Quyết Định</h1> : " .$row["SoQD"]. "<br>";
				echo "<h1>Tên Thủ Tục</h1> : " .$row["TenTT"]. "<br>";
				echo "<h1>Bộ Ban Ngành</h1> : " .$row["BoBanNganh"]. "<br>";
				echo "<h1>Cấp Thực Hiện</h1> : " .$row["CapTH"]. "<br>";
				echo "<h1>Loại Thủ Tục</h1> : " .$row["LoaiTT"]. "<br>";
				echo "<h1>Lĩnh Vực</h1> : " .$row["LinhVuc"]. "<br>";
				echo "<h1>Trình Tự Thực Hiện</h1> : " .$row["TrinhTuTH"]. "<br>";
				echo "<h1>Cách Thực Hiện</h1> : " .$row["CachTH"]. "<br>";
				echo "<h1>Thành Phần Hồ Sơ</h1> : " .$row["ThanhPhanHS"]. "<br>";
				echo "<h1>Đối Tượng</h1> : " .$row["DoiTuongTH"]. "<br>";
				echo "<h1>Cơ Quan Hành Chính</h1> : " .$row["CoQuanTH"]. "<br>";
				echo "<h1>Cơ Quan Thẩm Quyền</h1> : " .$row["CQThamQuyen"]. "<br>";
				echo "<h1>Địa Chỉ Tiếp Nhận</h1> : " .$row["DCTiepNhan"]. "<br>";
				echo "<h1>Cơ Quan Uỷ Quyền</h1> : " .$row["CQUyQuyen"]. "<br>";
				echo "<h1>Mẫu Đơn </h1><td><img src='hinhanh/".$row["HinhAnh"]."' width='120' height='200' /><br>";
				echo "<h1>Kết Qủa</h1> : " .$row["KQTH"]. "<br>";
				echo "<h1>Pháp Lý</h1> : " .$row["PhapLy"]. "<br>";
				echo "<h1>Yêu Cầu</h1> : " .$row["YeuCau"]. "<br>";
				echo "<h1>Thao Tác : </h1><a href ='sua.php?MATT=" .$row ["MATT"]."'>Sửa|</a>";
				echo " <a href ='xoa.php?MATT=" .$row ["MATT"]."'>Xóa|</a><br>";
				
		}
		}
		//DongKetNoi
		mysql_close($conn);
		/////////////In so tong so trang cho nguoi dung chon
	for ( $page = 1; $page <= $Sotrang; $page ++ ){
		echo "<a href='index.php?page={$page}'>{$page} </a>";
		
	}
	?>
	</div>
<div align="center"><a href="them.php">THÊM</a></div>

<div align="center"><img src="hinhanh/duoi.png" width="700" height="200" />
</html>
