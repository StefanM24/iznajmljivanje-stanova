<?php
include('models\konfigl.php');
  session_start();
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['email']);
  	header("location: login.php");
  }

  $provera=$_SESSION['email'];
  $klauzula1 = "SELECT * FROM stanovi_korisnici WHERE email='$provera' ";
  $klauzula2 = "SELECT * FROM izdavaci_stanova WHERE email='$provera'";
  $rezultat1 = mysqli_query($db, $klauzula1);
  $rezultat2 = mysqli_query($db,$klauzula2);
  $korisnik1 = mysqli_fetch_assoc($rezultat1);
  $korisnik2 = mysqli_fetch_assoc($rezultat2);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>iDESIGN - Interior Design HTML Template</title>
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
                        <a href="index.php" class="nav-item nav-link active">Početna</a>
                        <a href="service.php" class="nav-item nav-link">Usluge</a>
                        <a href="oglasi.php" class="nav-item nav-link">Oglasi</a>
                        <a href="postavioglas.php" class="nav-item nav-link">Postavi oglas</a>
                        <a href="about.php" class="nav-item nav-link">O nama</a>
                        <?php
                            if(isset($_SESSION["email"])) {
                                echo '<a href="index.php? logout='. 1 .'" class="nav-item nav-link">Log out</a>';
                            }
                            else{
                                echo '<a href="signup.php" class="nav-item nav-link">Sign up</a>';
                            }
                        ?>
                        <?php

                            if(isset($_SESSION["email"])) {
                                echo '<p class="nav-item nav-link">Dobrodosli<br>'.$_SESSION['ime'].' '.$_SESSION['prezime'].'</p>';

                            }
                            else{
                                echo '<a href="login.php" class="nav-item nav-link">Log in</a>';
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
                            <h5>Kontakt telefon</h5>
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
                    <h1 class="mb-4 mb-md-0 text-primary text-uppercase">Postavi oglas za izdavanje</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn btn-outline-primary" href="">Početna</a>
                        <i class="fas fa-angle-double-right text-primary mx-2"></i>
                        <a class="btn btn-outline-primary disabled" href="">Postavi oglas</a>
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
                        <form  method="post" name="add_ogl" id="addForm" novalidate="novalidate">

                            <div class="control-group">
                                <input type="text" class="form-control p-4"  name="naslov" placeholder="Naslov oglasa" required="required" data-validation-required-message="Ovo polje je obavezno" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control p-4" id="adresa" name="adresa" placeholder="Adresa" required="required" data-validation-required-message="Ovo polje je obavezno" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <select class="form-control" id="vrsta" name="vrsta" required="required" data-validation-required-message="Ovo polje je obavezno">
                                    <option selected disabled>Vrsta stana</option>
                                    <option value="garsonjera">Garsonjera</option>
                                    <option value="jednosoban">Jednosoban</option>
                                    <option value="dvosoban">Dvosoban</option>
                                    <option value="trosoban">Trosoban</option>
                                    <option value="cetvorosoban">Četvorosoban</option>
                                    <option value="petosoban+">Petosoban+</option>
                                </select>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <div class="input-group mb-4">
                                    <input type="number" class="form-control p-4" placeholder="Kvadratura" id="kvadratura" name="kvadratura" min="1" required="required" data-validation-required-message="Ovo polje je obavezno">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><h5>&#13217;</h5></span>
                                    </div>
                                </div>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <div class="input-group mb-4">
                                    <input type="number" class="form-control p-4" placeholder="Sprat" id="sprat" name="sprat" min="1" required="required" data-validation-required-message="Ovo polje je obavezno">
                                </div>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <div class="input-group mb-4">
                                    <input type="number" class="form-control p-4" placeholder="Cena" id="cena" name="cena" min="1" required="required" data-validation-required-message="Ovo polje je obavezno">
                                    <div class="input-group-append">
                                        <span class="input-group-text">&#8364;</span>
                                    </div>
                                </div>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <label for="staragradnja"><h5>Stara gradnja</h5></label>
                                <input type="radio" name="vrstagradnje" id="staragradnja" value="stara gradnja"><br>
                                <label for="novagradnja"><h5>Nova gradnja</h5></label>
                                <input type="radio" name="vrstagradnje" id="novagradnja" value="nova gradnja">

                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <label for="uknjizen">
                                    <h5>Uknjižen</h5>
                                </label>
                                <input type="checkbox" name="uknjizen" id="uknjizen" value="Da">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <label for="namesten">
                                    <h5>Namešten</h5>
                                </label>
                                <input type="checkbox" name="namesten" id="namesten" value="Da">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <label for="opremljenost">
                                    <h5>Dodatna opremljenost</h5>
                                </label><br>
                                <label for="garaza">
                                    Garaža
                                </label>
                                <input type="checkbox" name="garaza" id="garaza" value="garaza">
                                <label for="lift">
                                    Lift
                                </label>
                                <input type="checkbox" name="lift" id="lift" value="lift">
                                <label for="bazen">
                                    Bazen
                                </label>
                                <input type="checkbox" name="bazen" id="bazen" value="bazen">
                                <label for="igraliste">
                                    Igralište
                                </label>
                                <input type="checkbox" name="igraliste" id="igraliste" value="igraliste">
                                <label for="obezbedjenje">
                                    Obezbeđenje
                                </label>
                                <input type="checkbox" name="obezbedjenje" id="obezbedjenje" value="obezbedjenje">
                                <label for="recepcija">
                                    Recepcija
                                </label>
                                <input type="checkbox" name="recepcija" id="recepcija" value="recepcija">
                                <label for="terasa">
                                    Terasa
                                </label>
                                <input type="checkbox" name="terasa" id="terasa" value="terasa">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <h5>Dodavanje slika</h5>
                                <form action="upload.php" method="post" enctype="multipart/form-data">
                                    Izaberite sliku:
                                    <input type="file" name="fileToUpload" id="fileToUpload"><br><br>
                                    <input type="submit" value="Upload Image" name="submit">
                                </form>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-primary py-3 px-5" type="submit" id="sendMessageButton"  name="nesto">Postavi oglas</button>
                            </div>
                            <!-- <p>Već imate nalog? <a href="login.php"><b>Ulogujte se</b></a></p> -->
                            <p class="help-block text-danger"></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Kontaktirajte nas</h4>
                <p><i class="fa fa-map-marker-alt mr-2"></i>Beogradska 25, Vračar, Beograd</p>
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
</body>

</html>


<?php
    if(isset($_POST['naslov'])) {
        $namesten="Ne";
        if(isset($_POST['namesten'])) {
            $namesten=$_POST['namesten'];
        }
        $uknjizen="Ne";
        if(isset($_POST['uknjizen'])) {
            $uknjizen=$_POST['uknjizen'];
        }
        $data = "Naslov oglasa: " . $_POST['naslov'] . "\r\n" . "Adresa: " . $_POST['adresa'] . "\r\n" . "Vrsta stana: " .
        $_POST['vrsta'] . "\r\n" . "Kvadratura: " . $_POST['kvadratura'] . "\r\n" . "Sprat: " . $_POST['sprat'] . "\r\n" . "Cena: " .
        $_POST['cena'] . "\r\n" . "Vrsta gradnje: " . $_POST['vrstagradnje'] . "\r\n" . "Uknjižen: " . $uknjizen . "\r\n" .
        "Namešten: " . $namesten . "\r\n" . "Dodatna opremljenost: " . $_POST['garaza'] . "," . $_POST['lift'] . "," . $_POST['bazen'] .
        "," . $_POST['igraliste'] . "," . $_POST['obezbedjenje'] . "," . $_POST['recepcija'] . "," . $_POST['terasa']."\r\n \r\n";
        $ret = file_put_contents('podaci.txt', $data, FILE_APPEND | LOCK_EX);
        if($ret === false) {
            die('Desila se greška u ispisivanju fajla.');
        }
        else {
            echo "$ret bytes written to file";
        }
    }
    else {
    die('no post data to process');
    }
?>
