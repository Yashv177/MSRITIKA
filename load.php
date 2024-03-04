<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="POST" enctype="multipart/form-data">
        <input type="file" name="myimg" >
        <input type="submit" name="upload">
    </form>
    
</body>
</html>
<?php
   $Filename =  $_FILES['myimg']['name'];
   $tempename =  $_FILES['myimg']['tmp_name'];
     $Folder = 'product-img/'.$Filename;
        $Folder;
     move_uploaded_file($tempename, $Folder);
?>