<!DOCTYPE html>
<html lang="en">
<head>
    <title>เสื้อยืด</title>
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
    <a class="P">เสื้อยืด</a>


</div>

<!----------------------- End Path ------------------------------->


<br><br>
<div class="container">
    <div class="row">

        <div class="col-sm-3 recommended-1">
            <a href="Description-Tshirt.php" class="A recommended-1">
                <div class="panel-body"><img src="image/T-Shirt/T-shirtMix.png" class="img-responsive"
                                             style="width:100%" alt="Image"></div>
                <div class="desc">ChampaDee T-shirt</div>
            </a>
        </div>


        <div class="col-sm-3 recommended-1">
            <a href="Description-Tshirt.php" class="A recommended-1">
                <div class="panel-body"><img src="image/T-Shirt/T-shirtC.png" class="img-responsive"
                                             style="width:100%" alt="Image"></div>
                <div class="desc">ChampaDee T-shirt</div>
            </a>
        </div>

        <div class="col-sm-3 recommended-1">
            <a href="Description-Tshirt.php" class="A recommended-1">
                <div class="panel-body"><img src="image/T-Shirt/T-shirtV.png" class="img-responsive"
                                             style="width:100%" alt="Image"></div>
                <div class="desc">ChampaDee V neck T-shirt</div>
            </a>
        </div>
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
            <a href="Description-mugBown.php" class="recommended-1">
                <div class="panel-body"><img src="image/Mug/BownChampadeeMug.png" class="img-responsive"
                                             style="width:100%" alt="Image"></div>
                <div>BROWN ChampaDee MUG</div>
            </a>
        </div>


        <div class="col-sm-3 recommended-1">
            <a href="Description-bag.php" class="recommended-1">
                <div class="panel-body"><img src="image/Bag/ChampadeeCALICOBAG.png" class="img-responsive"
                                             style="width:100%" alt="Image"></div>
                <div>ChampaDee CALICO BAG</div>
            </a>
        </div>

        <div class="col-sm-3 recommended-1">
            <a href="Description-mugColor.php" class="recommended-1">
                <div class="panel-body"><img src="image/Mug/ColourfullChampadeeMug.png" class="img-responsive"
                                             style="width:100%" alt="Image"></div>
                <div>COLOURFULL + BROWN ChampaDee MUG</div>
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

<!-------------- Start Top ----------------->

<button class="buttonTop" onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-angle-double-up"></i>
</button>

<!-------------- End Top ----------------->


<script>

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
