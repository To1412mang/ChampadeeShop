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

    * {
        box-sizing: border-box;
    }

    /*---------------start catagory-------------*/

    input[type=text], select, textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        resize: vertical;
    }

    label {
        padding: 12px 12px 12px 0;
        display: inline-block;
    }

    input[type=submit] {
        background-color: #4CAF50;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        float: right;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    .container-2 {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 50px;
        /*padding-left: 10%;*/
    }

    .col-25 {
        float: left;
        width: 10%;
        margin-top: 6px;
        /*padding-left: 50px;*/
    }

    /*.col-25,.col-75{*/
    /*padding-left: 90px;*/
    /*}*/

    .col-75 {
        float: left;
        width: 50%;
        margin-top: 6px;
        /*padding-left: 50px;*/
    }

    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 500px) {
        .col-25, .col-75, input[type=submit] {
            width: 100%;
            margin-top: 0;
        }
    }

    /*---------------end catagory-------------*/

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
        border-bottom: 6px solid #8cd98c;
        border-radius: 3px;
        /*background-color: lightgrey;*/
    }

    /*<!-----------------start upload image----------------->*/
    label {
        font-size: 16pt;
    }

    /*<!-----------------end upload image----------------->*/

    .button {
        background-color: #4CAF50;
        border: none;
        color: white;
        padding: 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        border-radius: 10px;
    }

    .button:hover {
        opacity: 0.8;
    }


</style>

<body>

<div class="container">
    <h2><b>คลังสินค้า</b></h2>
    <p>สำหรับ admin ใช้จัดการสินค้าในคงคลัง</p>

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">สินค้าทั้งหมด</a></li>
        <li><a data-toggle="tab" href="#dproduct">รายละเอียดสินค้า</a></li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">การจัดการสินค้าคงคลัง <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="#newmenu" data-toggle="tab">เพิ่มรายการใหม่</a></li>
                <li><a href="#addmenu" data-toggle="tab">เพิ่มจำนวนสินค้า</a></li>
            </ul>
        </li>
        <li><a data-toggle="tab" href="#order">ข้อมูลการสั่งซื้อของลูกค้า</a></li>

    </ul>

    <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
            <!-----------------start สินค้าทั้งหมด--------------------->

            <div class="row recommended">
                <div class="col-sm-3 recommended-1">
                    <a href="#" class="recommended-1">
                        <div class="panel-body"><img src="image/Bottle/ChampadeeWATERBOTTLES.png" class="img-responsive"
                                                     style="width:100%" alt="Image"></div>
                    </a>
                </div>
                <div class="col-sm-6" style="margin-top: 20px">
                    <h3 class="H1">กระบอกน้ำลายน้องจำปาดี ( ChampaDee Water Bottle )</h3>
                    <table class="table" style="margin-top: 10px">
                        <tbody class="a">
                        <tr class="success">
                            <td>เพิ่มสินค้า</td>
                            <td>5</td>
                            <td>หน่วย</td>
                        </tr>
                        <tr class="danger">
                            <td>ขายไปแล้ว</td>
                            <td>10</td>
                            <td>หน่วย</td>
                        </tr>
                        <tr class="warning">
                            <td>รวมยอดเงินที่ขายได้</td>
                            <td>-</td>
                            <td>บาท</td>
                        </tr>

                        </tbody>
                    </table>
                </div>

            </div>
            <div class="row recommended">
                <div class="col-sm-3 recommended-1">
                    <a href="#" class="recommended-1">
                        <div class="panel-body"><img src="image/Bag/ChampadeeCALICOBAG.png" class="img-responsive"
                                                     style="width:100%" alt="Image"></div>
                    </a>
                </div>
                <div class="col-sm-6" style="margin-top: 20px">
                    <h3 class="H1">กระเป๋าน้องจำปาดี (ChampaDee CALICO BAG)</h3>
                    <table class="table" style="margin-top: 10px">
                        <tbody class="a">
                        <tr class="success">
                            <td>เพิ่มสินค้า</td>
                            <td>5</td>
                            <td>หน่วย</td>
                        </tr>
                        <tr class="danger">
                            <td>ขายไปแล้ว</td>
                            <td>10</td>
                            <td>หน่วย</td>
                        </tr>
                        <tr class="warning">
                            <td>รวมยอดเงินที่ขายได้</td>
                            <td>-</td>
                            <td>บาท</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row recommended">
                <div class="col-sm-3 recommended-1">
                    <a href="#" class="recommended-1">
                        <div class="panel-body"><img src="image/Mug/Bown+ColourfullChampadeeMug.png"
                                                     class="img-responsive"
                                                     style="width:100%" alt="Image"></div>
                    </a>
                </div>
                <div class="col-sm-6" style="margin-top: 20px">
                    <h3 class="H1">แก้วมัคลายเส้นน้องจำปาดีแพ็คคู่ สี + สีน้ำตาล (COLOURFULL + BROWN ChampaDee MUG)</h3>
                    <table class="table" style="margin-top: 10px">
                        <tbody class="a">
                        <tr class="success">
                            <td>เพิ่มสินค้า</td>
                            <td>5</td>
                            <td>หน่วย</td>
                        </tr>
                        <tr class="danger">
                            <td>ขายไปแล้ว</td>
                            <td>10</td>
                            <td>หน่วย</td>
                        </tr>
                        <tr class="warning">
                            <td>รวมยอดเงินที่ขายได้</td>
                            <td>-</td>
                            <td>บาท</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row recommended">
                <div class="col-sm-3 recommended-1">
                    <a href="#" class="recommended-1">
                        <div class="panel-body"><img src="image/Mug/BownChampadeeMug.png" class="img-responsive"
                                                     style="width:100%" alt="Image"></div>
                    </a>
                </div>
                <div class="col-sm-6" style="margin-top: 20px">
                    <h3 class="H1">แก้วมัคลายเส้นน้องจำปาดีสีน้ำตาล (BROWN ChampaDee MUG)</h3>
                    <table class="table" style="margin-top: 10px">
                        <tbody class="a">
                        <tr class="success">
                            <td>เพิ่มสินค้า</td>
                            <td>5</td>
                            <td>หน่วย</td>
                        </tr>
                        <tr class="danger">
                            <td>ขายไปแล้ว</td>
                            <td>10</td>
                            <td>หน่วย</td>
                        </tr>
                        <tr class="warning">
                            <td>รวมยอดเงินที่ขายได้</td>
                            <td>-</td>
                            <td>บาท</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row recommended">
                <div class="col-sm-3 recommended-1">
                    <a href="#" class="recommended-1">
                        <div class="panel-body"><img src="image/Mug/ColourfullChampadeeMug.png" class="img-responsive"
                                                     style="width:100%" alt="Image"></div>
                    </a>
                </div>
                <div class="col-sm-6" style="margin-top: 20px">
                    <h3 class="H1">แก้วมัคลายเส้นน้องจำปาดีสี (COLOURFULL ChampaDee MUG)</h3>
                    <table class="table" style="margin-top: 10px">
                        <tbody class="a">
                        <tr class="success">
                            <td>เพิ่มสินค้า</td>
                            <td>5</td>
                            <td>หน่วย</td>
                        </tr>
                        <tr class="danger">
                            <td>ขายไปแล้ว</td>
                            <td>10</td>
                            <td>หน่วย</td>
                        </tr>
                        <tr class="warning">
                            <td>รวมยอดเงินที่ขายได้</td>
                            <td>-</td>
                            <td>บาท</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row recommended">
                <div class="col-sm-3 recommended-1">
                    <a href="#" class="recommended-1">
                        <div class="panel-body"><img src="image/Shirt/shirt-1.png" class="img-responsive"
                                                     style="width:100%" alt="Image"></div>
                    </a>
                </div>
                <div class="col-sm-6" style="margin-top: 20px">
                    <h3 class="H1">เสื้อคอปกลายน้องจำปาดี ( ChampaDee Shirt )</h3>
                    <table class="table" style="margin-top: 10px">
                        <tbody class="a">
                        <tr class="success">
                            <td>เพิ่มสินค้า</td>
                            <td>5</td>
                            <td>หน่วย</td>
                        </tr>
                        <tr class="danger">
                            <td>ขายไปแล้ว</td>
                            <td>10</td>
                            <td>หน่วย</td>
                        </tr>
                        <tr class="warning">
                            <td>รวมยอดเงินที่ขายได้</td>
                            <td>-</td>
                            <td>บาท</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row recommended">
                <div class="col-sm-3 recommended-1">
                    <a href="#" class="recommended-1">
                        <div class="panel-body"><img src="image/T-Shirt/T-shirtV.png" class="img-responsive"
                                                     style="width:100%" alt="Image"></div>
                    </a>
                </div>
                <div class="col-sm-6" style="margin-top: 20px">
                    <h3 class="H1">เสื้อยืดคอวีลายน้องจำปาดี ( ChampaDee V neck T-shirt )</h3>
                    <table class="table" style="margin-top: 10px">
                        <tbody class="a">
                        <tr class="success">
                            <td>เพิ่มสินค้า</td>
                            <td>5</td>
                            <td>หน่วย</td>
                        </tr>
                        <tr class="danger">
                            <td>ขายไปแล้ว</td>
                            <td>10</td>
                            <td>หน่วย</td>
                        </tr>
                        <tr class="warning">
                            <td>รวมยอดเงินที่ขายได้</td>
                            <td>-</td>
                            <td>บาท</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row recommended">
                <div class="col-sm-3 recommended-1">
                    <a href="#" class="recommended-1">
                        <div class="panel-body"><img src="image/T-Shirt/T-shirtC.png" class="img-responsive"
                                                     style="width:100%" alt="Image"></div>
                    </a>
                </div>
                <div class="col-sm-6" style="margin-top: 20px">
                    <h3 class="H1">เสื้อยืดคอกลมลายน้องจำปาดี (ChampaDee T-Shirt)</h3>
                    <table class="table" style="margin-top: 10px">
                        <tbody class="a">
                        <tr class="success">
                            <td>เพิ่มสินค้า</td>
                            <td>5</td>
                            <td>หน่วย</td>
                        </tr>
                        <tr class="danger">
                            <td>ขายไปแล้ว</td>
                            <td>10</td>
                            <td>หน่วย</td>
                        </tr>
                        <tr class="warning">
                            <td>รวมยอดเงินที่ขายได้</td>
                            <td>-</td>
                            <td>บาท</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-----------------end สินค้าทั้งหมด--------------------->

        <!-------------------Start Description------------------->
        <div id="dproduct" class="tab-pane fade">

            <div class="row recommended">
                <div class="col-sm-3 recommended-1" style="margin-top: 20px">
                    <a href="#" class="recommended-1">
                        <div class="panel-body"><img src="image/Bottle/ChampadeeWATERBOTTLES.png" class="img-responsive"
                                                     style="width:100%" alt="Image"></div>
                    </a>
                </div>
                <div class="col-sm-9">
                    <h3 class="H1">กระบอกน้ำลายน้องจำปาดี ( ChampaDee Water Bottle )</h3>
                    <table class="table">
                        <tbody class="a">
                        <tr class="success">
                            <th>รายละเอียด</th>
                            <td>กระบอกน้ำพลาสติก 2 สีเท่านั้น มีสีกรม และสีครีม
                                ลายเสื้อน้องจำปาดีเป็นผลงานการออกแบบลวดลายของคณะวิทยาศาสตร์ มหาวิทยาลัยศิลปากร
                            </td>
                            <!--                            <td>หน่วย</td>-->
                        </tr>
                        <tr class="danger">
                            <td>ราคา/หน่วย</td>
                            <td>฿129</td>
                            <!--                            <td>หน่วย</td>-->
                        </tr>
                        <tr class="warning">
                            <td>จำนวนสินค้าในคลัง</td>
                            <td>10</td>
                            <!--                            <td>บาท</td>-->
                        </tr>

                        </tbody>
                    </table>
                </div>

            </div>
            <div class="row recommended">
                <div class="col-sm-3 recommended-1" style="margin-top: 20px">
                    <a href="#" class="recommended-1">
                        <div class="panel-body"><img src="image/Bag/ChampadeeCALICOBAG.png" class="img-responsive"
                                                     style="width:100%" alt="Image"></div>
                    </a>
                </div>
                <div class="col-sm-9">
                    <h3 class="H1">กระเป๋าน้องจำปาดี (ChampaDee CALICO BAG)</h3>
                    <table class="table">
                        <tbody class="a">
                        <tr class="success">
                            <th>รายละเอียด</th>
                            <td>กระเป๋าผ้าลายเส้นน้องจำปาดีคุณภาพดี ทนทานไม่ขาดง่าย
                                ลายกระเป๋าผ้าน้องจำปาดีเป็นผลงานการออกแบบลวดลายของคณะวิทยาศาสตร์ มหาวิทยาลัยศิลปากร
                                มีอัตลักษณ์ของคณะวิทยาศาสตร์และมหาวิทยาลัยศิลปากรปรากฎในลายกระเป๋าด้วยเผื่อบ่งบอกถึงความเป็นศิลปากรที่ว่า
                                Scientific Thinking Creativity and Morality Social Responsibility Unity (SCSU)
                            </td>
                        </tr>
                        <tr class="danger">
                            <td>ราคา/หน่วย</td>
                            <td>฿160</td>
                        </tr>
                        <tr class="warning">
                            <td>จำนวนสินค้าในคลัง</td>
                            <td>10</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row recommended">
                <div class="col-sm-3 recommended-1" style="margin-top: 20px">
                    <a href="#" class="recommended-1">
                        <div class="panel-body"><img src="image/Mug/Bown+ColourfullChampadeeMug.png"
                                                     class="img-responsive"
                                                     style="width:100%" alt="Image"></div>
                    </a>
                </div>
                <div class="col-sm-9">
                    <h3 class="H1">แก้วมัคลายเส้นน้องจำปาดีแพ็คคู่ สี + สีน้ำตาล (COLOURFULL + BROWN ChampaDee MUG)</h3>
                    <table class="table">
                        <tbody class="a">
                        <tr class="success">
                            <th>รายละเอียด</th>
                            <td>แก้วมัคคุณภาพดี ลายเส้นน้องจำปาดีแพ็คคู่ แก้วมัคสีกับแก้วมัคสีน้ำตาล
                                ผลงานความร่วมมือระหว่างคณะวิทยาศาสตร์ (การออกแบบลวดลาย) และคณะมันฑณศิลป์ (การออกแบบแก้ว)
                                มหาวิทยาลัยศิลปากร เหมาะสำหรับผู้ชื่นชอบความเรียบง่าย
                                สามารถใส่เครื่องดื่มได้ทั้งร้อนและเย็น เป็นแก้วที่เผา 2 ครั้ง
                                คุณภาพและปริมาณที่ได้จึงสวยงามคงทนโดยจะเห็นได้จากความเงาของแก้ว
                            </td>
                        </tr>
                        <tr class="danger">
                            <td>ราคา/หน่วย</td>
                            <td>฿250</td>
                        </tr>
                        <tr class="warning">
                            <td>จำนวนสินค้าในคลัง</td>
                            <td>10</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row recommended">
                <div class="col-sm-3 recommended-1" style="margin-top: 20px">
                    <a href="#" class="recommended-1">
                        <div class="panel-body"><img src="image/Mug/BownChampadeeMug.png" class="img-responsive"
                                                     style="width:100%" alt="Image"></div>
                    </a>
                </div>
                <div class="col-sm-9">
                    <h3 class="H1">แก้วมัคลายเส้นน้องจำปาดีสีน้ำตาล (BROWN ChampaDee MUG)</h3>
                    <table class="table">
                        <tbody class="a">
                        <tr class="success">
                            <th>รายละเอียด</th>
                            <td>แก้วมัคคุณภาพดี ลายเส้นน้องจำปาดีสีน้ำตาล ผลงานความร่วมมือระหว่างคณะวิทยาศาสตร์
                                (การออกแบบลวดลาย) และคณะมันฑณศิลป์ (การออกแบบแก้ว) มหาวิทยาลัยศิลปากร
                                เหมาะสำหรับผู้ชื่นชอบความเรียบง่าย สามารถใส่เครื่องดื่มได้ทั้งร้อนและเย็น เป็นแก้วที่เผา
                                2 ครั้ง คุณภาพและปริมาณที่ได้จึงสวยงามคงทนโดยจะเห็นได้จากความเงาของแก้ว
                            </td>
                        </tr>
                        <tr class="danger">
                            <td>ราคา/หน่วย</td>
                            <td>฿120</td>
                        </tr>
                        <tr class="warning">
                            <td>จำนวนสินค้าในคลัง</td>
                            <td>10</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row recommended">
                <div class="col-sm-3 recommended-1" style="margin-top: 20px">
                    <a href="#" class="recommended-1">
                        <div class="panel-body"><img src="image/Mug/ColourfullChampadeeMug.png" class="img-responsive"
                                                     style="width:100%" alt="Image"></div>
                    </a>
                </div>
                <div class="col-sm-9">
                    <h3 class="H1">แก้วมัคลายเส้นน้องจำปาดีสี (COLOURFULL ChampaDee MUG)</h3>
                    <table class="table">
                        <tbody class="a">
                        <tr class="success">
                            <th>รายละเอียด</th>
                            <td>แก้วมัคคุณภาพดี ลายเส้นน้องจำปาดีสี ผลงานความร่วมมือระหว่างคณะวิทยาศาสตร์
                                (การออกแบบลวดลาย) และคณะมันฑณศิลป์ (การออกแบบแก้ว) มหาวิทยาลัยศิลปากร
                                เหมาะสำหรับผู้ชื่นชอบความเรียบง่าย สามารถใส่เครื่องดื่มได้ทั้งร้อนและเย็น เป็นแก้วที่เผา
                                2 ครั้ง คุณภาพและปริมาณที่ได้จึงสวยงามคงทนโดยจะเห็นได้จากความเงาของแก้ว
                            </td>
                        </tr>
                        <tr class="danger">
                            <td>ราคา/หน่วย</td>
                            <td>฿120</td>
                        </tr>
                        <tr class="warning">
                            <td>จำนวนสินค้าในคลัง</td>
                            <td>10</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row recommended">
                <div class="col-sm-3 recommended-1" style="margin-top: 20px">
                    <a href="#" class="recommended-1">
                        <div class="panel-body"><img src="image/Shirt/shirt-1.png" class="img-responsive"
                                                     style="width:100%" alt="Image"></div>
                    </a>
                </div>
                <div class="col-sm-9">
                    <h3 class="H1">เสื้อคอปกลายน้องจำปาดี ( ChampaDee Shirt )</h3>
                    <table class="table">
                        <tbody class="a">
                        <tr class="success">
                            <th>รายละเอียด</th>
                            <td>เสื้อคอปกลายเส้นน้องจำปาดี เนื้อผ้าคุณภาพดี มี 2 สีเท่านั้น มีสีกรม และสีครีม   ลายเสื้อน้องจำปาดีเป็นผลงานการออกแบบลวดลายของคณะวิทยาศาสตร์ มหาวิทยาลัยศิลปากร
                            </td>
                        </tr>
                        <tr class="danger">
                            <td>ราคา/หน่วย</td>
                            <td>฿300</td>
                        </tr>
                        <tr class="warning">
                            <td>จำนวนสินค้าในคลัง</td>
                            <td>10</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row recommended">
                <div class="col-sm-3 recommended-1" style="margin-top: 20px">
                    <a href="#" class="recommended-1">
                        <div class="panel-body"><img src="image/T-Shirt/T-shirtV.png" class="img-responsive"
                                                     style="width:100%" alt="Image"></div>
                    </a>
                </div>
                <div class="col-sm-9">
                    <h3 class="H1">เสื้อยืดคอวีลายน้องจำปาดี ( ChampaDee V neck T-shirt )</h3>
                    <table class="table">
                        <tbody class="a">
                        <tr class="success">
                            <th>รายละเอียด</th>
                            <td>เสื้อยืดลายเส้นน้องจำปาดี เนื้อผ้าคุณภาพดีสวมใส่สบาย มี 3 สีเท่านั้น มีสีเทา สีขาว และสีเหลือง  ลายเสื้อน้องจำปาดีเป็นผลงานการออกแบบลวดลายของคณะวิทยาศาสตร์ มหาวิทยาลัยศิลปากร </td>
                        </tr>
                        <tr class="danger">
                            <td>ราคา/หน่วย</td>
                            <td>฿180</td>
                        </tr>
                        <tr class="warning">
                            <td>จำนวนสินค้าในคลัง</td>
                            <td>10</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row recommended">
                <div class="col-sm-3 recommended-1" style="margin-top: 20px">
                    <a href="#" class="recommended-1">
                        <div class="panel-body"><img src="image/T-Shirt/T-shirtC.png" class="img-responsive"
                                                     style="width:100%" alt="Image"></div>
                    </a>
                </div>
                <div class="col-sm-9" >
                    <h3 class="H1">เสื้อยืดคอกลมลายน้องจำปาดี (ChampaDee T-Shirt)</h3>
                    <table class="table">
                        <tbody class="a">
                        <tr class="success">
                            <th>รายละเอียด</th>
                            <td>เสื้อยืดลายเส้นน้องจำปาดี เนื้อผ้าคุณภาพดีสวมใส่สบาย มี 3 สีเท่านั้น มีสีเทา สีขาว และสีเหลือง  ลายเสื้อน้องจำปาดีเป็นผลงานการออกแบบลวดลายของคณะวิทยาศาสตร์ มหาวิทยาลัยศิลปากร </td>
                        </tr>
                        <tr class="danger">
                            <td>ราคา/หน่วย</td>
                            <td>฿180</td>
                        </tr>
                        <tr class="warning">
                            <td>จำนวนสินค้าในคลัง</td>
                            <td>10</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

        <!------------------End Description------------------->

        <div id="newmenu" class="tab-pane fade">
            <div class="container-2">
                <form action="/action_page.php">
                    <div class="row">
                        <div class="col-25">
                            <label for="pname">ชื่อสินค้า</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="pname" name="productname" placeholder="Product name..">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="pnumber">จำนวนสินค้า</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="pnumber" name="productnumber" placeholder="Product number..">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="catagory">catagory</label>
                        </div>
                        <div class="col-75">
                            <select id="catagory" name="catagory">
                                <option value="mug">แก้ว</option>
                                <option value="bag">กระเป๋า</option>
                                <option value="waterbottles">กระบอกน้ำ</option>
                                <option value="shirt">เสื้อ</option>
                                <option>Other</option>

                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="description">รายละเอียดสินค้า</label>
                        </div>
                        <div class="col-75">
                            <textarea id="description" name="description" placeholder="Write .."
                                      style="height:200px"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="description">รูปสินค้า</label>
                        </div>
                        <div class="col-75" style="padding-top: 10px">
                            <!-----------------start upload image----------------->
                            <input type="file" id="myFile" multiple size="20" onchange="myFunction()">

                            <!-----------------end upload image----------------->
                        </div>
                    </div>

                    <div class="row" style="padding-right: 40%">
                        <input type="submit" value="Submit">
                    </div>


                </form>
            </div>

            <script>
                function myFunction() {
                    var x = document.getElementById("myFile");
                    var txt = "";
                    if ('files' in x) {
                        if (x.files.length == 0) {
                            txt = "Select one or more files.";
                        } else {
                            for (var i = 0; i < x.files.length; i++) {
                                txt += "<br><strong>" + (i + 1) + ". file</strong><br>";
                                var file = x.files[i];
                                if ('name' in file) {
                                    txt += "name: " + file.name + "<br>";
                                }
                                if ('size' in file) {
                                    txt += "size: " + file.size + " bytes <br>";
                                }
                            }
                        }
                    }
                    else {
                        if (x.value == "") {
                            txt += "Select one or more files.";
                        } else {
                            txt += "The files property is not supported by your browser!";
                            txt += "<br>The path of the selected file: " + x.value; // If the browser does not support the files property, it will return the path of the selected file instead.
                        }
                    }
                    document.getElementById("demo").innerHTML = txt;
            </script>
        </div>

        <div id="addmenu" class="tab-pane fade">
            <!-----------------start สินค้าทั้งหมด--------------------->

            <div class="row recommended">
                <div class="col-sm-3 recommended-1">
                    <a href="#" class="recommended-1">
                        <div class="panel-body"><img src="image/Bottle/ChampadeeWATERBOTTLES.png" class="img-responsive"
                                                     style="width:100%" alt="Image"></div>
                    </a>
                </div>
                <div class="col-sm-6" style="margin-top: 20px">
                    <h3 class="H1">กระบอกน้ำลายน้องจำปาดี ( ChampaDee Water Bottle )</h3>
                    <table class="table" style="margin-top: 10px">
                        <tbody class="a">
                        <tr class="success">
                            <td>เพิ่มสินค้า</td>
                            <td><input type="number" value="0"></td>
                            <td>หน่วย</td>
                            <td>
                                <button class="button">submit</button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="row recommended">
                <div class="col-sm-3 recommended-1">
                    <a href="#" class="recommended-1">
                        <div class="panel-body"><img src="image/Bag/ChampadeeCALICOBAG.png" class="img-responsive"
                                                     style="width:100%" alt="Image"></div>
                    </a>
                </div>
                <div class="col-sm-6" style="margin-top: 20px">
                    <h3 class="H1">กระเป๋าน้องจำปาดี (ChampaDee CALICO BAG)</h3>
                    <table class="table" style="margin-top: 10px">
                        <tbody class="a">
                        <tr class="success">
                            <td>เพิ่มสินค้า</td>
                            <td><input type="number" value="0"></td>
                            <td>หน่วย</td>
                            <td>
                                <button class="button">submit</button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row recommended">
                <div class="col-sm-3 recommended-1">
                    <a href="#" class="recommended-1">
                        <div class="panel-body"><img src="image/Mug/Bown+ColourfullChampadeeMug.png"
                                                     class="img-responsive"
                                                     style="width:100%" alt="Image"></div>
                    </a>
                </div>
                <div class="col-sm-6" style="margin-top: 20px">
                    <h3 class="H1">แก้วมัคลายเส้นน้องจำปาดีแพ็คคู่ สี + สีน้ำตาล (COLOURFULL + BROWN ChampaDee MUG)</h3>
                    <table class="table" style="margin-top: 10px">
                        <tbody class="a">
                        <tr class="success">
                            <td>เพิ่มสินค้า</td>
                            <td><input type="number" value="0"></td>
                            <td>หน่วย</td>
                            <td>
                                <button class="button">submit</button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row recommended">
                <div class="col-sm-3 recommended-1">
                    <a href="#" class="recommended-1">
                        <div class="panel-body"><img src="image/Mug/BownChampadeeMug.png" class="img-responsive"
                                                     style="width:100%" alt="Image"></div>
                    </a>
                </div>
                <div class="col-sm-6" style="margin-top: 20px">
                    <h3 class="H1">แก้วมัคลายเส้นน้องจำปาดีสีน้ำตาล (BROWN ChampaDee MUG)</h3>
                    <table class="table" style="margin-top: 10px">
                        <tbody class="a">
                        <tr class="success">
                            <td>เพิ่มสินค้า</td>
                            <td><input type="number" value="0"></td>
                            <td>หน่วย</td>
                            <td>
                                <button class="button">submit</button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row recommended">
                <div class="col-sm-3 recommended-1">
                    <a href="#" class="recommended-1">
                        <div class="panel-body"><img src="image/Mug/ColourfullChampadeeMug.png" class="img-responsive"
                                                     style="width:100%" alt="Image"></div>
                    </a>
                </div>
                <div class="col-sm-6" style="margin-top: 20px">
                    <h3 class="H1">แก้วมัคลายเส้นน้องจำปาดีสี (COLOURFULL ChampaDee MUG)</h3>
                    <table class="table" style="margin-top: 10px">
                        <tbody class="a">
                        <tr class="success">
                            <td>เพิ่มสินค้า</td>
                            <td><input type="number" value="0"></td>
                            <td>หน่วย</td>
                            <td>
                                <button class="button">submit</button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row recommended">
                <div class="col-sm-3 recommended-1">
                    <a href="#" class="recommended-1">
                        <div class="panel-body"><img src="image/Shirt/shirt-1.png" class="img-responsive"
                                                     style="width:100%" alt="Image"></div>
                    </a>
                </div>
                <div class="col-sm-6" style="margin-top: 20px">
                    <h3 class="H1">เสื้อคอปกลายน้องจำปาดี ( ChampaDee Shirt )</h3>
                    <table class="table" style="margin-top: 10px">
                        <tbody class="a">
                        <tr class="success">
                            <td>เพิ่มสินค้า</td>
                            <td><input type="number" value="0"></td>
                            <td>หน่วย</td>
                            <td>
                                <button class="button">submit</button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row recommended">
                <div class="col-sm-3 recommended-1">
                    <a href="#" class="recommended-1">
                        <div class="panel-body"><img src="image/T-Shirt/T-shirtV.png" class="img-responsive"
                                                     style="width:100%" alt="Image"></div>
                    </a>
                </div>
                <div class="col-sm-6" style="margin-top: 20px">
                    <h3 class="H1">เสื้อยืดคอวีลายน้องจำปาดี ( ChampaDee V neck T-shirt )</h3>
                    <table class="table" style="margin-top: 10px">
                        <tbody class="a">
                        <tr class="success">
                            <td>เพิ่มสินค้า</td>
                            <td><input type="number" value="0"></td>
                            <td>หน่วย</td>
                            <td>
                                <button class="button">submit</button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row recommended">
                <div class="col-sm-3 recommended-1">
                    <a href="#" class="recommended-1">
                        <div class="panel-body"><img src="image/T-Shirt/T-shirtC.png" class="img-responsive"
                                                     style="width:100%" alt="Image"></div>
                    </a>
                </div>
                <div class="col-sm-6" style="margin-top: 20px">
                    <h3 class="H1">เสื้อยืดคอกลมลายน้องจำปาดี (ChampaDee T-Shirt)</h3>
                    <table class="table" style="margin-top: 10px">
                        <tbody class="a">
                        <tr class="success">
                            <td>เพิ่มสินค้า</td>
                            <td><input type="number" value="0"></td>
                            <td>หน่วย</td>
                            <td>
                                <button class="button">submit</button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-----------------end สินค้าทั้งหมด--------------------->

        <div id="order" class="tab-pane fade">
            <div class="table-responsive" style="padding-top: 20px">
                <table class="table a">
                    <thead>
                    <tr>
                        <th>หมายเลขคำสั่งซื้อ</th>
                        <th>Product Name</th>
                        <th>จำนวนสินค้า</th>
                        <th>ราคา/หน่วย</th>
                        <th>รวมราคา</th>
                        <th>วันที่สั่งซื้อ</th>
                        <th>วันที่จ่ายเงิน</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>0000</td>
                        <td>เสื้อยืดคอกลมลายน้องจำปาดี (ChampaDee T-Shirt)</td>
                        <td>2</td>
                        <td>180</td>
                        <td>360</td>
                        <td>02-04-2561</td>
                        <td>03-04-2561</td>
                    </tr>
                    <tr>
                        <td>0000</td>
                        <td>เสื้อยืดคอกลมลายน้องจำปาดี (ChampaDee T-Shirt)</td>
                        <td>2</td>
                        <td>180</td>
                        <td>360</td>
                        <td>02-04-2561</td>
                        <td>03-04-2561</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
</div>


</body>
</html>
