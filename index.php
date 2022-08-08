<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>seaWorld</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<?php

?>
    <div class="Main">
        <div class="container">
            <img src="./logo.png" alt="logo" class="logo">
            <h2 class="logoText">sea world</h2>
            <div class="mainTextDiv">
                <h1 class="mainText">Take care of the sea,<br>take care of life</h1>
            </div>

                <div class="mainFooter">
                    <div class="firstMainFooter">
                        <img src="firstphoto.png" alt="ecosystem" class="firstMainImg">
                        <p class="mainFooterText">Keep<br>Ecosystem</p>
                    </div>
                    <div class="secondMainFooter">
                        <img src="secphoto.png" alt="local people" class="secondMainImg">
                        <p class="mainFooterText">Keep<br>local people</p>
                    </div>
                    <div class="secondMainFooter">
                        <img src="thirdphoto.png" alt="local people" class="secondMainImg">
                        <p class="mainFooterText">Keep<br>Earth</p>
                    </div>
                </div>


        </div>
    </div>
    <div class="about">
        <div class="container">
            <img src="./aboutPhoto.png" alt="" class="aboutImg">
            <h2 class="aboutText">Who Are We</h2>
            <p class="aboutTextP">Lorem ipsum dolor sit amet, consectetur adipiscing elit,<br>sed do eiusmod tempor incididunt ut labore et dolore<br>magna aliqua. Ut enim ad minim veniam, quis nostrud<br>exercitation ullamco laboris nisi ut aliquip ex ea<br>commodo consequat. Duis aute irure dolor.</p>
        </div>
    </div>
    <div class="galerary">
        <div class="container">
            <img class="img1" src="Rectangle%205.png">
            <img src="Rectangle%2015.png" alt="" class="img2">
            <img src="Rectangle%209.png" alt="" class="img3">
            <img src="Rectangle%208.png" alt="" class="img4">

        </div>
    </div>
    <footer class="footer">
        <div class="container">
            <form action="mail.php" method="post">
                <input type="text" name="name" placeholder="name" class="input form-control">
                <input type="text" name="email" placeholder="email" class="input form-control">
                <button type="submit" class="input btn btn-success">Send</button>
            </form>
        </div>

    </footer>
</body>
</html>