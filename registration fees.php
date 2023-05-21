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

        <div class="section-parallax pt-5 pb-5">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-12 pt-4 border-info rounded">
                        <h1 class="animated fadeInUp mb-3 text-secondary">
                            <span style="font-weight:bold">
                                Registration Fees
                            </span>
                        </h1>
                        <div class="table-responsive animated fadeInUp pt-3">
                            <table class="table table-hover">
                                <thead>
                                    <tr class="border-top-0">
                                        <th class="border-top-0">Types</th>
                                        <th class="border-top-0">
                                            Early Bird Registration<br>
                                            before 31<sup>st</sup> May 2023
                                        </th>
                                        <th class="border-top-0">
                                            Registration<br>
                                            after 31<sup>st</sup> May 2023
                                        </th>
                                    </tr>
                                </thead>
                                <tdoby>
                                    <tr>
                                        <td>ISHS member</td>
                                        <td>400 USD(250 USD)* or 2500 RMB</td>
                                        <td>500 USD(350 USD)* or 3000 RMB</td>
                                    </tr>
                                    <tr>
                                        <td>Non-ISHS member</td>
                                        <td>500 USD(350 USD)* or 3000 RMB</td>
                                        <td>600 USD(450 USD)* or 3600 RMB</td>
                                    </tr>
                                    <tr>
                                        <td>Student</td>
                                        <td>200 USD or 1200 RMB</td>
                                        <td>250 USD or 1500 RMB</td>
                                    </tr>
                                    <tr>
                                        <td>One-day registration</td>
                                        <td>150 USD or 900 RMB</td>
                                        <td>150 USD or 900 RMB</td>
                                    </tr>
                                    <tr>
                                        <td class="border-bottom">Accompanying person</td>
                                        <td class="border-bottom">150 USD or 900 RMB</td>
                                        <td class="border-bottom">150 USD or 900 RMB</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <h6 class="animated fadeInUp text-left">
                            &nbsp; *For delegates from the developing countries.<br>
                            &nbsp; **RMB (CNY) is only for Chinese participants.
                        </h6>
                        <br>
                    </div>
                </div>
                <div class="row pb-4">
                    <div class="animated fadeInUp col-md-12 px-4">
                        <h5>
                            <span style="font-weight:bold">
                                Note on ISHS Membership
                            </span>
                        </h5>
                        <p>
                            Prior to Registration and Abstract submission steps, please consider becoming a member of the International Society for Horticultural Science (ISHS), to immediately benefit from the ISHS membership advantages, i.e. lower registration fee and waived abstract submission fee. Information about ISHS Membership can be found here: <a href="https://www.ishs.org/members" target="_blank"> <u>www.ishs.org/members</u></a>.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="py-5 animated fadeInUp bg-light">
            <div class="container">
                <div class="row">
                    <div class="table-responsive">
                        <table class="table table-hover text-center">
                            <thead>
                                <tr>
                                    <th class="border-top-0 text-center">&nbsp;</th>
                                    <th class="border-top-0 text-center">
                                        <h3>Full registration</h3>
                                    </th>
                                    <th class="border-top-0 text-center">
                                        <h3>Student registration</h3>
                                    </th>
                                    <th class="border-top-0 text-center">
                                        <h3>Accompanying person</h3>
                                    </th>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>ISHS members and non-ISHS members</td>
                                    <td>Student **</td>
                                    <td>Accompanying person</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-left">Welcome reception</td>
                                    <td><i class="fa fa-check fa-lg text-muted"></td>
                                    <td><i class="fa fa-check fa-lg text-muted"></td>
                                    <td><i class="fa fa-check fa-lg text-muted"></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Official Symposium program and participant's package</td>
                                    <td><i class="fa fa-check fa-lg text-muted"></td>
                                    <td><i class="fa fa-check fa-lg text-muted"></td>
                                    <td><i class="fa fa-times fa-lg text-muted"></td>
                                </tr>
                                <tr>
                                    <td class="text-left">All lunches and mid-session coffee/refreshments breaks</td>
                                    <td><i class="fa fa-check fa-lg text-muted"></td>
                                    <td><i class="fa fa-check fa-lg text-muted"></td>
                                    <td><i class="fa fa-times fa-lg text-muted"></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Gala dinner</td>
                                    <td><i class="fa fa-check fa-lg text-muted"></td>
                                    <td><i class="fa fa-times fa-lg text-muted"></td>
                                    <td><i class="fa fa-check fa-lg text-muted"></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Acta Horticulturae proceedings volume</td>
                                    <td><i class="fa fa-check fa-lg text-muted"></td>
                                    <td><i class="fa fa-times fa-lg text-muted"></td>
                                    <td><i class="fa fa-times fa-lg text-muted"></td>
                                </tr>
                                <tr>
                                    <td class="text-left border-bottom">Technical Tour</td>
                                    <td class="border-bottom"><i class="fa fa-check fa-lg text-muted"></td>
                                    <td class="border-bottom"><i class="fa fa-check fa-lg text-muted"></td>
                                    <td class="border-bottom"><i class="fa fa-check fa-lg text-muted"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p class="text-danger">
                            &nbsp;** A certificate confirming student status is required to be submitted as a scanned copy to the Secretariat office/convenor of the conference.
                        </p>
                    </div>
                </div>
            </div>    
        </div>

        <div class="animated fadeInUp py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h5>
                            <span style="font-weight:bold">
                                Cancellation of registration
                            </span>
                        </h5>
                        <p>
                        It will be done with personal communication to convener on or before 30<sup>th</sup> April, 2023 with 50% refund.
                        </p>
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