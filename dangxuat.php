<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<tr>
			<td width="1000" height="200" colspan="3">
            <img src="hinhanh/logo.png" width="804" height="95" />		</tr>
</head>

<body>
<?php
	session_destroy();
	echo "Log out!";
	echo "<meta http-equiv='refresh' content ='2;URL=home.php'>";
?>

</body>
</html>
