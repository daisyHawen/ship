<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
<form action="doAction2.php" method="post" enctype="multipart/form-data">
	<input type="hidden" name="MAX_FILE_SIZE" value="512000">
	请选择上传文件：<input type="file"  name="myFile[]"  /><br/>
	请选择上传文件：<input type="file"  name="myFile[]"  /><br/>
	请选择上传文件：<input type="file"  name="myFile[]"  /><br/>
	<input type="submit" value="上传"/>
</form>
</body>
</html>