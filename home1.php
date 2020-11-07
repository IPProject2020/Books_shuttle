<?php
include "sellbook.php";

?>
<!DOCTYPE html>
<html>

<head>
    <title>Book Shuttle</title>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://fonts.googleapis.com/css2?family=Dosis&display=swap" rel="stylesheet">
    <!-- <meta http-equiv='X-UA-Compatible' content='IE=edge'> -->
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://fonts.googleapis.com/css2?family=Dosis&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
    <script src='index.js'></script>
</head>

<body>
    <div class="wrapper">
        <header class="page-header">
            <nav>
                <h2 class="logo">Book Shuttle</h2>
                <ul>
                    <li>
                        <a href=""><i class="fa fa-home" aria-hidden="true"></i>&nbsp;Home</a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-user" aria-hidden="true"></i>&nbsp;Hello,</a>
                    </li>
                    <li>
                        <a href="">Logout&nbsp;<i class="fa fa-sign-out" aria-hidden="true"></i>
</a>
                    </li>
                </ul>
            </nav>
        </header>
        <main class="page-main">
            <div>
                <div class="text-wrapper">
                    <h1>World's Largest Book Store</h1>
                </div>
                <!-- <div class="text-wrapper p-wrapper">
                        <p>Second Hand Buying And Selling of Used Book.</p>
                    </div> -->
                <div class="text-wrapper p-wrapper">
                    <p>Buy And Sell Used Books In India. Search And Buy Second Hand Books Near You. Post Free Ad To Sell Old Books In City. Download the app now. </p>
                </div>
                <button id="btn1" class="">Buy Books</button>
                <button id="btn2" data-target="#Sellbooksmodal" data-toggle="modal">Sell Books</button>
            </div>
        </main>
        <footer class="page-footer">
            <small>© Copyright 2018. All rights reserved.</small>
            <ul>
                <li>
                    <a href="" target="_blank">
                        <i class="icon ion-logo-facebook"></i>
                    </a>
                </li>
                <li>
                    <a href="" target="_blank">
                        <i class="icon ion-logo-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="" target="_blank">
                        <i class="icon ion-logo-linkedin"></i>
                    </a>
                </li>
                <li>
                    <a href="" target="_blank">
                        <i class="icon ion-logo-github"></i>
                    </a>
                </li>
            </ul>
        </footer>
    </div>
</body>

</html>