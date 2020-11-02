
<?php 
include "SignUp.html";
include "Login.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/fontawesome.min.css">
        <script src="https://use.fontawesome.com/c24a3b05a2.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/book_styles.css">
    </head>
    <body>
        <div class="header" id="topheader">

            <nav class="navbar navbar-expand-lg fixed-top">
                <div class="container text-uppercase">	
                  <a class="navbar-brand font-weight-bold text-white" href="#">Book Shuttle</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                      <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Service</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Price</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                      </li>
<!--
                        <? require_once "SignUp.php"; if(isset $_SESSION['uname']){ ?>
                                <li>Hii <? echo ($_SESSION['uname']);?> </li>
                            <?}
                        ?>
-->


                    </ul>
                    </div>
                </div>
            </nav>

            <section class="header-section">
                <div class="center-div">
                    <h2 class="font-weight-bold">World's Largest Book Store</h2>
                    <p>Second Hand Buying And Selling of Used Book</p>
                    <div class="header-button">
                        <a href="#" data-toggle="modal" data-target="#loginModal">Login</a>
                        <a href="#" data-toggle="modal" data-target="#signupModal">Sign Up</a>
                    </div>
                </div>

            </section>


        </div>
        

    <!-- ********************** Header Part End ***************************** -->
    <!-- ************************ Three Extra Header Div start ************** -->

    <section class="header-extradiv">
        <div class="container">
            <div class="row">
                <div class=" extra-div col-lg-4 col-md-4 col-12">
                    <a href="#"><i class="fa-3x fa fa-book" aria-hidden="true"></i></a>
                    <h2>Register Here</h2>
                    <p>User Can generate a Unique Id and Password to log into Our Website.Where Its keeps records of UserID,Username,Password,Mobile No,Tracks of Orders.</p>
                </div>

                <div class=" extra-div col-lg-4 col-md-4 col-12">
                    <a href="#"><i class="fa-3x fa fa-book" aria-hidden="true"></i></a>
                    <h2>View Books</h2>
                    <p>It contain number of Books User wants to sell or buy.Where user enter number of Books he wish to sell and purchase.</p>
                </div>

                <div class=" extra-div col-lg-4 col-md-4 col-12">
                    <a href="#"><i class="fa-3x fa fa-book" aria-hidden="true"></i></a>
                    <h2>Order History</h2>
                    <p>It Keeps track of order books or those who wants to buy and sell their books.It contains details like OrderID,BookName,Date,Price. </p>
                </div>

            </div>
        </div>
    </section>

    <!-- *************************** Three Extra Header Div Ends ************ -->

    <!-- *************************** Offer section starts ************ -->

    <section class="serviceoffer" id="servicediv">
        <div class="container headings text-center">
            <h1 class="text-center">How To Sell Used Books On Book Shuttle?</h1>
            <p class="text-center">Variety of Books Can Buy And Sell among thousand of People's.</p>
        </div>

            <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-10 offset-1 offset-lg-0">
                    <div class="names my-3">
                        <h1>HTML</h1>
                        <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:100%">100%</div>
                    </div>
                    </div>

                    <div class="names my-3">
                        <h1>CSS</h1>
                        <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width:90%">90%</div>
                        </div>
                    </div>

                    <div class="names my-3">
                        <h1>JAVASCRIPT</h1>
                        <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width:80%">80%</div>
                        </div>
                    </div>

                    <div class="names my-3">
                        <h1>REACT JS</h1>
                        <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" style="width:75%">75%</div>
                        </div>
                    </div>

                    <div class="names my-3">
                        <h1>NODE JS</h1>
                        <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width:80%">80%</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12 servicediv">
                        <div class="row">
                            <div class="col-lg-2 col-2 service-icons">
                                <i class="fa-3x fa fa-address-book" aria-hidden="true"></i>

                            </div>
                            <div class="col-1g-10 col-10">
                                <h2>Simply Register</h2>
                                <p>Register via Book Shuttle app or web. You can create account socially also.</p>
                            </div>
                        </div>	

                        <div class="row">
                            <div class="col-lg-2 col-2 service-icons">
                                <i class="fa-3x fa fa-television" aria-hidden="true"></i>
                            </div>
                            <div class="col-1g-10 col-10">
                                <h2>Post Ad</h2>
                                <p>Fill required details and submit book ad you want to sell.</p>
                            </div>
                        </div>	

                        <div class="row">
                            <div class="col-lg-2 col-2 service-icons">
                                <i class="fa-3x fa fa-question-circle" aria-hidden="true"></i>

                            </div>
                            <div class="col-1g-10 col-10">
                                <h2>Need Help?</h2>
                                <p>Wherever you stuck in process, just tap on floating chat icon on bottom left.</p>
                            </div>
                        </div>	
                    </div>
            </div>

        </div>
    </section>


    <!-- *************************** offer section Ends ************ -->
    <!-- *****************************project work start*************** -->

    <section class="project-work">
        <div class="container headings text-center">
            <p class="text-center font-weight-boldt">MORE THAN 2,000 WEBSITE CREATED</p>
        </div>

        <div class="container d-flex justify-content-around align-items-center text-center">
            <div>
                <h1> 1500 </h1>
                <p>CMS Installation</p>
            </div>

            <div>
                <h1> 2500 </h1>
                <p>Awards Won</p>
            </div>

            <div>
                <h1> 700 </h1>
                <p>Happy clients</p>
            </div>

            <div>
                <h1> 500 </h1>
                <p>Working On</p>
            </div>

        </div>
    </section>

    <!-- *****************************project work ends*************** -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
<!--    <script src="Javascript/script.js"></script>-->
</html>