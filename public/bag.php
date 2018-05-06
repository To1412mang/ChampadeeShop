<!DOCTYPE html>
<html lang="en">
<head>
    <title>กระเป๋าน้องจำปาดี</title>
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

        /* คำอธิบายใต้ภาพ */
        div.desc {
            /*padding: 15px;*/
            text-align: center;
            margin-bottom: 30px;
            text-decoration: none;
            font-size: 16pt;

        }

        .A, .A:hover {
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

        /*---------------------- Start recomment ------------------------*/

        .recommended {
            /*background: #f2f2f2;*/
            border: 5px solid #fff7e6;
            border-radius: 5px;
            margin-top: 5px;

        }

        div.recommended-1:Hover, a.recommended-1:Hover {
            background: #fff2e6;
            border-radius: 10px;
            text-decoration: none;
            font-size: 16pt;
            /*padding: 5px;*/
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

        /*--------------------- Start DropDown ------------------------*/
        .down {
            padding: 8px;
            margin-left: 6px;

        }

        .down-1, .down-1:Hover {
            text-decoration: none;
            /*border: 5px solid #f2f2f2;*/
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
        h5:hover{
            color: black;
        }

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
            <!--            <a class="navbar-brand" href="#">Logo</a>-->
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
                <li><a onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><span
                                class="glyphicon glyphicon-user"></span> ลงชื่อเข้าใช้</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> ตระกร้าสินค้า</a></li>
            </ul>
        </div>
    </div>
</nav>

<!---------------------------------- End header ----------------------------------------------->

<!---------------------------------- Start Path ----------------------------------------------->

<div class="path">
    <a href="index.php" class="P">หน้าแรก > </a>
    <a href="category.php" class="P">ประเภท > </a>
    <a class="P">กระเป๋าน้องจำปาดี</a>


</div>

<!----------------------- End Path ------------------------------->


<br><br>
<div class="container">
    <div class="row">

        <div class="col-sm-3 recommended-1">
            <a href="Description-bag.php" class="A recommended-1">
                <div class="panel-body"><img src="image/Bag/ChampadeeCALICOBAG.png" class="img-responsive"
                                             style="width:100%" alt="Image"></div>
                <div class="desc">ChampaDee CALICO BAG</div>
            </a>
        </div>


        <!--        <div class="col-sm-3 recommended-1">-->
        <!--            <a href="test.php" class="A recommended-1">-->
        <!--                <div class="panel-body"><img src="image/ChampadeeWATERBOTTLES.png" class="img-responsive"-->
        <!--                                             style="width:100%" alt="Image"></div>-->
        <!--                <div class="desc">Add a description of the image here</div>-->
        <!--            </a>-->
        <!--        </div>-->
        <!---->
        <!--        <div class="col-sm-3 recommended-1">-->
        <!--            <a href="test.php" class="A recommended-1">-->
        <!--                <div class="panel-body"><img src="image/ChampadeeWATERBOTTLES.png" class="img-responsive"-->
        <!--                                             style="width:100%" alt="Image"></div>-->
        <!--                <div class="desc">Add a description of the image here</div>-->
        <!--            </a>-->
        <!--        </div>-->
        <!---->
        <!--        <div class="col-sm-3 recommended-1">-->
        <!--            <a href="test.php" class="A recommended-1">-->
        <!--                <div class="panel-body"><img src="image/ChampadeeWATERBOTTLES.png" class="img-responsive"-->
        <!--                                             style="width:100%" alt="Image"></div>-->
        <!--                <div class="desc">Add a description of the image here</div>-->
        <!--            </a>-->
        <!--        </div>-->


    </div>
    <br><br><br>
    <br><br><br>
    <h1 class="H1">สินค้าแนะนำ</h1>

    <div class="row recommended">

        <div class="col-sm-3 recommended-1">
            <a href="Description-Tshirt.php" class="recommended-1">
                <div class="panel-body"><img src="image/T-Shirt/T-shirtMix.png" class="img-responsive"
                                             style="width:100%" alt="Image"></div>
                <div>ChampaDee T-shirt</div>
            </a>
        </div>


        <div class="col-sm-3 recommended-1">
            <a href="Description-bottle.php" class="recommended-1">
                <div class="panel-body"><img src="image/Bottle/ChampadeeWATERBOTTLES.png" class="img-responsive"
                                             style="width:100%" alt="Image"></div>
                <div>ChampaDee CALICO BAG</div>
            </a>
        </div>

        <div class="col-sm-3 recommended-1">
            <a href="Description-mug.php" class="recommended-1">
                <div class="panel-body"><img src="image/Mug/ColourfullChampadeeMug.png" class="img-responsive"
                                             style="width:100%" alt="Image"></div>
                <div>COLOURFULL  + BROWN ChampaDee MUG</div>
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

    $(document).ready(function(){
        $('.dropdown-submenu a.down-2').on("click", function(e){
            $(this).next('ul').toggle();
            e.stopPropagation();
            e.preventDefault();
        });
    });

    //    --------------- End Drop Down

</script>
</body>
</html>
