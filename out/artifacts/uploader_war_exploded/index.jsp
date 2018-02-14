<%--
  Created by IntelliJ IDEA.
  User: dwass
  Date: 1/22/2018
  Time: 6:14 PM
  To change this template use File | Settings | File Templates.
--%>
<%@ page contentType="text/html;charset=UTF-8" language="java" %>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
<h1 style="text-align:center;"> Upload a photo! </h1>
<form action="UploaderServlet" method="POST" enctype="multipart/form-data">
<input type="file" name="file"  class="btn btn-block btn-info">
<button style="text-align:center;" type="submit" name="submit" value ="Upload" >Upload</button

</form>

</body>
</html>
