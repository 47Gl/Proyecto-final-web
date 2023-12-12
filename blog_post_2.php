<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog 2</title>
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
            max-height: 350px;
            overflow: hidden;
        }

        video{
            width: 90%;
            height: 90%;
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
        <source src="public/video/Blog2.mp4" type="video/mp4">
    </video>
    
    </div>
</body>
</html>