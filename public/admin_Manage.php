<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Management</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<style>
    body {
        font-family: "TH Sarabun New", "Browallia New", Arial, Helvetica, sans-serif;
        background: white;
    }

    a {
        font-size: 16pt;
    }

    p {
        font-size: 16pt;
    }

    /*---------------------- Start recomment ------------------------*/

    .recommended {
        border: 2px solid #fff7e6;
        border-radius: 5px;
        margin-top: 5px;

    }

    .recommended-1, a.recommended-1 {
        text-align: center;
        margin-bottom: 10px;
        color: #ffcc00;
        text-decoration: none;
        font-size: 16pt;
    }

    /*---------------------- End recomment ------------------------*/

    .a {
        font-size: 16pt;
    }

    .H1 {
        border-bottom: 6px solid #00802b;
        border-radius: 3px;
        /*background-color: lightgrey;*/
    }


</style>

<body>

<div class="container">
    <h2><b>คลังสินค้า</b></h2>
    <p>สำหรับ admin ใช้จัดการสินค้าในคงคลัง</p>

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">สินค้าทั้งหมด</a></li>
        <!--        <li><a data-toggle="tab" href="#menu1">สินค้าคงเหลือ</a></li>-->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">การจัดการสินค้าคงคลัง <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="#menu4" data-toggle="tab">เพิ่มรายการใหม่</a></li>
                <li><a href="#menu5" data-toggle="tab">เพิ่มจำนวนสินค้า</a></li>
            </ul>
        </li>
        <li><a data-toggle="tab" href="#menu3">ข้อมูลการสั่งซื้อของลูกค้า</a></li>

    </ul>

    <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
            <!-----------------start สินค้าทั้งหมด--------------------->

            <div class="row recommended">
                <div class="col-sm-3 recommended-1">
                    <a href="Description-bottle.php" class="recommended-1">
                        <div class="panel-body"><img src="image/Bottle/ChampadeeWATERBOTTLES.png" class="img-responsive"
                                                     style="width:100%" alt="Image"></div>
                    </a>
                </div>
                <div class="col-sm-6" style="margin-top: 20px">
                    <h3 class="H1">กระบอกน้ำลายน้องจำปาดี ( ChampaDee Water Bottle )</h3>
                    <table class="table" style="margin-top: 10px">
                        <tbody class="a">
                        <tr class="success">
                            <td>จำนวนที่เหลือ</td>
                            <td>5</td>
                        </tr>
                        <tr class="danger">
                            <td>ขายไปแล้ว</td>
                            <td>10</td>
                        </tr>

                        </tbody>
                    </table>
                </div>

            </div>
            <div class="row recommended">
                <div class="col-sm-3 recommended-1">
                    <a href="Description-bag.php" class="recommended-1">
                        <div class="panel-body"><img src="image/Bag/ChampadeeCALICOBAG.png" class="img-responsive"
                                                     style="width:100%" alt="Image"></div>
                    </a>
                </div>
                <div class="col-sm-6" style="margin-top: 20px">
                    <h3 class="H1">กระบอกน้ำลายน้องจำปาดี ( ChampaDee Water Bottle )</h3>
                    <table class="table" style="margin-top: 10px">
                        <tbody class="a">
                        <tr class="success">
                            <td>จำนวนที่เหลือ</td>
                            <td>-</td>
                        </tr>
                        <tr class="danger">
                            <td>ขายไปแล้ว</td>
                            <td>-</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row recommended">
                <div class="col-sm-3 recommended-1">
                    <a href="Description-mug.php" class="recommended-1">
                        <div class="panel-body"><img src="image/Mug/Bown+ColourfullChampadeeMug.png"
                                                     class="img-responsive"
                                                     style="width:100%" alt="Image"></div>
                    </a>
                </div>
                <div class="col-sm-6" style="margin-top: 20px">
                    <h3 class="H1">แก้วมัคลายเส้นน้องจำปาดีแพ็คคู่ สี+ สีน้ำตาล (COLOURFULL + BROWN ChampaDee MUG)</h3>
                    <table class="table" style="margin-top: 10px">
                        <tbody class="a">
                        <tr class="success">
                            <td>จำนวนที่เหลือ</td>
                            <td>5</td>
                        </tr>
                        <tr class="danger">
                            <td>ขายไปแล้ว</td>
                            <td>10</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row recommended">
                <div class="col-sm-3 recommended-1">
                    <a href="Description-mugBown.php" class="recommended-1">
                        <div class="panel-body"><img src="image/Mug/BownChampadeeMug.png" class="img-responsive"
                                                     style="width:100%" alt="Image"></div>
                    </a>
                </div>
                <div class="col-sm-6" style="margin-top: 20px">
                    <h3 class="H1">แก้วมัคลายเส้นน้องจำปาดีสีน้ำตาล (BROWN ChampaDee MUG)</h3>
                    <table class="table" style="margin-top: 10px">
                        <tbody class="a">
                        <tr class="success">
                            <td>จำนวนที่เหลือ</td>
                            <td>5</td>
                        </tr>
                        <tr class="danger">
                            <td>ขายไปแล้ว</td>
                            <td>10</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row recommended">
                <div class="col-sm-3 recommended-1">
                    <a href="Description-mugColor.php" class="recommended-1">
                        <div class="panel-body"><img src="image/Mug/ColourfullChampadeeMug.png" class="img-responsive"
                                                     style="width:100%" alt="Image"></div>
                    </a>
                </div>
                <div class="col-sm-6" style="margin-top: 20px">
                    <h3 class="H1">แก้วมัคลายเส้นน้องจำปาดีสี (COLOURFULL ChampaDee MUG)</h3>
                    <table class="table" style="margin-top: 10px">
                        <tbody class="a">
                        <tr class="success">
                            <td>จำนวนที่เหลือ</td>
                            <td>5</td>
                        </tr>
                        <tr class="danger">
                            <td>ขายไปแล้ว</td>
                            <td>10</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row recommended">
                <div class="col-sm-3 recommended-1">
                    <a href="Description-shirt.php" class="recommended-1">
                        <div class="panel-body"><img src="image/Shirt/shirt-1.png" class="img-responsive"
                                                     style="width:100%" alt="Image"></div>
                    </a>
                </div>
                <div class="col-sm-6" style="margin-top: 20px">
                    <h3 class="H1">เสื้อคอปกลายน้องจำปาดี ( ChampaDee Shirt )</h3>
                    <table class="table" style="margin-top: 10px">
                        <tbody class="a">
                        <tr class="success">
                            <td>จำนวนที่เหลือ</td>
                            <td>5</td>
                        </tr>
                        <tr class="danger">
                            <td>ขายไปแล้ว</td>
                            <td>10</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row recommended">
                <div class="col-sm-3 recommended-1">
                    <a href="Description-shirt.php" class="recommended-1">
                        <div class="panel-body"><img src="image/T-Shirt/T-shirtV.png" class="img-responsive"
                                                     style="width:100%" alt="Image"></div>
                    </a>
                </div>
                <div class="col-sm-6" style="margin-top: 20px">
                    <h3 class="H1">เสื้อยืดคอวีลายน้องจำปาดี ( ChampaDee V neck T-shirt )</h3>
                    <table class="table" style="margin-top: 10px">
                        <tbody class="a">
                        <tr class="success">
                            <td>จำนวนที่เหลือ</td>
                            <td>5</td>
                        </tr>
                        <tr class="danger">
                            <td>ขายไปแล้ว</td>
                            <td>10</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row recommended">
                <div class="col-sm-3 recommended-1">
                    <a href="Description-shirt.php" class="recommended-1">
                        <div class="panel-body"><img src="image/T-Shirt/T-shirtC.png" class="img-responsive"
                                                     style="width:100%" alt="Image"></div>
                    </a>
                </div>
                <div class="col-sm-6" style="margin-top: 20px">
                    <h3 class="H1">เสื้อยืดคอกลมลายน้องจำปาดี (ChampaDee T-Shirt)</h3>
                    <table class="table" style="margin-top: 10px">
                        <tbody class="a">
                        <tr class="success">
                            <td>จำนวนที่เหลือ</td>
                            <td>5</td>
                        </tr>
                        <tr class="danger">
                            <td>ขายไปแล้ว</td>
                            <td>10</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-----------------end สินค้าทั้งหมด--------------------->
        <!--<div id="menu1" class="tab-pane fade">
            <h3>Menu 1</h3>
            <div class="container">
                <div class="row recommended">
                    <div class="col-sm-3 recommended-1">
                        <a href="Description-shirt.php" class="recommended-1">
                            <div class="panel-body"><img src="image/Shirt/shirt-1.png" class="img-responsive"
                                                         style="width:100%" alt="Image"></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>-->
        <div id="menu2" class="tab-pane fade">
            <h3>Menu 2</h3>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                totam
                rem aperiam.</p>
        </div>
        <div id="menu3" class="tab-pane fade">
            <h3>Menu 3</h3>
            <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                explicabo.</p>
        </div>

        <div id="menu4" class="tab-pane fade">
            <h3>Menu 4</h3>
            <button>0000000</button>
        </div>
        <div id="menu5" class="tab-pane fade">
            <h3>Menu 5</h3>
            <button>hhhhhhh</button>
        </div>

    </div>
</div>

</body>
</html>
