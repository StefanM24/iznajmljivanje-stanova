<?php
      class Korisnici{
      public $id;
			public $ime;
			public $prezime;
			public $email;

			public function uzkor($podaci){
        $this->id=$podaci['id'];
        $this->ime=$podaci['ime'];
        $this->prezime=$podaci['prezime'];
        $this->email=$podaci['email'];

			}
      public function rekor()
      {
        return $this->id;
      }
		}

?>
