<!DOCTYPE html>
<html lang="en">
<head>
    <title>TEST</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>
        * {
            box-sizing: border-box
        }

        body {
            font-family: Silapakorn72, Fixedsys Regular, Verdana, sans-serif;
            margin: 0
        }

        .mySlides {
            display: none
        }

        img {
            vertical-align: middle;
        }

        a {
            text-align: center;
            /*text-decoration: overline;*/
        }

        /* --------------start image slide--------------------------------------------*/
        /* Position the image container (needed to position the left and right arrows) */
        .container {
            position: relative;
            width: 100%;
            max-width: 400px;
        }

        /* Hide the images by default */
        .mySlides {
            display: none;
        }

        /* Next & previous buttons */
        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 40%;
            width: auto;
            padding: 16px;
            margin-top: -50px;
            color: white;
            font-weight: bold;
            font-size: 20px;
            border-radius: 0 3px 3px 0;
            user-select: none;
            -webkit-user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover,
        .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active, .dot:hover {
            background-color: #717171;
        }

        /* -----------------------------------stop image slide--------------------------------------------*/

        /* -------------------------------------start search--------------------------------------------*/
        input[type=text] {
            width: 50%;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            background-color: white;
            background-image: url('http://localhost/ChampadeeShop/image/icon/search/002-searching-magnifying-glass.png');
            background-position: 10px 10px;
            background-repeat: no-repeat;
            padding: 12px 20px 12px 40px;
        }

        /* ---------------------------------------stop search--------------------------------------------*/

        <!-- /* -----------------------------------start image Gallery--------------------------------------------*/
        -->
        div.gallery {
            border: 1px solid #ccc;
        }

        div.gallery:hover {
            border: 1px solid #777;
        }

        div.gallery img {
            width: 100%;
            height: auto;
        }

        div.desc {
            padding: 15px;
            text-align: center;
        }

        * {
            box-sizing: border-box;
        }

        .responsive {
            padding: 0 6px;
            float: left;
            width: 24.99999%;
        }

        @media only screen and (max-width: 700px) {
            .responsive {
                width: 49.99999%;
                margin: 6px 0;
            }
        }

        @media only screen and (max-width: 500px) {
            .responsive {
                width: 100%;
            }
        }

        .clearfix:after {
            content: "";
            display: table;
            clear: both;
        }

        <!-- /* -----------------------------------End image Gallery--------------------------------------------*/-->


    </style>
</head>

<body>

<!--/* --------------------------------------Start header--------------------------------------------*/-->

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a href="index.php" class="navbar-brand">Champadee Shop</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">หน้าแรก</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">ประเภท<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">แก้วน้ำ</a></li>
                        <li><a href="#">เสื้อ</a></li>
                        <li><a href="#">กระบอกน้ำ</a></li>

                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">อุปกรณ์การเรียน<span
                                        class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">ปากกา</a></li>
                                <li><a href="#">สมุด</a></li>
                            </ul>
                        </li>

                        <li><a href="#">ขนม</a></li>
                        <li><a href="#">ยาทาเล็บ</a></li>

                    </ul>
                </li>
                <li><a href="#">Page 2</a></li>
            </ul>


            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><img src="image/icon/png/shop.png" width="30px"> </a></li>
                <li><a href="login.php"><img src="image/chamdee-head1.png" width="60px"></a></li>
            </ul>
            <!--/* --------------------------------------Start Search--------------------------------------------*/-->
            <!--<form class="navbar-form navbar-left" action="/action_page.php">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" name="search">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </div>
                </div>

            </form>-->
            <form>
                <input type="text" name="search" placeholder="Search..">
            </form>

            <!--/* --------------------------------------Stop Search--------------------------------------------*/-->

        </div>
    </div>
</nav>

<!--/* ------------------------------------------End header--------------------------------------------*/-->

<!--/* -----------------------------------start image slide--------------------------------------------*/-->

<div class="container">
    <div class="mySlides">
        <div class="numbertext">1 / 5</div>
        <img src="image/Bown+ColourfullChampadeeMug.png" style="width:100%">
    </div>

    <div class="mySlides">
        <div class="numbertext">2 / 5</div>
        <img src="image/ChampadeeCALICOBAG.png" style="width:100%">
    </div>


    <div class="mySlides">
        <div class="numbertext">3 / 5</div>
        <img src="image/ChampadeeWATERBOTTLES.png" style="width:100%">
    </div>

    <div class="mySlides">
        <div class="numbertext">4 / 5</div>
        <img src="image/ColourfullChampadeeMug.png" style="width:100%">
    </div>

    <div class="mySlides">
        <div class="numbertext">5 / 5</div>
        <img src="image/BownChampadeeMug.png" style="width:100%">
    </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <br>
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
        <span class="dot" onclick="currentSlide(5)"></span>
    </div>

</div>
<!--/* -----------------------------------End image slide--------------------------------------------*/-->

<!--/* -----------------------------------start image Gallery--------------------------------------------*/-->
<br>
<div class="responsive">
    <div class="gallery">
        <a target="_blank" href="image/Bown+ColourfullChampadeeMug.png">
            <img src="image/Bown+ColourfullChampadeeMug.png" alt="Trolltunga Norway" width="300" height="200">
        </a>
        <div class="desc">Add a description of the image here</div>
    </div>
</div>


<div class="responsive">
    <div class="gallery">
        <a target="_blank" href="image/BownChampadeeMug.png">
            <img src="image/BownChampadeeMug.png" alt="Forest" width="600" height="400">
        </a>
        <div class="desc">Add a description of the image here</div>
    </div>
</div>

<div class="responsive">
    <div class="gallery">
        <a target="_blank" href="image/ChampadeeCALICOBAG.png">
            <img src="image/ChampadeeCALICOBAG.png" alt="Northern Lights" width="600" height="400">
        </a>
        <div class="desc">Add a description of the image here</div>
    </div>
</div>

<div class="responsive">
    <div class="gallery">
        <a target="_blank" href="image/ChampadeeWATERBOTTLES.png">
            <img src="image/ChampadeeWATERBOTTLES.png" alt="Mountains" width="600" height="400">
        </a>
        <div class="desc">Add a description of the image here</div>
    </div>
</div>

<div class="responsive">
    <div class="gallery">
        <a target="_blank" href="image/ColourfullChampadeeMug.png">
            <img src="image/ColourfullChampadeeMug.png" alt="Mountains" width="600" height="400">
        </a>
        <div class="desc">Add a description of the image here</div>
    </div>
</div>

<div class="responsive">
    <div class="gallery">
        <a target="_blank" href="image/SCSUChampadeeBranding-1.png">
            <img src="image/SCSUChampadeeBranding-1.png" alt="Trolltunga Norway" width="300" height="200">
        </a>
        <div class="desc">Add a description of the image here</div>
    </div>
</div>


<div class="responsive">
    <div class="gallery">
        <a target="_blank" href="image/SCSUChampadeeBranding-1.png">
            <img src="image/SCSUChampadeeBranding-1.png" alt="Forest" width="600" height="400">
        </a>
        <div class="desc">Add a description of the image here</div>
    </div>
</div>

<div class="responsive">
    <div class="gallery">
        <a target="_blank" href="image/SCSUChampadeeBranding-1.png">
            <img src="image/SCSUChampadeeBranding-1.png" alt="Northern Lights" width="600" height="400">
        </a>
        <div class="desc">Add a description of the image here</div>
    </div>
</div>

<!--/* -----------------------------------End image Gallery--------------------------------------------*/-->

<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
    }
</script>

</body>
</html>

