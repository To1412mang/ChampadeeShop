<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: "TH Sarabun New", "Browallia New", Arial, Helvetica, sans-serif;
            background: #fff5cc;
        }

        * {
            box-sizing: border-box;
        }

        /* Add padding to containers */
        .container {
            padding: 16px;
            background-color: white;
            /*padding: auto;*/
            margin-right: 20%;
            font-size: 16pt;
            margin-left: 20%;
            /*margin-bottom: 50px;*/
            border-radius: 10px;
        }

        /* Full-width input fields */
        input[type=text], input[type=password] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            border-radius: 6px;
            background: #f1f1f1;
        }

        input[type=text]:focus, input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }

        /* Overwrite default styles of hr */
        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }

        /* Set a style for the submit button */
        .registerbtn {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            /*width: 100%;*/
            opacity: 0.9;
        }

        .registerbtn:hover {
            opacity: 1;
        }

        /* Add a blue text color to links */
        a {
            color: dodgerblue;
        }

        h1 {
            color: #ffcc00;
            text-align: center;
            text-shadow: 3px 3px 6px #cccccc;
        }

        .cancelbtn {
            width: auto;
            padding: 14px 20px;
            margin: 8px 0;
            color: #f1f1f1;
            border: none;
            cursor: pointer;
            /*width: 100%;*/
            opacity: 0.9;
            background-color: #f44336;
        }

        .cancelbtn:hover {
            opacity: 1;
        }

        .registerbtn, .cancelbtn {
            float: left;
            width: 50%;
            /*margin-bottom: 50px;*/
            /*background: red;*/

        }
    </style>
</head>
<body>

<form action="/action_page.php">
    <div class="container">
        <div class="panel-body" style="text-align: center"><img src="image/SCSUChampadeeBranding-4.png"
                                                                class="img-responsive"
                                                                style="width:20%" alt="Image"></div>
        <h1>สมัครสมาชิกใหม่</h1>
        <hr>

        <label for="username"><b>User Name</b></label><br>
        <input type="text" placeholder="ชื่อผู้ใช้" name="username" required>
        <br>

        <label for="address"><b>Address</b></label><br>
        <input type="text" placeholder="ที่อยู่" name="address" required>
        <br>

        <label for="email"><b>Email</b></label><br>
        <input type="text" placeholder="Email" name="email" required>
        <br>

        <label for="phone-number"><b>Tel.</b></label><br>
        <input type="text" placeholder="เบอร์โทร." name="email" required>
        <br>

        <label for="psw"><b>Password</b></label><br>
        <input type="password" placeholder="Password" name="psw" required>
        <br>

        <label for="psw-repeat"><b>Repeat Password</b></label><br>
        <input type="password" placeholder="Password" name="psw-repeat" required>
        <hr>

        <button type="submit" class="registerbtn">Register</button>
        <a href="index.php">
            <button type="button" class="cancelbtn">Cancel</button>
        </a>
        <hr>
    </div>
</form>

</body>
</html>
