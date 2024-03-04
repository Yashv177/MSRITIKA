<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>Door Handle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="door.css">
    <link rel="stylesheet" href="Home.css">
    <link rel="stylesheet" href="navi.css">
</head>

<body>
    <div class="main">
    <header>
            <a href="index.html" class="logo"><img src="Photos/logo.png" alt=""></a>
            <div class="group">
                <ul class="navigation">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="About.html">About</a></li>
                    <li><a href="#">Product</a>
                        <ul class="dropdown">
                            <li><a href="door.php">Door handle</a>
                            <li><a href="window.php">Window</a>
                            <li><a href="knoob.php">Knoobs</a>
                            <li><a href="bracket.php">Bracket</a>
                        </ul>
                    </li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="Login.php">Login</a></li>
                </ul>
                <div class="search">
                    <span class="icon">
                        <ion-icon name="search-outline" class="searchBtn"></ion-icon>
                        <ion-icon name="close-outline"class="closeBtn"></ion-icon>
                    </span>
                </div>
                <ion-icon name="menu-outline" class="menutoggle"></ion-icon>
            </div>
            <div class="searchBox">
                <form action="search.php" method="post" enctype="" width="100%">
                    <input type="text" name="search" class="textinput" placeholder="search here..........">
                    <input type="hidden" name="submit">
                </form>
            </div>
        </header>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    
        <script>
            let searchBtn = document.querySelector('.searchBtn');
            let closeBtn = document.querySelector('.closeBtn');
            let searchBox = document.querySelector('.searchBox');
            let textinput = document.querySelector('.textinput');
            let navigation = document.querySelector('.navigation');
            let menutoggle = document.querySelector('.menutoggle');
            let header = document.querySelector('header');
    
            searchBtn.onclick = function(){
                searchBox.classList.add('active');
                closeBtn.classList.add('active');
                searchBtn.classList.add('active');
                textinput.classList.add('active');
                menutoggle.classList.add('hide');
                header.classList.remove('open');
    
            }
         
            closeBtn.onclick = function(){
                    searchBox.classList.remove('active');
                    closeBtn.classList.remove('active');
                    searchBtn.classList.remove('active');
                    textinput.classList.remove('active');
                    menutoggle.classList.remove('hide');
                }
                menutoggle.onclick = function(){
                    header.classList.toggle('open');
                    searchBox.classList.remove('active');
                    closeBtn.classList.remove('active');
                    searchBtn.classList.remove('active');
                }
        </script>
 </div>
<br> <?php
    include('Components\config_db.php');
    $Sql = " SELECT * FROM product WHERE type='door' ";
    $Result = mysqli_query($conn, $Sql);
    $i = 0;
    while ($Row = mysqli_fetch_assoc($Result)) {
        $i++;
        ?>
        <div class="col-md-3">
            <div class="card">
                <img src="<?= $Row['Image'] ?>" alt="">
                <div class="card-body">
                    <h1>
                        <?= $Row['Name'] ?>
                    </h1>
                    <p>
                       <span>Code:-</span> <?= $Row['code'] ?>
                    </p>
                    <p>
                       <span>Weight:-</span> <?= $Row['weight'] ?>
                    </p>
                    <p>
                       <span>Finishing:-</span> <?= $Row['fishing'] ?>
                    </p>
                    <p>
                       <span>Type:-</span> <?= $Row['type'] ?>
                    </p>
                    <h3>
                        <span>Price:-</span> <?= $Row['price'] ?> + GST 18%
                    </h3>
                    <p>
                     <span>Note:-</span>   <?= $Row['note'] ?>
                    </p>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
<br>

   
</body>

</html>