<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<span> 上传文件测试Demo </span>
<form action="/index.php/Admin/Demo/upload" method='post' enctype='multipart/form-data'>
    <br />
    <input type="file" name="photo1" />
    <br />
    <input type="submit" value="提交"></input>
</form>
</body>
</html>