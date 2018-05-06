<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: "TH Sarabun New", "Browallia New", Arial, Helvetica, sans-serif;
            background: #fff5cc;
        }

        form {
            padding: 20%;
            padding-top: 30px;
            padding-bottom: 10px;
            font-size: 16pt;
        }

        input[type=text], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #f2f2f2;
            box-sizing: border-box;
            border-radius: 5px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            opacity: 0.8;
        }

        .imgcontainer {
            text-align: center;

        }

        img.avatar {
            width: 40%;
            border-radius: 50%;
        }

        .container {
            padding: 16px;
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
            .signupbtn {
                width: 100%;
            }
            .cancelbtn {
                width: 100%;
            }
        }

        /* Float cancel and signup buttons and add an equal width */
        .signupbtn, .loginbtn {
            float: left;
            width: 50%;
        }

        /* Extra styles for the cancel button */
        .signupbtn {
            padding: 14px 20px;
            background-color: #ff0000 ;
        }

        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }

    </style>
</head>
<body>

<form action="/action_page.php"> <!--ใส่หน้าหลังจาก login แล้วตรงนี้-->
    <div class="imgcontainer">
        <img src="image/chamdee-head.png"  style="width: 20%" alt="Avatar" class="avatar">
    </div>

    <div class="container">
        <label for="uname"><b>Username/ Tel / E-mail :</b></label>
        <input type="text" placeholder="ชื่อผู้ใช้" name="uname" required>

        <label for="psw"><b>Password : </b></label>
        <input type="password" placeholder="รหัสผ่าน" name="psw" required>

        <div class="clearfix">
            <button type="submit" class="loginbtn">Login</button>
            <button type="button" class="signupbtn">Sign Up</button>
        </div>
        <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
        <br>
        <a href="index.php"><button type="button" class="cancelbtn">Cancel</button></a>
    </div>


</form>

</body>
</html>
