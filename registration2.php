<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
        <title>Silkfruit2024</title>
        <meta name="description" content="Silkfruit2024, MUC">
        <meta name="keywords" content="Silkfruit2024, MUC">
        <!--if screen size >= 1200px then navbar when cursor hover...-->
        <style> @media only screen and (min-width: 1200px){
            .navbar-nav li:hover>.dropdown-menu{
                display:block;
            }
        }
            .dropdown-menu{margin-top:0}
        </style>

        <style>.navbar .dropdown-menu a:hover{
            color:#ffffff; background-color:#336699;
        }
        </style>
        <!--runoob.com & for bootstrap-->
        <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdn.staticfile.org/popper.js/1.15.0/umd/popper.min.js"></script>
        <script src="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg bg-secondary navbar-dark">
            <div class="container-fluid"> 
                <button class="navbar-toggler navbar-toggler-right border-0" 
                        type="button" data-toggle="collapse" data-target="#navbar5">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbar5">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="silkfruit.php">
                                <text class="text-white">HOME</text>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <!--#:defalut page--->
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" 
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <text class="text-white">SYMPOSIUM</text>
                            </a>
                            <div class="dropdown-menu" aira-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="keynote speakers.php">Kernote Speakers</a>
                                <a class="dropdown-item" href="committee.php">Committee</a>
                                <a class="dropdown-item" href="venue.php">Venue</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" 
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <text class="text-white">PROGRAM</text>
                            </a>
                            <div class="dropdown-menu" aira-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="scientific program.php">Sceintific Program</a>
                                <a class="dropdown-item" href="social activities.php">Social Activities</a>
                                <a class="dropdown-item" href="technical trip.php">Technical Trip</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" 
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <text class="text-white">REGISTRATION</text>
                            </a>
                            <div class="dropdown-menu" aira-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="registration fees.php">Fees</a>
                                <a class="dropdown-item" href="registration.php">Registration</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" 
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <text class="text-white">INFORMATION FOR AUTHORS</text>
                            </a>
                            <div class="dropdown-menu" aira-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="abstract and full text submission.php">Abstract and full text submission</a>
                                <a class="dropdown-item" href="presentation guidelines.php">Presentation guidelines</a>
                                <a class="dropdown-item" href="awards.php">Awards</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" 
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <text class="text-white">TRAVEL &amp; ACCOMMODATION</text>
                            </a>
                            <div class="dropdown-menu" aira-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="travel information.php">Travel Information</a>
                                <a class="dropdown-item" href="hotel information.php">Hotel Information</a>
                                <a class="dropdown-item" href="about beijing.php">About Beijing</a>
                                <a class="dropdown-item" href="visa information.php">Visa Information</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="sponsors.php">
                                <text class="text-white">SPONSORS</text>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="contact.php">
                                <text class="text-white">CONTACT</text>
                            </a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nac-link text-dark" href="login.php">
                                <text class="text-white">LOGIN</text>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="text-center text-white align-items-center d-flex "
                style="background-image: url(../images/93.png); background-position: top left;">
            <div class="container py-3">
                <div class="row py-3">
                    <div class="col-md-12 col-lg-12 mx-auto">
                        <div class="row">
                            <div class="col-md-2">
                                <img class="img-fluid d-none d-md-block animated fadeInUp"
                                        src="../images/logo2.png">
                                <div></div>
                                <div class="d-block d-md-none row">
                                    <div class="col-md-12">
                                        <!--d-md-none & d-md-block & d-block & d-none for hidden or shown on different devices / animated bounceInLeft--->
                                        <img class="img-fluid d-block d-md-none animated fadeInUp"
                                                scr="../images/logo66.png">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <!--d-none d-md-block for lg screen-->
                                <h1 class="d-none d-md-block animated fadeInUp pt-2 text-white text-left"
                                        style="text-shadow: 0px 0px 4px black;">
                                    <span style="font-weight:bold">
                                        Conference title here...
                                    </span>
                                </h1>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3 class="d-block d-md-none animated fadeInUp text-white"
                                                style="text-shadow: 0px 0px 4px;">
                                            <span style="font-weight:bold">
                                                Con.title here...
                                            </span>
                                        </h3>
                                        <img class="animated fadeInUp d-none d-md-block animated fadeInUp float-left"
                                                src="../images/slogennew.png">
                                        <img class="animated fadeInUp img-fluid d-block d-md-none animated fadeInUp float-left"
                                                src="../images/slogen4.png">
                                        <h6 class="d-block d-md-none animated fadeInUp text-white pt-2 pb-2"
                                                style="text-shadow: 0px 0px 4px black;">
                                            <span style="font-weight:bold">
                                                October, 2024 &nbsp; Beijing, China
                                            </span>
                                        </h6>
                                    </div>
                                </div>
                                <h3 class="d-none d-md-block animated fadeInUp pb-2 pt-1 text-white text-left"
                                        style="text-shadow: 0px 0px 4px black;">
                                    <span style="font-weight:bold">
                                        October, 2024 &nbsp; Beijing, China
                                    </span>
                                </h3>
                                <div class="d-none d-md-block row">
                                    <div class="col-md-12 text-left">
                                        <a href="registration.php" class="btn mx-1 text-white btn-secondary btn-lg animated fadeInUp"
                                            style="box-shadow: 0px 0px 4px black;">
                                            Register
                                        </a>
                                        <a class="btn mx-1 btn-light text-dark btn-lg animated fadeInUp"
                                            href="abstract and full text submission.php"
                                            style="box-shadow: 0px 0px 4px black;">
                                            Abstract
                                        </a>
                                    </div>
                                </div>
                                <div class="d-block d-md-none row">
                                    <div class="col-md-12 text-center">
                                        <a href="registration.php" class="btn mx-1 text-white btn-secondary animated fadeInUp"
                                            style="box-shadow: 0px 0px 4px black;">
                                            Register
                                        </a>
                                        <a class="btn mx-1 btn-light text-dark animated fadeInUp"
                                            href="abstract and full text submission.php"
                                            style="box-shadow: 0px 0px 4px black;">
                                            Abstract
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>

                    </div>
                </div>
            </div>
        </div>

        <div class="section-parallax pt-5 pb-4">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-12 p-4 border-info rounded">
                        <h1 class="animated fadeInUp mb-3 text-secondary">
                            <span style="font-weight:bold">
                                Registration
                            </span>
                        </h1>
                    </div>
                </div>
                <form name="form1" method="post">
                    <div class="row pb-4">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="animated fadeInUp col-md-8">
                                    
                                    <div class="form-group">
                                        <label>ISHS membership number</label>
                                        <input name="member" type="text" class="form-control" id="member">
                                    </div>
                                    
                                    
                                </div>
                            </div>
                            <div class="row pt-4">
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <input name="B1" type="submit" class="btn btn-secondary btn-block btn-lg" id="B1" value="Register">
                                </div>
                                <div class="col-md-4"></div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="text-white bg-info" draggable="true">
            <div class="container">
                <div class="row">
                    <div class="p-5 col-md-9">
                        <h4 class="hidden animated pt-3 pb-2">
                            Contact us<br>
                        </h4>
                        <div class="row">
                            <div class="col-md-5">
                                <p class="hiidden animated">
                                    <span style="font-weight:bold">
                                        Dr. Xu
                                    </span>
                                    <br>
                                    <a href="test@muc.edu.cn;">
                                        <text class="text-white">
                                            test@muc.edu.cn;
                                        </text>
                                    </a>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                            </div>
                        </div>
                        <p class="text-white text-left hidden animayed">
                            © Copyright 2023-2024 &nbsp; &nbsp; The conference
                        </p>
                    </div>
                </div>
            </div>
        </div>


    </body>
</html>