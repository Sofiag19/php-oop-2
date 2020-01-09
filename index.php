<?php

// GOAL:
// - Definire la classe Persona caratterizzata da nome e cognome
// - Definire la classe Ospite (che eredita da Persona) caratterizzata da nome, cognome e anno di nascita
// - Definire la classe Pagante (che eredita da Persona) caratterizzata da nome, cognome e indirizzo (di residenza)
// - Per ogni classe definire costruttore e toString in maniera appropriata, eventualmente richiamando i metodi della classe padre
// - Eseguire dei test, istanziando ogni classe definita e testando la correttezza dei risultati attesi

class Persona {

  public $nome;
  public $cognome;

  function __construct($nome, $cognome){
    $this -> nome = $nome;
    $this -> cognome = $cognome;
  }

  function __toString(){
    return "Nome: ". $this -> nome . "<br>"
          . "Cognome : ". $this -> cognome . "<br>";
  }
}

class Ospite extends Persona {
  public $annoNascita;

  function __construct($nome, $cognome, $annoNascita){
    parent::__construct($nome, $cognome);
    $this -> annoNascita = $annoNascita;
  }

  function __toString(){
    // return  "Nome: ". $this -> nome . "<br>"
            // . "Cognome : ". $this -> cognome . "<br>"
            // ."Anno di Nascita: ". $this -> annoNascita."<br>" ;

    return  parent::__toString()."Anno di Nascita: ". $this -> annoNascita."<br>" ;
  }
}

class Pagante extends Persona {
  public $indResidenza;

  function __construct($nome, $cognome, $indResidenza){
    parent::__construct($nome, $cognome);
    $this -> indResidenza = $indResidenza;
  }

  function __toString(){
    return  parent::__toString()."Indirizzo di residenza: ". $this -> indResidenza."<br>" ;
  }
}

echo 'PERSONA<br><br>';
$pers1 = new Persona(Sofia, Giacometti);
echo $pers1;
echo "<br>--------<br>";
echo 'OSPITE<br><br>';
$osp1 = new Ospite(Sofia, Giacometti, 1991);
echo $osp1;
echo "<br>--------<br>";
echo 'PAGANTE<br><br>';
$pag1 = new Pagante(Sofia, Giacometti, 'Via dei lecci');
echo $pag1;

?>
