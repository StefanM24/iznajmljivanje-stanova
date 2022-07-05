<?php 

$txt = "Downloads\podaci.txt"; 
if (isset($_POST['naslov'])) { // check if both fields are set
    $fh = fopen($txt, 'a'); 
    $txt=$_POST['naslov'] . '-' . $_POST['adresa'] . '-' . $_POST['vrsta'] . '-' . 
        $_POST['kvadratura'] . '-' . $_POST['sprat'] . '-' . $_POST['cena']; 
    fwrite($fh,$txt); // Write information to the file
    
    fclose($fh); // Close the file
}
?>

