<?php
    session_start();
    //  include('models\config.php');
    include('models\konfigl.php');
    $ime = "";
    $prezime = "";
    $email = "";
    $errors = array();


    //registracija ljudi koji ne brinu o stanovima
      if (isset($_POST['reg_user']) && $_POST['vlasnik']) {
        $ime = mysqli_real_escape_string($db, $_POST['ime']);
        $prezime = mysqli_real_escape_string($db, $_POST['prezime']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
        $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

        if (empty($ime)) { array_push($errors, "Ime je obavezno"); }
        if (empty($prezime)) { array_push($errors, "Prezime je obavezno"); }
        if (empty($email)) { array_push($errors, "Email je obavezan"); }
        if ($password_1 != $password_2) {
            array_push($errors, "Lozinke se ne poklapaju");
        }

        $user_check_query = "SELECT * FROM izdavaci_stanova WHERE lozinka='$password' OR email='$email' LIMIT 1";
        $result = mysqli_query ($db, $user_check_query);
        $user = mysqli_fetch_assoc($result);

        if($user) {
            if($user['email'] === $email) {
                array_push($errors, "Email već registrovan.");
            }

            if($user['lozinka'] === $password) {
                array_push($errors, "Lozinka zauzeta.");
            }
        }
        echo `Greska: $errors`;
        //registruj korisnika ako nema greske u formi
        if(count($errors) == 0) {
            $password = md5($password_1); //kriptovanje lozinke pre cuvanja

            $query = "INSERT INTO izdavaci_stanova (ime, prezime, email, lozinka) VALUES('$ime','$prezime', '$email', '$password')";

            mysqli_query($db, $query);
            $_SESSION['email'] = $email;
            $_SESSION['uspeh'] = "Uspešno ste registrovali.";
            header('location: index.php');
        }
      }



    //registracija ljudi koji traze stan
      if (isset($_POST['reg_user']) && $_POST['stanar']) {
        $ime = mysqli_real_escape_string($db, $_POST['ime']);
        $prezime = mysqli_real_escape_string($db, $_POST['prezime']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
        $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

        if (empty($ime)) { array_push($errors, "Ime je obavezno"); }
        if (empty($prezime)) { array_push($errors, "Prezime je obavezno"); }
        if (empty($email)) { array_push($errors, "Email je obavezan"); }
        if ($password_1 != $password_2) {
            array_push($errors, "Lozinke se ne poklapaju");
        }

        $user_check_query = "SELECT * FROM stanovi_korisnici WHERE lozinka='$password' OR email='$email' LIMIT 1";
        $result = mysqli_query ($db, $user_check_query);
        $user = mysqli_fetch_assoc($result);

        if($user) {
            if($user['email'] === $email) {
                array_push($errors, "Email već registrovan.");
            }

            if($user['lozinka'] === $password) {
                array_push($errors, "Lozinka zauzeta.");
            }
        }
        echo `Greska: $errors`;
        //registruj korisnika ako nema greske u formi
        if(count($errors) == 0) {
            $password = md5($password_1); //kriptovanje lozinke pre cuvanja

            $query = "INSERT INTO stanovi_korisnici (ime, prezime, email, lozinka) VALUES('$ime','$prezime', '$email', '$password')";

            mysqli_query($db, $query);
            $_SESSION['email'] = $email;
            $_SESSION['uspeh'] = "Uspešno ste registrovali.";
            header('location: index.php');
        }
      }


    //uloguj korisnika
    if(isset($_POST['login_user'])) {
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $password = mysqli_real_escape_string($db, $_POST['password']);

        if(empty($email)) {
            array_push($errors, "Ovo polje je obavezno.");
        }
        if(empty($password)) {
            array_push($errors, "Ovo polje je obavezno.");
        }

        if(count($errors) == 0) {
            $password = md5($password);
            $query1 = "SELECT * FROM stanovi_korisnici WHERE email='$email' AND lozinka='$password'";
            $query2 = "SELECT * FROM izdavaci_stanova WHERE email='$email' AND lozinka='$password'";
            $results1 = mysqli_query($db, $query1);
            $results2 = mysqli_query($db,$query2);
            //pokušati da se nađe način kako sad iz rezultata da se izmu podaci
            $user1 = mysqli_fetch_assoc($results1);
            $user2 = mysqli_fetch_assoc($results2);
            //$ime= "";
            if ($user1 != 0 && $user2 == 0)
            {
              $ime = $user1['ime'];
              $prezime= $user1['prezime'];
            }else {
              $ime=$user2['ime'];
              $prezime= $user2['prezime'];
            }
            if(mysqli_num_rows($results1) == 1 || mysqli_num_rows($results2) == 1 ) {

                $_SESSION['ime'] = $ime;
                $_SESSION['prezime'] = $prezime;
                $_SESSION['email'] = $email;
                $_SESSION['uspeh'] = "Ulogovani ste.";

                header('location: index.php');
            }else {
                array_push($errors, "Pogrešan email/lozinka.");

            }
        }
    }

    If(isset($_POST['reg_ogl']) && $_POST['naslov']) && isset($_POST['adresa']) && isset($_POST['vrsta']) && isset($_POST['kvadratura']) &&
    isset($_POST['sprat']) && isset($_POST['cena'])) {
        $podaci = $_POST['naslov'] . '-' . $_POST['adresa'] . '-' . $_POST['vrsta'] . '-' . 
        $_POST['kvadratura'] . '-' . $_POST['sprat'] . '-' . $_POST['cena'] . "\r\n";
        $ret = file_put_contents('/Downloads/podaci.txt', $podaci, FILE_APPEND | LOCK_EX);
        if($ret === false) {
            die('Greška u kreiranju fajla');
        }
        else {
            echo "$ret podaci prebačeni u fajl";
        }
    }
    else {
        die('no post data to process');
    }




    $db->close();
?>
