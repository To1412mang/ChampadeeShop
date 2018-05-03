<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Comment Box</title>
    <style>

        body{
            margin:0px;
            font-family:Baskerville, 'Palatino Linotype', Palatino, 'Century Schoolbook L', 'Times New Roman', serif;
        }

        input[type=text], select {
            width: 100%;
            border-radius: 5px;
            margin: 7px 0;
            border: 1px solid #ccc;
            padding: 14px 18px;
            display: inline-block;
            box-sizing: border-box;
        }

        input[type=submit]:hover {
            background-color: #00a7d1;
        }

        textarea, select {
            width: 100%;
            border-radius: 5px;
            margin: 7px 0;
            border: 1px solid #ccc;
            padding: 14px 18px;
            display: inline-block;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 100%;
            border: none;
            color: white;
            padding: 14px 20px;
            background-color: #01c9fb;
            margin: 8px 0;
            cursor: pointer;
            border-radius: 4px;

        }

    </style>

</head>
<body>
<table bgcolor="#f2f2f2" style="padding:50px" align="center">
    <form action="" method="post">
        <tr>
            <td> Name : </td><td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td> Email : </td><td><input type="text" name="email"></td>
        </tr>
        <tr>
            <td> Website : </td><td><input type="text" name="website"></td>
        </tr>
        <tr>
            <td> Comment : </td><td><textarea name="comment" rows="6" cols="50"></textarea></td>
        </tr>
        <tr>
            <td><input type="submit" name="submit"></td></tr>

    </form>
</table>



<?php
if(isset($_POST["submit"]))
{

    //Including dbconfig file.
    include 'dbconfig.php';

    $name = $_POST["name"];
    $email = $_POST["email"];
    $website = $_POST["website"];
    $comment = $_POST["comment"];


    mysql_query("INSERT INTO comment_table (name,email,website,comment) VALUES ('$name','$email','$website','$comment')");

    echo '<center> Comment Successfully Submitted </center>';

}

?>

</body>
</html>