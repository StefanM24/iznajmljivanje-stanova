<?php
      class Korisnici{
			public $ime;
			public $prezime;
			public $email;

			public function __construct($ime, $prezime, $email){
				$this -> ime = $ime;
				$this -> prezime = $prezime;
				$this -> email = $email;
			}

		}

?>
