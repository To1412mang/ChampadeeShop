<!DOCTYPE html>
<html lang="th">
<head>
    <title>Bown and Colourfull</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <style>

        body {
            font-family: "TH Sarabun New","Browallia New", Arial, Helvetica, sans-serif;

        }

        * {
            box-sizing: border-box;

        }

        /* Start Account Register */

        /* Full-width input fields */
        input[type=text], input[type=password] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }

        /* Add a background color when the inputs get focus */
        input[type=text]:focus, input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }

        /* Set a style for all buttons */
        .cancelbtn, .signupbtn {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        .cancelbtn, .signupbtn:hover {
            opacity: 1;
        }

        /* Extra styles for the cancel button */
        .cancelbtn {
            padding: 14px 20px;
            background-color: #f44336;
        }

        /* Float cancel and signup buttons and add an equal width */
        .cancelbtn, .signupbtn {
            float: left;
            width: 50%;
        }

        /* Add padding to container elements */
        .container2 {
            padding: 5px;
        }

        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: #ffeb99;
            padding-top: 50px;
        }

        /* Modal Content/Box */
        .modal-content {
            /*background-color: #fefefe;*/
            margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
            border: 1px solid #888;
            width: 100%; /* Could be more or less, depending on screen size */
        }

        /* Style the horizontal ruler */
        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }

        /* The Close Button (x) */
        .close {
            position: absolute;
            right: 35px;
            top: 15px;
            font-size: 40px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #ff0000;
            cursor: pointer;
        }

        /* Clear floats */
        .clearfix::after {
            content: "";
            clear: both;
            display: table;
        }

        /* Change styles for cancel button and signup button on extra small screens */
        @media screen and (max-width: 400px) {
            .cancelbtn, .signupbtn {
                width: 100%;
            }
        }

        /* End Account Register */

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
            padding: 25px;
        }

        .responsive {
            width: 100%;
            max-width: 300px;
            height: auto;
        }

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

        h1.A {
            color: #ff9900;
            font-size: 2.5vw;

        }

        /* End คำอธิบายใต้ภาพ */

        .navbar-toggle {
            margin-top: 20px;
        }

        h2 {
            font-size: 14pt;
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

        h2 {
            font-size: 16pt;
        }

        h3 {
            font-size: 20pt;
        }

        /* ---------------- End Footer -------------------*/

        /*---------------------- Start path --------------------------*/
        .path {
            padding-left: 20px;
            font-size: 16pt;
        }

        .P, .P:hover {
            text-decoration: none;
            color: green;

        }

        .P:hover {
            background: #f2f2f2;
            padding: 5px;
            color: black;
        }

        /*---------------------- End path --------------------------*/

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

        .description {
            text-align: center;

        }

        .description1 {
            display: block;
            width: 100%;
            border: none;
            background-color: #ffcc00;
            color: white;
            padding: 14px 28px;
            font-size: 20pt;
            cursor: pointer;
            text-align: center;
            border-radius: 9px;
        }

        .description1:hover {
            background-color: #ffeecc;
            color: #ff8c1a;
            border-radius: 9px;
        }

        b.description {
            color: red;
            padding: 10px;
            text-shadow: 2px 2px 4px #b3b3b3;
        }

        h3.description {
            font-size: 3vw;
        }

        /*---------------------- Start recomment ------------------------*/

        .recommended {
            border: 5px solid #fff7e6;
            border-radius: 5px;
            margin-top: 5px;

        }

        div.recommended-1:Hover, a.recommended-1:Hover {
            background: #fff2e6;
            border-radius: 10px;
            text-decoration: none;
            font-size: 16pt;
            color: #e67300;
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        }

        .recommended-1, a.recommended-1 {
            text-align: center;
            margin-bottom: 10px;
            color: #ffcc00;
            text-decoration: none;
            font-size: 16pt;
        }

        /*---------------------- End recomment ------------------------*/

        .H1 {
            border-bottom: 6px solid #99cc00;
            border-radius: 3px;
        }

        .dot {
            height: 25px;
            width: 25px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            text-decoration: none;
            box-shadow: 3px 3px 6px 0 rgba(0, 0, 0, 0.2);
            margin-top: 10px;
        }

        a.dot1, a.dot1:Hover {
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

        /* --------------start image slide--------------------------------------------*/

        .mySlides {
            display: none;
            border: 8px solid #00b300;
            border-radius: 5px;
            margin-left: 15px;
        }

        img.mySlides {
            text-align: center;
        }

        /* Next & previous buttons */
        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 45%;
            width: auto;
            padding: 15px;
            margin-top: -22px;
            color: #ff751a;
            font-weight: bold;
            font-size: 18px;
            transition: 0.1s ease;
            border-radius: 0 3px 3px 0;
            text-decoration: none;
            /*background: #e6e6e6;*/

        }

        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover, .next:hover {
            background-color: #808080;
            color: white;
            font-size: 20pt;
            text-decoration: none;
            /*background-color: #ff6600;*/
        }

        div.like-facebook, div.mySlides {
            text-align: center;
        }

        /* -----------------------------------stop image slide--------------------------------------------*/




    </style>
</head>
<body>

<div class="jumbotron">
    <div class="container2 text-center">
        <img src="image/SCSUChampadeeBranding-4.png" alt="ChampadeeShop" width="500px" height="250px"
             class="responsive">
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
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php" class="B">หน้าแรก</a></li>
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
                    <a href="search-code.php" style="padding-top: 10px"><i class="fa fa-search"></i> ค้นหาสินค้า</a>
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

<!---------------------------------- Start Path ----------------------------------------------->

<div class="path">
    <a href="index.php" class="P">หน้าแรก > </a>
    <a href="category.php" class="P">ประเภท > </a>
    <a href="mug.php" class="P">แก้ว > </a>
    <a class="P">Bown And ColourfullChampadeeMug</a>
</div>

<!----------------------- End Path ------------------------------->
<br><br>
<!----------------------- Start Description ------------------------------->

<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <div class="panel-body">

                <div class="mySlides">
                    <img class="img-slide" src="image/Mug/Bown+ColourfullChampadeeMug.png" style="width:100%">
                </div>

                <div class="mySlides">
                    <img class="img-slide" src="image/Mug/mugMix-1.png" style="width:100%">
                </div>

                <div class="mySlides">
                    <img class="img-slide" src="image/Mug/mugMix-2.png" style="width:100%">
                </div>
            </div>
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

            <!--            ---------------- Start Like Share Facebook --------------------->
            <br>
            <div class="like-facebook">
                <script>(function (d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) return;
                        js = d.createElement(s);
                        js.id = id;
                        js.src = 'https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v3.0';
                        fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));</script>
                <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/"
                     data-layout="button_count" data-action="like" data-size="small" data-show-faces="true"
                     data-share="true"></div>
            </div>

            <!------------------ End Like Share Facebook --------------------->


        </div>

        <div class="col-sm-5">
            <div class="panel-body">
                <h1 class="A" style="border-bottom: 2px solid #ffcc00">รายละเอียดสินค้า</h1>
                <p style="font-size: 2vw">แก้วมัคคุณภาพดี ลายเส้นน้องจำปาดีแพ็คคู่ แก้วมัคสีกับแก้วมัคสีน้ำตาล
                    ผลงานความร่วมมือระหว่างคณะวิทยาศาสตร์ (การออกแบบลวดลาย) และคณะมันฑณศิลป์ (การออกแบบแก้ว)
                    มหาวิทยาลัยศิลปากร เหมาะสำหรับผู้ชื่นชอบความเรียบง่าย สามารถใส่เครื่องดื่มได้ทั้งร้อนและเย็น
                    เป็นแก้วที่เผา 2 ครั้ง คุณภาพและปริมาณที่ได้จึงสวยงามคงทนโดยจะเห็นได้จากความเงาของแก้ว</p>
            </div>
        </div>

        <div class="col-sm-3 description">

            <div class="panel-body">
                <h3 class="description">ราคา <b style="font-size: 6vw" class="description">250</b> บาท</h3><br>
                <button class="description1" style="font-size: 2.5vw"><b>สั่งซื้อ</b></button>
                <br>
                <button class="description1" style="font-size: 2.5vw"><img src="image/icon/png/shop.png"
                                                                           style="height: 30px"> <b
                            style="padding-left: 10px">ใส่ตระกร้า</b>
                </button>
            </div>

        </div>

    </div>
</div>

<!----------------------- End Description ------------------------------->


<!----------------------- Start recomment -------------------------->

<br><br><br>
<div class="container">

    <h1 class="H1">สินค้าแนะนำ</h1>

    <div class="row recommended">

        <div class="col-sm-3 recommended-1">
            <a href="Description-bag.php" class="recommended-1">
                <div class="panel-body"><img src="image/Bag/ChampadeeCALICOBAG.png" class="img-responsive"
                                             style="width:100%" alt="Image"></div>
                <div>Champadee CALICO BAG</div>
            </a>
        </div>


        <div class="col-sm-3 recommended-1">
            <a href="Description-bottle.php" class="recommended-1">
                <div class="panel-body"><img src="image/Bottle/ChampadeeWATERBOTTLES.png" class="img-responsive"
                                             style="width:100%" alt="Image"></div>
                <div>Champadee WATER BOTTLES</div>
            </a>
        </div>

        <div class="col-sm-3 recommended-1">
            <a href="Description-Tshirt.php" class="recommended-1">
                <div class="panel-body"><img src="image/T-Shirt/T-shirt.jpg" class="img-responsive"
                                             style="width:100%" alt="Image"></div>
                <div>ChampaDee T-Shirt</div>
            </a>
        </div>

        <div class="col-sm-3 dot1" style="text-align:center">
            <a href="category.php" class="dot1">
                <h5><b>เพิ่มเติม</b></h5>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </a>
        </div>


    </div>
</div>
<br><br><br>
<!----------------------- End recomment -------------------------->

<!----------------------- Start Review Facebook ------------------------------->

<div class="container">

    <div id="fb-root"></div>
    <script>(function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v3.0';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
    <div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator"
         data-width="100%" data-numposts="5"></div>

</div>

<!----------------------- End Review Facebook ------------------------------->

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

                <div id="fb-root"></div>

            </div>

            <div class="col-sm-3">
                <h3>ช่องทางชำระเงิน</h3>
                <a><img src="image/icon/krung.jpg" height="50px" width="Auto"></a>
                <a><img src="image/icon/KTB.jpg" height="50px" width="Auto"></a>
                <h3>บริการจัดส่ง</h3>
                <a><img src="image/icon/pn.jpg" height="50px" width="Auto"></a>
            </div>
        </div>
    </div>


    <h4>Online Store Copyright by SCSU</h4>
</footer>
<!-------------------------------- End Footer ----------------------------->


<!-------------- Start Top ----------------->
<button id="myBtn" class="buttonTop" onclick="topFunction()" title="Go to top"><i class="fa fa-angle-double-up"></i>
</button>
<!-------------- End Top ----------------->

<script>


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

    //--------------- start img Gallery ----------------
    // start Image slide
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }

        slides[slideIndex - 1].style.display = "block";
    }

    // end Image slide
    //--------------- end img Gallery ----------------

</script>
</body>
</html>
