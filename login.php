<?php include('kontroler\registration.php')?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Izdavanje stanova</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Oswald:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white pr-3" href="">Pitanja i odgovori</a>
                        <span class="text-white">|</span>
                        <a class="text-white px-3" href="">Pomoć</a>
                        <span class="text-white">|</span>
                        <a class="text-white pl-3" href="">Podrška</a>
                    </div>
                </div>
                <div class="col-md-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white px-3" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-white pl-3" href="">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container position-relative" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <h1 class="m-0 display-5 text-white"><span class="text-primary">iznajmi</span>STAN</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="..\index.php" class="nav-item nav-link active">Početna</a>
                        <a href="view\service.php" class="nav-item nav-link">Usluge</a>
                        <a href="view\project.php" class="nav-item nav-link">Projekti</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="view\blog.php" class="dropdown-item">Blog Grid</a>
                                <a href="view\view\single.php" class="dropdown-item">Blog Detail</a>
                            </div>
                        </div>
                        <a href="view\contact.php" class="nav-item nav-link">Kontakt</a>
                        <a href="view\about.php" class="nav-item nav-link">O nama</a>
                        <?php
                            if(isset($_SESSION["email"])) {
                                echo '<a href="index.php? logout='. 1 .'" class="nav-item nav-link">Log out</a>';
                            }
                            else{
                                echo '<a href="view\signup.php" class="nav-item nav-link">Sign up</a>';
                            }
                        ?>
                        <?php

                            if(isset($_SESSION["email"])) {
                                echo '<p class="nav-item nav-link">Dobrodosli<br>'.$_SESSION['ime'].' '.$_SESSION['prezime'].'</p>';

                            }
                            else{
                                echo '<a href="view\login.php" class="nav-item nav-link">Log in</a>';
                            }
                        ?>


                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Under Nav Start -->
    <div class="container-fluid bg-white py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 text-left mb-3 mb-lg-0">
                    <div class="d-inline-flex text-left">
                        <h1 class="flaticon-office font-weight-normal text-primary m-0 mr-3"></h1>
                        <div class="d-flex flex-column">
                            <h5>Naš ofis</h5>
                            <p class="m-0">Beogradska 25, Vračar, Beograd</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-left text-lg-center mb-3 mb-lg-0">
                    <div class="d-inline-flex text-left">
                        <h1 class="flaticon-email font-weight-normal text-primary m-0 mr-3"></h1>
                        <div class="d-flex flex-column">
                            <h5>Naš email</h5>
                            <p class="m-0">stefnem@example.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-left text-lg-right mb-3 mb-lg-0">
                    <div class="d-inline-flex text-left">
                        <h1 class="flaticon-telephone font-weight-normal text-primary m-0 mr-3"></h1>
                        <div class="d-flex flex-column">
                            <h5>Kontak nas</h5>
                            <p class="m-0">+381 60 1234567</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Under Nav End -->


    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary py-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="mb-4 mb-md-0 text-primary text-uppercase">Log in</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn btn-outline-primary" href="">Početna</a>
                        <i class="fas fa-angle-double-right text-primary mx-2"></i>
                        <a class="btn btn-outline-primary disabled" href="">Log in</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- Contact Start -->
    <div class="container-fluid bg-white">
        <div class="container">
            <div class="row">
               <div class="col-lg-5">
                  <div class="d-flex flex-column justify-content-center bg-primary h-100 p-5">
                      <div class="d-inline-flex border border-secondary p-4 mb-4">
                          <h1 class="flaticon-office font-weight-normal text-secondary m-0 mr-3"></h1>
                          <div class="d-flex flex-column">
                              <h4>Naš ofis</h4>
                              <p class="m-0 text-white">Beogradska 25, Vračar, Beograd</p>
                          </div>
                      </div>
                      <div class="d-inline-flex border border-secondary p-4 mb-4">
                          <h1 class="flaticon-email font-weight-normal text-secondary m-0 mr-3"></h1>
                          <div class="d-flex flex-column">
                              <h4>Naš email</h4>
                              <p class="m-0 text-white">stefnem@example.com</p>
                          </div>
                      </div>
                      <div class="d-inline-flex border border-secondary p-4">
                          <h1 class="flaticon-telephone font-weight-normal text-secondary m-0 mr-3"></h1>
                          <div class="d-flex flex-column">
                              <h4>Kontakt telefon</h4>
                              <p class="m-0 text-white">+381 60 1234567</p>
                          </div>
                      </div>
                  </div>
               </div>
                <div class="col-lg-7 mb-5 my-lg-5 py-5 pl-lg-5">
                    <div class="contact-form">
                        <div id="success"></div>
                        <form method="post" action="login.php" name="login" id="loginForm" novalidate="novalidate">
                            <? php include('kontroler\errors.php'); ?>
                            <div class="control-group">
                                <input type="email" class="form-control p-4" name="email" id="email" placeholder="Email" required="required" data-validation-required-message="Ovo polje je obavezno" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="password" class="form-control p-4" name="password" id="password" placeholder="Lozinka" required="required" data-validation-required-message="Ovo polje je obavezno" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <input type="checkbox" onclick="showPassword();">  Prikaži lozinku</input>
                                <p class="help-block text-danger"></p>
                            </div>
                            <p>Nemate nalog? <a href="signup.php"><b>Prijavite se</b></a></p>
                            <div>
                                <button class="btn btn-primary py-3 px-5" type="submit" id="sendMessageButton" name="login_user">Log in</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Kontaktirajte nas</h4>
                <p><i class="fa fa-map-marker-alt mr-2"></i>Knez Mihajlova 12, Beograd</p>
                <p><i class="fa fa-phone-alt mr-2"></i>+381 60 1234567</p>
                <p><i class="fa fa-envelope mr-2"></i>stefnem@example.com</p>
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Brzi Linkovi</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Services</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Projects</a>
                    <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Popularni linkovi</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Services</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Projects</a>
                    <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Bilten</h4>
                <form action="">
                    <div class="form-group">
                        <input type="text" class="form-control border-0" placeholder="Vaše ime" required="required" />
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control border-0" placeholder="Vaš email" required="required" />
                    </div>
                    <div>
                        <button class="btn btn-lg btn-primary btn-block border-0" type="submit">Prijavi se</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="container border-top border-secondary pt-5">
            <p class="m-0 text-center text-white">
                &copy; <a class="text-white font-weight-bold" href="#">iznajmiSTAN</a>. All Rights Reserved. Designed by programer duo Nemanja&Stefan.

            </p>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <!-- Prikazi lozinku -->
    <script type="text/javascript">
        function showPassword() {
            var password=document.getElementById('password');
            if(password.type=='password')
            {
                password.type='text';
            }
            else
            {
                password.type='password';
            }
        }
    </script>
</body>

</html>
