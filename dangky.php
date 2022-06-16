<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	font-size: 36px;
	font-weight: bold;
	color: #CC6633;
}
-->
</style>
<div align="center">
<tr>
			<td width="1000" height="200" colspan="3">
            <img src="hinhanh/logo.png" width="1072" height="164" /> 	
		</tr>

</head>

<body>
<div align="center">

  <form action="register.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <script src="//tinymce.cachefly.net/4.2/tinymce.min.js"></script>
<script>tinymce.init({selector:'textarea'});</script>
    <p class="style1">Đăng Ký </p>
	<hr>
	
    <table width="1050" height="405" border="0">
      
	  
      <tr>
        <td height="59">Username</td>
        <td><label>
          <input name="username" type="text" size="100" />
        </label></td>
      </tr>
      <tr>
        <td height="66">Password</td>
        <td><label>
          <input name="password" type="text" size="100" />
        </label></td>
      </tr>
	  <tr>
        <td height="55">Họ Tên </td>
        <td><label>
          <input name="HoTen" type="text" size="100" />
        </label></td>
      </tr>
	  
      <tr>
        <td height="215">Ảnh Đại Diện </td>
        <td><label>
		<img src="hinhanh/<?php echo $HinhAnh;?>" width='200' height='130' />
			<br>
          <input name="file" type="file" size="100" />
        </label></td>
      </tr>
	  
    </table>
    <p>
      <label>
      <input name="Submit" type="submit" class="style1" value="Đăng Ký" />
      </label>
    </p>
  </form>
  <div align="center"><img src="hinhanh/baner.png" width="1300" height="50" /></div>

</div>
</body>
</html>
