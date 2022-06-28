<?php
      class Korisnici{
			public $ime;
			public $prezime;
			public $email;
			public $lozinka;

			public function __construct($ime, $prezime, $email, $lozinka){
				$this -> ime = $ime;
				$this -> prezime = $prezime;
				$this -> email = $email;
				$this -> lozinka = $lozinka;
			}
      
		}

?>
