<?php
    session_start();

    $ime = "";
    $prezime = "";
    $email = "";
    $errors = array();

    $db = mysqli_connect('localhost', 'root', '', 'db1');
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }

    //registracija
    if (isset($_POST['reg_user'])) {
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
            $_SESSION['uspeh'] = "Uspešno ste ulogovani.";
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
            $query = "SELECT * FROM stanovi_korisnici WHERE email='$email' AND lozinka='$password'";
            $results = mysqli_query($db, $query);
            if(mysqli_num_rows($results) == 1) {
                $_SESSION['email'] = $email;
                $_SESSION['uspeh'] = "Ulogovani ste.";
                header('location: index.php');
            }else {
                array_push($errors, "Pogrešan email/lozinka.");
            }
        }
    }
    $db->close();   
?> 