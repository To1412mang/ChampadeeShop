<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        * {
            padding: 0;
            margin: 0;
            text-decoration: none;
            list-style: none;
        }

        body {
            font: 12px/18px tahoma;
            width: 510px;
            margin: 50px auto;
        }

        ul[id^="thaicss-nav"]:after {
            content: " ";
            display: block;
            clear: both;
        }

        ul[id$="horizontal"] > li {
            float: left;
            width: 100px;
            position: relative;
            background: #f2f2f2;
            border-left: solid 1px #ccc;
        }

        ul[id$="horizontal"] > li:first-child {
            border-left: none;
        }

        ul[id|="thaicss-nav"] > li > a, ul[id|="thaicss-nav"] > li:hover > ul > li > a {
            display: block;
            line-height: 20px;
        }

        ul[id|="thaicss-nav"] > li > a {
            text-align: center;
            color: #333;
        }

        ul[id|="thaicss-nav"] > li:hover > ul > li > a {
            color: #FFF;
        }

        ul[id|="thaicss-nav"] > li:hover > a, ul[id|="thaicss-nav"] > li:hover > ul > li:hover > ul > li > a {
            color: #CCC;
        }

        ul[id|="thaicss-nav"] > li:hover, ul[id|="thaicss-nav"] > li > ul, ul[id|="thaicss-nav"] > li:hover > ul > li > ul {
            background: #666;
        }

        ul[id|="thaicss-nav"] > li:hover > ul > li:hover, ul[id|="thaicss-nav"] > li:hover > ul > li:hover > ul > li:hover {
            background: #444;
        }

        ul[id$="horizontal"] > li > ul, ul[id$="horizontal"] > li:hover > ul > li > ul {
            visibility: hidden;
            position: absolute;
            width: 150px;
        }

        ul[id|="thaicss-nav"] > li:hover > ul, ul[id|="thaicss-nav"] > li:hover > ul > li:hover > ul {
            visibility: visible;
        }

        ul[id|="thaicss-nav"] > li:hover > ul > li, ul[id|="thaicss-nav"] > li:hover > ul > li:hover > ul > li {
            line-height: 18px;
            padding-left: 3px;
            border-bottom: solid 1px #555;
            border-top: solid 1px #999;
        }

        ul[id$="horizontal"] > li:hover > ul > li:hover > ul {
            left: 150px;
            margin-top: -20px;
        }
    </style>
</head>

<body>

<ul id="thaicss-nav-horizontal">
    <li><a href="#">Home</a></li>
    <li><a href="#">Articles</a>

        <ul>
            <li><a href="#">Articles 1</a></li>
            <li><a href="#">incididunt ut </a>

                <ul>
                    <li><a href="#">Lorem ipsum dolor</a></li>
                    <li><a href="#">consectetur adipisicing</a></li>

                    <li><a href="#">eiusmod tempor </a></li>
                </ul>
            </li>
            <li><a href="#">Articles 3</a></li>

        </ul>
    </li>
    <li><a href="#">Products</a>
        <ul>
            <li><a href="#">Products 1</a></li>

            <li><a href="#">Products 2</a></li>
            <li><a href="#">Products 3</a></li>
        </ul>

    </li>
    <li><a href="#">About Us</a></li>
    <li><a href="#">Contact Us</a></li>

</ul>
</body>
</html>
