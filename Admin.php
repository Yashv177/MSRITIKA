<?php
session_start();
if(isset($_SESSION['username'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>

    <div class="header">
        <h1 align="center">Welcome to Ritika</h1>
    </div>
        <div class="menu">
            <ul>
                <li>                            
                    <a href="Logout.php">Logout</a>
                </li>
                <li><a href="Upload.php" target="Mainarea">Upload</a></li>
                <li><a href="#">Edit</a></li>
            </ul>
        </div>
        <iframe src="" frameborder="0" height="880px" width="100%"align="right" name="Mainarea"></iframe>

</body>
</html>
<?php }else{
	 header('location:Login.php?err=2');
} ?>