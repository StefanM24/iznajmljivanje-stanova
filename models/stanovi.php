<?php
include('models\konfigl.php');
  class Stan
  {
    public $id;
    public $nazivstana;
    public $adresa;
    public $vrstastana;
    public $kvadratura;
    public $sprat;
    public $cena;
    public $gradnja;
    public $uknjizen;
    public $namesten;
    public $dodatnaoprema;
    public $nazivslike;
    public $idvlasnika;


    public function uzstan($podaci)
    {
      $this->id=$podaci['id'];
      $this->nazivstana=$podaci['nazivstana'];
      $this->adresa=$podaci['adresa'];
      $this->vrstastana=$podaci['vrstastana'];
      $this->kvadratura=$podaci['kvadratura'];
      $this->sprat=$podaci['sprat'];
      $this->cena=$podaci['cena'];
      $this->dodatnaoprema=$podaci['dodatnaoprema'];
      $this->nazivslike=$podaci['nazivslike'];
      $this->idvlasnika=$podaci['idvlasnika'];

      if($podaci['gradnja']==0){$this->gradnja="Stara gradnja";}
      else {$this->gradnja="Nova gradnja";}

      if ($podaci['uknjizen']==0) {$this->uknjizen="Nije uknjizen"; }
      else {$this->uknjizen="Uknjizen"; }
      if ($podaci['namesten']==0) {$this->namesten="Nije namesten"; }
      else {$this->namesten= "Namesten";     }
    }

    public function restan($podatak)
    {
      switch ($podatak) {
        case 'id':
          return $this->id;
          break;
        case 'nazivstana':
            return $this->nazivstana;
            break;
        case 'adresa':
            return $this->adresa;
            break;
        case 'vrstastana':
            return $this->vrstastana;
            break;
        case 'kvadratura':
            return $this->kvadratura;
            break;
        case 'sprat':
            return $this->sprat;
            break;
        case 'cena':
            return $this->cena;
            break;
        case 'gradnja':
            return $this->gradnja;
            break;
        case 'uknjizen':
            return $this->uknjizen;
            break;
        case 'namesten':
            return $this->namesten;
            break;
        case 'dodatnaoprema':
            return $this->dodatnaoprema;
            break;
        case 'nazivslike':
            return $this->nazivslike;
            break;
        case 'idvlasnika':
            return $this->idvlasnika;
            break;
      }
    }
  }



 ?>
