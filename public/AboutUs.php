<!DOCTYPE html>
<html lang="en">
<head>
    <title>เกี่ยวกับเรา</title>
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
            /*margin-left: 10px;*/
            /*margin-right: auto;*/
            position: relative;
        }

        .collapse {
            margin-top: 10px;
        }

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

        .recommended-1 {
            text-align: center;
            /*margin-bottom: 10px;*/
            color: #009933;
            background: #fff7e6;
            text-decoration: none;
            /*font-size: 16pt;*/
            margin-top: 20px;
        }

        h1.recommended-1 {
            color: black;

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

        /*-----------------------Map-----------------------*/

        #map {
            height: 100%;
        }



        .H1 {
            border-bottom: 6px solid #99cc00;
            border-radius: 3px;

        }

        img.i{
            margin-top: 50px;
        }
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
                        <a href="cart.php" class="down"><span class="glyphicon glyphicon-shopping-cart"></span> ตระกร้าสินค้า</a>
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
    <a class="P">เกี่ยวกับเรา </a>

</div>

<!----------------------- End Path ------------------------------->


<br><br>


<div class="container">
    <h1 class="H1"><b>คณะวิทยาศาสตร์ มหาวิทยาลัยศิลปากร</b><br>Faculty of Science, Silpakorn University
    </h1>
    <br><br>
    <div class="row">

        <div class="col-sm-3" style="font-size: 2vw">
            <p><b>Champadee Shop เป็นเว็บไซต์สำหรับขายสินค้าที่คณะวิทยาศาสตร์ โดยสินค้าที่นำมาขายจะร่วมกับศิษย์เก่า
                    และนักศึกษาของคณะวิทยาศาสตร์</b></p>
            <p style="color: #ff9933"><b>สามารถติดต่อขอซื้อสินค้าได้ที่ สำนักงานคณบดีคณะวิทยาศาสตร์ มหาวิทยาลัยศิลปากร จังหวัดนครปฐม ชั้น 1 อาคารวิทยาศาสตร์ 1 ในวันเวลาราชการ</b></p>
        </div>

        <div class="col-sm-9">

            <img src="image/science.jpg" class="img-responsive i"
                 style="width:100%" alt="Image">

        </div>

    </div>
</div>

<br><br>

<div class="container" style="border: 5px solid #fff7e6">
    <div id="map" style="width:100%;height:400px;"></div>

    <script>
        var map;

        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: 13.819367, lng: 100.041358},
                zoom: 18
            });
        }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAjwf5VsT3XXN4KvB0Bb4_CLFWMjNlKcXI&callback=initMap"
            async defer></script>


</div>


<br><br><br>

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

    var b1 = document.getElementById('button1');

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
