<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Home page</title>
        <meta name="hompage" content="width=device-wigth, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            * {
                box-sizing: border-box;
            }
            #navlist{
                position: relative;
            }
            #navlist li {
                margin: 0;
                padding: 0;
                list-style: none;
                position: absolute;
                top: 0;
            }
            #navlist li, #navlist a{
                height: 44px;
                display: block;
            }
            /*            #home {
                            left: 0px;
                            width: 46px;
                            background: #ff9900;
                        }*/
            body {
                margin: 0;
                background-color: #ccffcc ;
                font-family : Arial, Helvetica, sans-serif;
            }

            /*Style the header*/ 
            .header {
                background: #ff9900;
                padding: 30px;
                /*text-align: center;*/
            }
        </style>
    </head>
    <body>
        <?php
        // put your code here
        ?>

        <!--        <div class="header">
                    <image src="image/SCSUChampadeeBranding-4.png"
                           <h1>Header</h1>
                </div>-->
        <div class="header">
            <ul id="navlist"> 
                <li id="home"> <a href="index.php"> <img src="image/SCSUChampadeeBranding-4.png" alt="ChampadeeShop" width="200" height="160"></a> </li>
            </ul>
        </div>
    </body>
</html>
