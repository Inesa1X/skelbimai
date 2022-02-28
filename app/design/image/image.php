<html>
<head>
    <title>Upload an image</title>
</head>
<body>
<form action="localhost/oop/images/foto.png" method="POST" enctype="multipart/form-data">

    <input type="file" name="image"> <input type="submit" value="Upload">
</form>
<?php