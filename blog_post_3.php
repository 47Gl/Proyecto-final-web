<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog 3</title>
    <style>
        body{
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-image: url('public/images/blog/fonfo1.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        #video-container{
            max-width: 850px;
            max-height: 1200px;
            overflow: hidden;
        }

        video{
            width: 100%;
            height: 100%;
        }

        #overlay-image{
            position: absolute;
            top: 10px;
            left: 10px;
            width: 60px;
            height: auto;
            z-index: 1;
        }
    </style>
</head>
<body>
    <div id="video-container">
    <video controls>
        <source src="public/video/blog1.mp4" type="video/mp4">
    </video>
    
    </div>
</body>
</html>