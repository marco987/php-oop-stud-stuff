<?php

  class Persona {

  use FullName;

  protected $nome;
  protected $cognome;
  protected $indirizzo;

    function __construct($nome, $cognome, $indirizzo) {
      $this -> nome = $nome;
      $this -> cognome = $cognome;
      $this -> indirizzo = $indirizzo;
    }

    public function getNome() {
      return $this -> nome;
    }
    public function getCognome() {
      return $this -> cognome;
    }
    public function getIndirizzo() {
      return $this -> indirizzo;
    }

    public function setNome($nome) {
      if ($nome != "") {
        $this -> nome = $nome;
      } else {
        alert("Il campo non può essere lasciato vuoto");
      }
    }
    public function setCognome($cognome) {
      if ($cognome != "") {
        $this -> cognome = $cognome;
      } else {
        alert("Il campo non può essere lasciato vuoto");
      }
    }
    public function setIndirizzo($indirizzo) {
      if ($indirizzo != "") {
        $this -> indirizzo = $indirizzo;
      } else {
        alert("Il campo non può essere lasciato vuoto");
      }
    }

    public function toString() {
      return "PERSONA<br>Nome: " . $this -> nome . "<br>Cognome: " . $this -> cognome . "<br>Indirizzo: " . $this -> indirizzo . "<br><br>";
    }
  }


  class Studente extends Persona {

  private $studi;
  private $tasse;

    function __construct($nome, $cognome, $indirizzo, $studi, $tasse) {
      parent::__construct($nome, $cognome, $indirizzo);
      $this -> studi = $studi;
      $this -> tasse = $tasse;
    }

    public function getStudi() {
      return $this -> studi;
    }
    public function getTasse() {
      return $this -> tasse;
    }

    public function setStudi($studi) {
      if ($studi != "") {
        $this -> studi = $studi;
      } else {
        alert("Il campo non può essere lasciato vuoto");
      }
    }
    public function setTasse($tasse) {
      if ($tasse != "") {
        $this -> tasse = $tasse;
      } else {
        alert("Il campo non può essere lasciato vuoto");
      }
    }

    public function toString() {
      return "STUDENTE<br>" . $this -> FullName() . "<br>Indirizzo: " . $this -> indirizzo . "<br>Indirizzo di studi: " . $this -> studi . "<br>Tasse: " . $this -> tasse . "<br><br>";
    }
  }


  class Professore extends Persona {

  private $specializzazione;
  private $paga;

    function __construct($nome, $cognome, $indirizzo, $specializzazione, $paga) {
      parent::__construct($nome, $cognome, $indirizzo);
      $this -> specializzazione = $specializzazione;
      $this -> paga = $paga;
    }

    public function getSpecializzazione() {
      return $this -> specializzazione;
    }
    public function getPaga() {
      return $this -> paga;
    }

    public function setSpecializzazione($specializzazione) {
      if ($specializzazione != "") {
        $this -> specializzazione = $specializzazione;
      } else {
        alert("Il campo non può essere lasciato vuoto");
      }
    }
    public function setPaga($paga) {
      if ($paga != "") {
        $this -> paga = $paga;
      } else {
        alert("Il campo non può essere lasciato vuoto");
      }
    }

    public function toString() {
      return "PROFESSORE<br>" . $this -> FullName() . "<br>Indirizzo: " . $this -> indirizzo . "<br>Specializzazione: " . $this -> specializzazione . "<br>Paga: " . $this -> paga . "<br><br>";
    }
  }


  trait FullName {

    public function FullName() {
      return "Nome e Cognome: " . $this -> nome . " " . $this -> cognome;
    }
  }

  // LOG RISULTATI

  $studente1 = new Studente("Marco", "Pace", "Padova", "Lettere", "3000 €");
  echo $studente1 -> toString() . "<br>";

  $studente2 = new Studente("Lorem", "Ipsum", "Roma", "Archeologia", "2000 €");
  echo $studente2 -> toString() . "<br>";

  $professore1 = new Professore("Tizio", "Caio", "Milano", "Letteratura inglese", "1800 €");
  echo $professore1 -> toString() . "<br>";


?>
