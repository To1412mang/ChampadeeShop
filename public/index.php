<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
    <meta charset="UTF-8">
    <title>Home page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * {box-sizing: border-box;}

        body {
            margin: 0;
            font-family: Arial;
        }

        .header {
            overflow: hidden;
            background-color: #f1f1f1;
            padding: 20px 10px;
        }

        .header a {
            float: left;
            color: black;
            text-align: center;
            padding: 12px;
            text-decoration: none;
            font-size: 18px;
            line-height: 25px;
            border-radius: 4px;
        }

        .header a.logo {
            font-size: 25px;
            font-weight: bold;
        }

        .header a:hover {
            background-color: #ddd;
            color: black;
        }

        .header a.active {
            background-color: dodgerblue;
            color: white;
        }

        .header-right {
            float: right;
        }

        @media screen and (max-width: 500px) {
            .header a {
                float: none;
                display: block;
                text-align: left;
            }
            .header-right {
                float: none;
            }
        }
        img{
            width: 100%;
            height: auto;
        }
    </style>
</head>
<body>

<div class="header">
    <a href="index.php" class="logo"> <img src="image/SCSUChampadeeBranding-4.png" class="img-responsive"
                                           alt="ChampadeeShop" width="400" height="200"></a>
    <div class="header-right">
        <a class="active" href="#home">Home</a>
        <a href="#contact">Contact</a>
        <a href="#about">About</a>
        <div class="search-container">
            <form action="image/icon/png/search.php">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>
</div>

<!--<div class="container">-->
<!--    <div class="topnav">-->
<!--        <div class="row">-->
<!--<!--            <div class="col-xs-3 col-md-3 col-lg-3 ">-->-->
<!--                <a href="index.php"> <img src="image/SCSUChampadeeBranding-4.png" class="img-responsive"-->
<!--                                          alt="ChampadeeShop" style="width: 100%"></a>-->
<!--<!--            </div>-->-->
<!--<!--            <div class="col-xs-5 col-md-5 col-lg-5 "> -->-->
<!--                <a class="active" href="#home">Home</a>-->
<!--<!--            </div>-->-->
<!--<!--            <div class="col-xs-2 col-md-2 col-lg-2 "> -->-->
<!--                <a href="#about">About</a>-->
<!--<!--            </div>-->-->
<!--<!--            <div class="col-xs-2 col-md-2 col-lg-2 "> -->-->
<!--                <a href="#contact">Contact</a>-->
<!--<!--            </div>-->-->
<!--            <div class="search-container">-->
<!--                <form action="image/icon/png/search.php">-->
<!--                    <input type="text" placeholder="Search.." name="search">-->
<!--                    <button type="submit"><i class="fa fa-search"></i></button>-->
<!--                </form>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
    <!--        <div class="header">-->
    <!--            <ul id="navlist"> -->
    <!--                <li id="home"> <a href="index.php"> <img src="image/SCSUChampadeeBranding-4.png" class="img-responsive" alt="ChampadeeShop" width="200" height="Auto"></a> </li>-->
    <!--            </ul>-->
    <!--        </div>-->
</body>
</html>
