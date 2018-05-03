<!DOCTYPE html>
<html lang="en th">
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>

        body {
            font-family: "TH Sarabun New", Arial, Helvetica, sans-serif;

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
            /*color: #f1f1f1;*/
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
            /*margin-left: 10px;*/
            /*margin-right: auto;*/
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
        .down{
            padding: 8px;
            margin-left: 6px;

        }
        .down-1,.down-1:Hover{
            text-decoration: none;
            /*border: 5px solid #f2f2f2;*/
            color: #a6a6a6;
        }
        .down-1{
            color: #a6a6a6;
            text-decoration: none;
        }
        .down-2{
            font-size: 16pt;

        }
        /*--------------------- End DropDown ------------------------*/

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
                        </ul>
                    </div>
                </li>

                <li><a href="#" class="B">ขั้นตอนการชำระเงิน</a></li>
                <li><a href="#" class="B">เกี่ยวกับเรา</a></li>
                <!--                <li><a href="#" class="B">Contact</a></li>-->

            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><span
                                class="glyphicon glyphicon-user"></span> ลงชื่อเข้าใช้</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> ตระกร้าสินค้า</a></li>
            </ul>
        </div>
    </div>
</nav>

<!---------------------------------- End header ----------------------------------------------->

<!--/* -----------------------------------start image slide--------------------------------------------*/-->

<div class="container1">

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

<br>
<!--<h1 style="padding-left: 20px">สินค้าแนะนำ</h1>-->
<div class="container">
    <div class="row">

        <div class="col-sm-3 recommended-1">
            <a href="test.php" class="A">
                <div class="panel-body"><img src="image/Bown+ColourfullChampadeeMug.png" class="img-responsive"
                                             style="width:100%" alt="Image"></div>
                <div class="desc">Add a description of the image here</div>
            </a>
        </div>


        <div class="col-sm-3 recommended-1">
            <a href="test.php" class="A">
                <div class="panel-body"><img src="image/ColourfullChampadeeMug.png" class="img-responsive"
                                             style="width:100%" alt="Image"></div>
                <div class="desc">Add a description of the image here</div>
            </a>
        </div>

        <div class="col-sm-3 recommended-1">
            <a href="test.php" class="A">
                <div class="panel-body"><img src="image/ChampadeeWATERBOTTLES.png" class="img-responsive"
                                             style="width:100%" alt="Image"></div>
                <div class="desc">Add a description of the image here</div>
            </a>
        </div>

        <div class="col-sm-3 recommended-1">
            <a href="test.php" class="A">
                <div class="panel-body"><img src="image/ChampadeeCALICOBAG.png" class="img-responsive"
                                             style="width:100%" alt="Image"></div>
                <div class="desc">Add a description of the image here</div>
            </a>
        </div>

        <div class="col-sm-3 recommended-1">
            <a href="test.php" class="A">
                <div class="panel-body"><img src="image/BownChampadeeMug.png" class="img-responsive"
                                             style="width:100%" alt="Image"></div>
                <div class="desc">Add a description of the image here</div>
            </a>
        </div>

        <div class="col-sm-3 recommended-1">
            <a href="test.php" class="A">
                <div class="panel-body"><img src="image/ChampadeeWATERBOTTLES.png" class="img-responsive"
                                             style="width:100%" alt="Image"></div>
                <div class="desc">Add a description of the image here</div>
            </a>
        </div>

        <div class="col-sm-3 recommended-1">
            <a href="test.php" class="A">
                <div class="panel-body"><img src="image/Bown+ColourfullChampadeeMug.png" class="img-responsive"
                                             style="width:100%" alt="Image"></div>
                <div class="desc">Add a description of the image here</div>
            </a>
        </div>

        <div class="col-sm-3 recommended-1">
            <a href="test.php" class="A">
                <div class="panel-body"><img src="image/Bown+ColourfullChampadeeMug.png" class="img-responsive"
                                             style="width:100%" alt="Image"></div>
                <div class="desc">Add a description of the image here</div>
            </a>
        </div>

    </div>
</div>
<br>

<br><br>

<!-------------------------------- Start Footer ----------------------------->
<footer class="container-fluid text-center">
    <!--    <p>Online Store Copyright</p>-->
    <!--    <form class="form-inline">Get deals:-->
    <!--        <input type="email" class="form-control" size="50" placeholder="Email Address">-->
    <!--        <button type="button" class="btn btn-danger">Sign Up</button>-->
    <!--    </form>-->
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

<!-- Start Account Register -->
<div id="id01" class="modal">
    <span onclick="document.getElementById('id01').style.display='none'" class="close"
          title="Close Modal">&times;</span>
    <form class="modal-content" action="/action_page.php">
        <div class="container">
            <h1>Sign Up</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <label for="psw-repeat"><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

            <label>
                <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
            </label>

            <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

            <div class="clearfix">
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">
                    Cancel
                </button>
                <button type="submit" class="signupbtn">Sign Up</button>
            </div>
        </div>
    </form>
</div>

<!-- End Account Register -->

<!-------------- Start Top ----------------->

<button class="buttonTop" onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-angle-double-up"></i>
</button>

<!-------------- End Top ----------------->


<script>
    //
    <!-- Start Account Register -->
    // Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    //
    <!-- End Account Register -->


    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    // start Image slide
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
        $('.dropdown-submenu a.test').on("click", function (e) {
            $(this).next('ul').toggle();
            e.stopPropagation();
            e.preventDefault();
        });
    });

    //    --------------- End Drop Down

</script>
</body>
</html>
