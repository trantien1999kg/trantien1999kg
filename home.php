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
.content {
height: 400px;
width: 100%;
background-image:url(tthc.png) ;
background-size: cover
}
.text {
color: #fff;
position: absolute;
top: 10px;
left: 70px;
}

	</style>
	
	<tr> <td width="1000" height="200" colspan="3"> <img src="hinhanh/logo.png" width="804" height="95" />		</tr>
			 <audio src="hinhanh/Hentai.mp3" controls loop></audio>

	
	<div align="center"class="hero-banner"> 
<div class="container"> 
    <div class="maxw991"> 
     <div class="form-group"> 
      <div class="box-search -adv"> 
	  <div class="container-1" class="adv" data-toggle="modal" data-target="#advsearch" onclick="showAdvSearch()">
         
       
       <div class="box" > 
     <big>Tìm kiếm nâng cao</big> <span class="icon"><i class="fa fa-search"></i></span>
      <input type="search" id="search" placeholder="Search..." />
  </div>
       
	   
       
	   </div> 
      </div> 
     </div> 
	   
	 <?php      	
if(isset($_SESSION["login"])==true){

		echo "<a href='index.php'><big>Cổng Thông Tin Dịch Vụ Công</big></br></a>";
		
	}else echo "<a href='dangnhap.php'><big>Cổng Thông Tin Dịch Vụ Công</big></a>";      
  ?>    
  </div>  
      </div> 
     </div> 
    </div> 
   </div>
  </div>

</head>

<body>
<div align="center">
<tr>
			<td width="1000" height="1000" colspan="3">
            <img src="hinhanh/tthc.png" width="1200" height="600" /> 	
		</tr>
		</dib>
</body>
</html>
