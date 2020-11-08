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
    <style>
      * {
        box-sizing: border-box;
      }

      /* Create two equal columns that floats next to each other */
      .column {
        float: left;
        width: 20%;
        padding: 10px;
        height: 100vh; /* Should be removed. Only for demonstration */
      }
      .column2 {
        float: left;
        width: 80%;
        padding: 10px;
        height: 100vh; /* Should be removed. Only for demonstration */
      }

      /* Clear floats after the columns */
      .row:after {
        content: "";
        display: table;
        clear: both;
      }
     


</style>
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
         <div class="row">
      <div class="column" style="background-color:var(--main-white-color)"><br><br>
        <p style="text-align: center; font-size: 20px;"><i>CATEGORY </i></p><br><br>
       <a  href="#" style="text-decoration: none;" onclick="myFunction()"> 
          <div class="w3-container">
            <div
              class="w3-card-4"
              style="width: 100%; "
            >
              <div class="w3-container w3-center" >
                <p style="color: black;">ENGINEERING</p>
              </div>
            </div>
          </div></a>
        <br><br>
        <a href="#" style="text-decoration: none;" onclick="myFunction1()">
          <div class="w3-container">
            <div
              class="w3-card-4"
              style="width: 100%; "
            >
              <div class="w3-container w3-center">
                <p style="color: black;">MEDICAL</p>
              </div>
            </div>
          </div></a
        >
        <br><br>
        <a href="#" style="text-decoration: none;" onclick="myFunction2()">
          <div class="w3-container">
            <div
              class="w3-card-4"
              style="width: 100%; "
            >
              <div class="w3-container w3-center" >
                <p style="color: black;"> BCOM </p>
              </div>
            </div>
          </div></a
        >
        <br><br>
        <a href="#" style="text-decoration: none;" onclick="myFunction3()">
          <div class="w3-container">
            <div
              class="w3-card-4"
              style="width: 100%; height:30px; "
            >
              <div class="w3-container w3-center" >
                <p style="color: black;">BSC</p>
              </div>
            </div>
          </div></a
        >
      </div>
      <div class="column2" style="background-color:white">
       <iframe id="myFrame" height="100%" width="100%" style="border-style: none;" src="https://www.bitdegree.com">
       
       </iframe>
      </div>
    </div>
    <script>
        function myFunction() {
          document.getElementById("myFrame").src = "https://wwf.org";
        }
        function myFunction1() {
          document.getElementById("myFrame").src = "https://www.google.com";
        }
        function myFunction2() {
          document.getElementById("myFrame").src = "https://www.bitdegree.com";
        }
        function myFunction3() {
          document.getElementById("myFrame").src = "prac2partA.html";
        }
        </script>
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
