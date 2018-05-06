<!DOCTYPE html>
<html lang="en th">
<head>
    <title>SCSU Champadee Shop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--------------start popup--------------->

    <!--------------end popup--------------->
    <style>

        body {
            font-family: "TH Sarabun New", "Browallia New", Arial, Helvetica, sans-serif;

        }

        * {
            box-sizing: border-box;

        }

        /* Remove the navbar's default rounded borders and increase the bottom margin */
        .navbar {
            margin-bottom: 20px;
            border-radius: 0;
            font-size: 14pt;

        }

        /* Remove the jumbotron's default bottom margin */
        .jumbotron {
            margin-bottom: 0;
            background: #fff5cc;
        }

        /* Add a gray background color and some padding to the footer */
        footer {
            background-color: #f2f2f2;
            padding: 20px;
        }

        .responsive {
            width: 100%;
            max-width: 300px;
            height: auto;
        }

        /* --------------start image slide--------------------------------------------*/

        /* Position the image container (needed to position the left and right arrows) */
        .container1 {
            position: relative;
            width: 50%;
            max-width: 400px;
            display: block;
            margin-left: auto;
            margin-right: auto;

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
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -50px;
            color: #f2f2f2;
            font-weight: bold;
            font-size: 20px;
            border-radius: 0 3px 3px 0;
            user-select: none;
            -webkit-user-select: none;
            text-decoration: none;
        }

        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover,
        .next:hover {
            background-color: rgba(0, 0, 0, 0.3);
            text-decoration: none;
            color: white;
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #ffcc00;
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

        .container-fluid {
            background: #ffcc00;
            font-weight: bold;
            font-size: 24px;

        }

        .responsive-1 {
            width: 100%;
            max-width: 90px;
            height: auto;
            margin-right: 10px;
            display: block;
            position: relative;
        }

        .collapse {
            margin-top: 10px;
        }

        /* คำอธิบายใต้ภาพ */
        div.desc {
            /*padding: 15px;*/
            text-align: center;
            margin-bottom: 20px;
            text-decoration: none;
            font-size: 16pt;

        }

        .A {
            text-decoration: none;
            color: #ffcc00;
        }

        /* End คำอธิบายใต้ภาพ */

        .navbar-toggle {
            margin-top: 20px;
        }

        h2 {
            font-size: 16pt;
        }

        /*--------------- Start Top --------------*/

        .buttonTop {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        #myBtn {
            display: none;
            position: fixed;
            bottom: 20px;
            right: 30px;
            z-index: 99;
            font-size: 22px;
            border: none;
            outline: none;
            background-color: #ff6600;
            color: white;
            cursor: pointer;
            padding: 10px 20px;
            border-radius: 5px;
        }

        #myBtn:hover {
            background-color: #b3b3b3;
        }

        /*--------------- End Top --------------*/

        /* ---------------- Start Footer -------------------*/

        img.sc {
            border-radius: 10px;
        }

        h3 {
            font-size: 20pt;
        }

        /* ---------------- End Footer -------------------*/

        /*---------------------- Start recomment ------------------------*/

        div.recommended-1:Hover, a.recommended-1:Hover, a.A:Hover {
            background: #fff2e6;
            border-radius: 10px;
            text-decoration: none;
            font-size: 16pt;
            /*padding: 5px;*/
            color: #e67300;
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        }

        /*---------------------- End recomment ------------------------*/

        /*--------------------- Start DropDown ------------------------*/
        /*เพิ่มในส่วน login register */
        .down {
            padding: 8px;
            margin-left: 6px;
            text-decoration: none;

        }
        a.down{
            text-decoration: none;
            color: #a6a6a6;
        }
        a.down:hover{
            color: #f1f1f1;
        }
        ul.down{
            font-size: 16pt;
        }
        /*เพิ่มในส่วน login register */

        .down-1, .down-1:Hover {
            text-decoration: none;
            color: #a6a6a6;
        }

        .down-1 {
            color: #a6a6a6;
            text-decoration: none;
        }

        .down-2 {
            font-size: 16pt;

        }

        .dropdown-submenu {
            position: relative;
        }

        .dropdown-submenu .dropdown-menu {
            top: 0;
            left: 100%;
            margin-top: -1px;
        }

        /*--------------------- End DropDown ------------------------*/

        /*------------------------- Start search ------------------------------*/

        input.search[type=text] {
            width: 120px;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
            font-size: 14pt;
            background-color: white;
            background-image: url('image/magnifying-glass.png');
            background-position: 10px 10px;
            background-repeat: no-repeat;
            padding: 12px 20px 12px 40px;
            -webkit-transition: width 0.4s ease-in-out;
            transition: width 0.4s ease-in-out;
            margin-bottom: 10px;
            margin-left: 5px;
        }

        input[type=text]:focus {
            width: 100%;
        }

        /*------------------------- End search ------------------------------*/

        .H1 {
            border-bottom: 6px solid #99cc00;
            border-radius: 3px;
        }

        .dot1 {
            height: 25px;
            width: 25px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            text-decoration: none;
            box-shadow: 3px 3px 6px 0 rgba(0, 0, 0, 0.2);
            margin-top: 10px;
        }

        a.dot2, a.dot2:Hover {
            text-decoration: none;
        }

        h5 {
            margin-top: 100px;
            font-size: 16pt;
            color: #e67300;
        }

        h5:hover {
            color: black;
        }

        /*------------ Start popup ------------*/


        /*------------ End popup ------------*/

    </style>
</head>
<body>

<div class="jumbotron">
    <div class="container2 text-center">
        <!--        <h1>Champadee Shop</h1>--> <!-- class="img-responsive"-->
        <img src="image/SCSUChampadeeBranding-4.png" alt="ChampadeeShop" width="500px" height="250px"
             class="responsive">
        <!--        <br><br>-->
        <!--        <p>Champadee Shop</p>-->
    </div>
</div>

<!---------------------------------- Start header ----------------------------------------------->
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="index.php"> <img src="image/logo-1.png" class="responsive-1"></a>
            <!--            <a class="navbar-brand" href="#">Logo</a>-->
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">หน้าแรก</a></li>
                <li>
                    <div class="dropdown down">
                        <a data-toggle="dropdown" class="down-1">ประเภทสินค้า <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="category.php" class="down-2">ทั้งหมด</a></li>
                            <li><a href="mug.php" class="down-2">แก้ว</a></li>
                            <li><a href="bag.php" class="down-2">กระเป๋า</a></li>
                            <li><a href="waterBottle.php" class="down-2">กระบอกน้ำ</a></li>
                            <li class="dropdown-submenu">
                                <a class="down-2">เสื้อ<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="TandShirt.php" style="font-size: 16pt">เสื้อทั้งหมด</a></li>
                                    <li><a href="shirt.php" style="font-size: 16pt">เสื้อคอปก</a></li>
                                    <li><a href="T-shirt.php" style="font-size: 16pt">เสื้อยืด</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </li>
                <li><a href="#" class="B">ขั้นตอนการชำระเงิน</a></li>
                <li><a href="AboutUs.php" class="B">เกี่ยวกับเรา</a></li>

                <!----------------------- Start Search ------------------------------>
                <li>
                    <form class="search">
                        <input class="search" type="text" name="search" placeholder="Search..">
                    </form>
                </li>
                <!----------------------- End Search ------------------------------>

            </ul>


            <ul class="nav navbar-nav navbar-right">
                <!-----------------Start Register and Popup---------------->

                <li>
                    <div class="dropdown down">
                        <a href="#" data-toggle="dropdown" class="down">ลงชื่อเข้าใช้</a>
                        <ul class="dropdown-menu down" style="background: #fff2e6">
                            <li><a href="login.php">Login</a></li>
                            <li><a href="register.php">สมัครสมาชิก</a></li>
                        </ul>
                </li>

                <!-----------------End Register---------------->
                <li><div class="down">
                        <a href="#" class="down"><span class="glyphicon glyphicon-shopping-cart"></span> ตระกร้าสินค้า</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!---------------------------------- End header ----------------------------------------------->

<!--/* -----------------------------------start image slide--------------------------------------------*/-->

<div class="container1">

    <div class="mySlides">
        <div class="numbertext">1 / 8</div>
        <img src="image/Mug/Bown+ColourfullChampadeeMug.png" style="width:100%">
    </div>

    <div class="mySlides">
        <div class="numbertext">2 / 8</div>
        <img src="image/Bag/ChampadeeCALICOBAG.png" style="width:100%">
    </div>


    <div class="mySlides">
        <div class="numbertext">3 / 8</div>
        <img src="image/Bottle/ChampadeeWATERBOTTLES.png" style="width:100%">
    </div>

    <div class="mySlides">
        <div class="numbertext">4 / 8</div>
        <img src="image/Mug/ColourfullChampadeeMug.png" style="width:100%">
    </div>

    <div class="mySlides">
        <div class="numbertext">5 / 8</div>
        <img src="image/Mug/BownChampadeeMug.png" style="width:100%">
    </div>

    <div class="mySlides">
        <div class="numbertext">6 / 8</div>
        <img src="image/T-Shirt/T-shirtV.png" style="width:100%">
    </div>

    <div class="mySlides">
        <div class="numbertext">7 / 8</div>
        <img src="image/T-Shirt/T-shirtC.png" style="width:100%">
    </div>

    <div class="mySlides">
        <div class="numbertext">8 / 8</div>
        <img src="image/Shirt/shirt-1.png" style="width:100%">
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
        <span class="dot" onclick="currentSlide(6)"></span>
        <span class="dot" onclick="currentSlide(7)"></span>
        <span class="dot" onclick="currentSlide(8)"></span>
    </div>

</div>
<!--/* -----------------------------------End image slide--------------------------------------------*/-->

<br><br>
<div class="container">
    <div class="row">
        <h1 class="H1">สินค้าแนะนำ</h1>
        <div class="col-sm-3 recommended-1">
            <a href="Description-bottle.php" class="A">
                <div class="panel-body"><img src="image/Bottle/ChampadeeWATERBOTTLES.png" class="img-responsive"
                                             style="width:100%" alt="Image"></div>
                <div class="desc">Champadee WATER BOTTLES</div>
            </a>
        </div>


        <div class="col-sm-3 recommended-1">
            <a href="Description-bottle.php" class="A">
                <div class="panel-body"><img src="image/Bag/ChampadeeCALICOBAG.png" class="img-responsive"
                                             style="width:100%" alt="Image"></div>
                <div class="desc">Champadee CALICO BAG</div>
            </a>
        </div>

        <div class="col-sm-3 recommended-1">
            <a href="Description-Tshirt.php" class="A">
                <div class="panel-body"><img src="image/T-Shirt/T-shirt.jpg" class="img-responsive"
                                             style="width:100%" alt="Image"></div>
                <div class="desc">ChampaDee T-Shirt</div>
            </a>
        </div>

        <div class="col-sm-3 recommended-1">
            <a href="Description-mugBown.php" class="A">
                <div class="panel-body"><img src="image/Mug/BownChampadeeMug.png" class="img-responsive"
                                             style="width:100%" alt="Image"></div>
                <div class="desc">BROWN ChampaDee MUG</div>
            </a>
        </div>

        <div class="col-sm-3 recommended-1">
            <a href="Description-mug.php" class="A">
                <div class="panel-body"><img src="image/Mug/Bown+ColourfullChampadeeMug.png" class="img-responsive"
                                             style="width:100%" alt="Image"></div>
                <div class="desc">COLOURFULL + BROWN ChampaDee MUG</div>
            </a>
        </div>

        <div class="col-sm-3 recommended-1">
            <a href="Description-shirt.php" class="A">
                <div class="panel-body"><img src="image/Shirt/shirt-1.png" class="img-responsive"
                                             style="width:100%" alt="Image"></div>
                <div class="desc">ChampaDee Shirt</div>
            </a>
        </div>

        <div class="col-sm-3 recommended-1">
            <a href="Description-mugColor.php" class="A">
                <div class="panel-body"><img src="image/Mug/ColourfullChampadeeMug.png" class="img-responsive"
                                             style="width:100%" alt="Image"></div>
                <div class="desc">COLOURFULL ChampaDee MUG</div>
            </a>
        </div>
        <a href="category.php" class="dot2">
            <div class="col-sm-3 dot2" style="text-align:center">
                <h5><b>ดูสินค้าเพิ่มเติม</b></h5>
                <span class="dot1"></span>
                <span class="dot1"></span>
                <span class="dot1"></span>
                <span class="dot1"></span>
            </div>
        </a>
    </div>
</div>
<br>

<br><br>

<!-------------------------------- Start Footer ----------------------------->
<footer class="container-fluid text-center">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <h3>ที่อยู่</h3>
                <h2>คณะวิทยาศาสตร์ มหาวิทยาลัยศิลปากร วิทยาเขตพระราชวังสนามจันทร์ <br>อำเภอเมือง จังหวัดนครปฐม 73000
                </h2>
            </div>

            <div class="col-sm-3">
                <h3>เบอร์โทร</h3>
                <h2>เบอร์โทรศัพท์กลาง : (+66-34) 245300 <br>โทรสาร : (+66-34) 245333</h2>
            </div>

            <div class="col-sm-3">
                <h3>ช่องทางติดต่อ</h3>
                <h2>E-mail : science@su.sc.th</h2>
                <a href="http://www.sc.su.ac.th/index.php"><img class="sc" src="image/icon/susc.jpg" height="50px"
                                                                width="Auto"></a>
                <a href="https://www.facebook.com/ScienceSilpakornUniversity"><img src="image/icon/348.png"
                                                                                   height="50px" width="Auto"></a>
            </div>

            <div class="col-sm-3">
                <h3>ช่องทางชำระเงิน</h3>
                <img src="image/icon/krung.jpg" height="50px" width="Auto">
                <img src="image/icon/KTB.jpg" height="50px" width="Auto">
                <h3>บริการจัดส่ง</h3>
                <img src="image/icon/pn.jpg" height="50px" width="Auto">
            </div>
        </div>
    </div>
    <h4>Online Store Copyright by SCSU</h4>
</footer>
<!-------------------------------- End Footer ----------------------------->

<!-------------- Start Top ----------------->

<button class="buttonTop" onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-angle-double-up"></i>
</button>

<!-------------- End Top ----------------->


<script>

    // start Image slide

    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        setTimeout(showSlides, 1500); // Change image every 2 seconds
    }

    // end Image slide

    //    ----------- Start Top -------------

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("myBtn").style.display = "block";
        } else {
            document.getElementById("myBtn").style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }

    //    ----------- End Top -------------

    //    --------------- Start Drop Down

    $(document).ready(function () {
        $('.dropdown-submenu a.down-2').on("click", function (e) {
            $(this).next('ul').toggle();
            e.stopPropagation();
            e.preventDefault();
        });
    });

    //    --------------- End Drop Down

</script>
</body>
</html>
