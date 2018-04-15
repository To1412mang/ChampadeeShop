<!DOCTYPE html>
<html>
<head>
    <style>
        div.gallery {
            border: 1px solid #ccc;
        }

        div.gallery:hover {
            border: 1px solid #777;
        }

        div.gallery img {
            width: 100%;
            height: auto;
        }

        div.desc {
            padding: 15px;
            text-align: center;
        }

        * {
            box-sizing: border-box;
        }

        .responsive {
            padding: 0 6px;
            float: left;
            width: 24.99999%;
        }

        @media only screen and (max-width: 700px) {
            .responsive {
                width: 49.99999%;
                margin: 6px 0;
            }
        }

        @media only screen and (max-width: 500px) {
            .responsive {
                width: 100%;
            }
        }

        .clearfix:after {
            content: "";
            display: table;
            clear: both;
        }
    </style>
</head>
<body>

<h2>Responsive Image Gallery</h2>
<h4>Resize the browser window to see the effect.</h4>

<div class="responsive">
    <div class="gallery">
        <a target="_blank" href="image/Bown+ColourfullChampadeeMug.png">
            <img src="image/Bown+ColourfullChampadeeMug.png" alt="Trolltunga Norway" width="300" height="200">
        </a>
        <div class="desc">Add a description of the image here</div>
    </div>
</div>


<div class="responsive">
    <div class="gallery">
        <a target="_blank" href="image/BownChampadeeMug.png">
            <img src="image/BownChampadeeMug.png" alt="Forest" width="600" height="400">
        </a>
        <div class="desc">Add a description of the image here</div>
    </div>
</div>

<div class="responsive">
    <div class="gallery">
        <a target="_blank" href="image/ChampadeeCALICOBAG.png">
            <img src="image/ChampadeeCALICOBAG.png" alt="Northern Lights" width="600" height="400">
        </a>
        <div class="desc">Add a description of the image here</div>
    </div>
</div>

<div class="responsive">
    <div class="gallery">
        <a target="_blank" href="image/ChampadeeWATERBOTTLES.png">
            <img src="image/ChampadeeWATERBOTTLES.png" alt="Mountains" width="600" height="400">
        </a>
        <div class="desc">Add a description of the image here</div>
    </div>
</div>

<div class="responsive">
    <div class="gallery">
        <a target="_blank" href="image/ColourfullChampadeeMug.png">
            <img src="image/ColourfullChampadeeMug.png" alt="Mountains" width="600" height="400">
        </a>
        <div class="desc">Add a description of the image here</div>
    </div>
</div>

<div class="responsive">
    <div class="gallery">
        <a target="_blank" href="image/SCSUChampadeeBranding-1.png">
            <img src="image/SCSUChampadeeBranding-1.png" alt="Trolltunga Norway" width="300" height="200">
        </a>
        <div class="desc">Add a description of the image here</div>
    </div>
</div>


<div class="responsive">
    <div class="gallery">
        <a target="_blank" href="image/SCSUChampadeeBranding-1.png">
            <img src="image/SCSUChampadeeBranding-1.png" alt="Forest" width="600" height="400">
        </a>
        <div class="desc">Add a description of the image here</div>
    </div>
</div>

<div class="responsive">
    <div class="gallery">
        <a target="_blank" href="image/SCSUChampadeeBranding-1.png">
            <img src="image/SCSUChampadeeBranding-1.png" alt="Northern Lights" width="600" height="400">
        </a>
        <div class="desc">Add a description of the image here</div>
    </div>
</div>


</body>
</html>
