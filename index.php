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
                    <div class="col-md-12 bg-light p-4 border-info rounded">
                        <h1 class="animated fadeInUp mb-3 text-secondary">
                            <span style="font-weight:bold">
                                Welcome
                            </span>
                        </h1>
                        <p class="animated fadeInUp text-left m-3">
                            Dear colleagues,<br>
                            .......
                        </p>
                        <ul class="text-left">
                            <li>Genetics and Breeding;</li>
                        </ul>
                        <p class="animated fadeInUp text-left m-3">
                            The conference will be hosted by <a href="https://www.muc.edu.cn/index.htm" target="_blank">Minzu University of China</a> in <a href="http://english.beijing.gov.cn/" target="_blank">Beijing City</a>.
                            <br>
                            ......
                            <br><br>
                            We expect that all attendees will enjoy the stay in Beijing during the conference.
                            <br><br>
                            The Conveners,
                            <br>
                            <span style="font-weight:bold">Prof. Xu</span>,
                            <br>
                            College of Horticulture, China Agriculture University
                            <br>
                            <a href="test@muc.edu.cn">test@muc.edu.cn</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <img class="animated fadeInUp img-fluid d-block mx-auto"
                                src="../images/logo-g.png">
                    </div>
                </div>
            </div>
        </div>

        <div class="animated fadeInUp py-5 bg-light" 
                style="background-image: url(../images/bb7.png); background-position: top left;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="animated fadeInUp text-center hidden animated text-dark py-3 pt-5"
                                style="text-shadow: 0px 0px 4px white;">
                            <span style="font-weight:bold">
                                IMPORTANT DATES
                            </span>
                        </h1>
                    </div>
                </div>
                <div class="row pb-5">
                    <!--background black; from top to bottom-->
                    <div class="col-md-3 background: rgb(0, 0, 0, 0.5) !important;"
                            style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5));
                                    background-position: top left; background-size: 100%; background-repeat: repeat;">
                        <h6 class="animated fadeInUp text-center pt-3 text-white"
                                style="text-shadow: 0px 0px 4px black;">
                            Start of abstract submission
                        </h6>
                        <h5 class="animated fadeInUp text-center pb-2 hidden animated text-warning"
                                style="text-shadow: 0px 0px 4px black;">
                            <span style="font-weight:bold">
                                September 15<sup>th</sup>, &nbsp; 2024
                            </span>
                        </h5>
                    </div>
                    <div class="col-md-3" 
                            style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5));
                                    background-position: top left; background-size: 100%; background-repeat: repeat;">
                        <h6 class="animated fadeInUp text-center pt-3 text-white"
                                style="text-shadow: 0px 0px 4px black;">
                            Deadline for abstract submission
                        </h6>
                        <h5 class="animated fadeInUp text-center pb-2 hidden animated text-warning"
                                style="text-shadow: 0px 0px 4px black;">
                            <span style="font-weight:bold">
                                May 31<sup>st</sup>, &nbsp; 2024
                            </span>
                        </h5>
                    </div>
                    <div class="col-md-3" 
                            style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5));
                                    background-position: top left; background-size: 100%; background-repeat: repeat;">
                        <h6 class="animated fadeInUp text-center pt-3 text-white"
                                style="text-shadow: 0px 0px 4px black;">
                            Deadline for early bird registration
                        </h6>
                        <h5 class="animated fadeInUp text-center pb-2 hidden animated text-warning"
                                style="text-shadow: 0px 0px 4px black;">
                            <span style="font-weight:bold">
                                May 31<sup>st</sup>, &nbsp; 2024
                            </span>
                        </h5>
                    </div>
                    <div class="col-md-3" 
                            style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5));
                                    background-position: top left; background-size: 100%; background-repeat: repeat;">
                        <h6 class="animated fadeInUp text-center pt-3 text-white"
                                style="text-shadow: 0px 0px 4px black;">
                            Deadline for full paper submission
                        </h6>
                        <h5 class="animated fadeInUp text-center pb-2 hidden animated text-warning"
                                style="text-shadow: 0px 0px 4px black;">
                            <span style="font-weight:bold">
                                July 31<sup>st</sup>, &nbsp; 2024
                            </span>
                        </h5>
                    </div>
                </div>
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