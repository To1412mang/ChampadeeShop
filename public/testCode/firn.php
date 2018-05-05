
<html lang="en">
<head>
    <title>Firn</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
    .header{
        border: 1px solid gray;
        padding:2px;
        padding-left: 15px;
        padding-right:15px;
        width=100%;
    }

    .tab{
        border: 1px solid gray;
        padding:1px;
        text-align:center;
        color:gray;
        background-color:#F1C40F;
    }

    .advertis{
        border: 1px solid gray;
        padding:1px;
        margin:5px
        width:30%;
        high:30%;
    }

    .product{
        border: 1px solid gray;
        padding:2px;
        padding-left: 25px;
        padding-right:15px;
        text-align: center;
        margin:10px;
    }

</style>
<body>
<?php
echo "Hello E-Commerce";
?>
<div class="header">
    <div class="row">
        <div class="col-xs-3 col-md-3 col-lg-3 " ><img src="../image/SCSUChampadeeBranding-4.png" class="img-responsive"></div>
        <div class="col-xs-5 col-md-5 col-lg-5 " style=" background-color:lavenderblush;">searching</div>
        <div class="col-xs-2 col-md-2 col-lg-2 " style="background-color:lavender;">basket</div>
        <div class="col-xs-2 col-md-2 col-lg-2 "><a href="member.html"><img src="member.png" class="img-responsive"></a></div>
    </div>
</div>
<div class="tab">
    <div class="row ">
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 " >หน้าแรก</div>
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 " >ประเภทสินค้า</div>
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 ">ขั้นตอนการชำระเงิน</div>
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 " >เกี่ยวกับเรา</div>

    </div>
</div>
<div class ="advertis">
    <div class="container">
        <div class="container">
            <img class="mySlides" src="img_fjords.jpg" style="width:30%">
            <img class="mySlides" src="img_lights.jpg" style="width:30%">
            <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
            <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
        </div>
    </div>
</div>
<h6><b> text navegation</b></h6><br>
<div class="row ">
    <div class="col-xs-5 col-sm-3 col-md-3 col-lg-3 product">fhsfh</div>
    <div class="col-xs-5 col-sm-3 col-md-3 col-lg-3 product">fhsfh</div>
    <div class="col-xs-5 col-sm-3 col-md-3 col-lg-3 product">fhsfh</div>
    <div class="col-xs-5 col-sm-3 col-md-3 col-lg-3 product">fhsfh</div>

</div>

<script>
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
        showDivs(slideIndex += n);
    }

    function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        if (n > x.length) {slideIndex = 1}
        if (n < 1) {slideIndex = x.length} ;
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        x[slideIndex-1].style.display = "block";
    }
</script>
</body>
</html>
