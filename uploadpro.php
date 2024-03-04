<?php
    include('Components/config_db.php');
    $Filename =$_FILES["Img"]["name"];
            $Tempname = $_FILES["Img"]["tmp_name"];
            $Folder = "product-img/".$Filename;
             $Folder;
             move_uploaded_file($Tempname,$Folder);
    if(isset($_POST['submit'])){
        //img upload pro.
        $Filename =  $_FILES['myimg']['name'];
        $tempename =  $_FILES['myimg']['tmp_name'];
          $Folder = 'product-img/'.$Filename;
             $Folder;
          move_uploaded_file($tempename, $Folder);
//img end

//variable decleeration 
            $Name = $_POST['proname'];
            $Code = $_POST['procode'];
            $weight = $_POST['proweight'];
            $price = $_POST['proprice'];
            $fish = $_POST['profish'];
            $type = $_POST['protype'];
            $note = $_POST['pronote'];

            //end variable

            //insert qurry

        $Sql ="INSERT INTO `product` (`code`, `Image`, `Name`, `weight`, `price`, `fishing`, `type`, `note`) VALUES 
        ('".$Code."', '".$Folder."', '".$Name."', '".$weight."', '".$price."', '".$fish."','".$type."', '".$note."')";
            if(mysqli_query($conn,$Sql)){
          echo "<script> alert('data submitted')</script>";
          echo "<script> window.location.href='Upload.php' </script>";            
            }else{
                echo "<script> alert('server down')</script>";

            }

        }
?>