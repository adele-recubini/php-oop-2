<!-- shop on line : classe prodotti con - tipo e prezzo
classe infanzia, salute , alimenti , abbigliamento che ereditano le caratteristiche di prodotti.
 -->
<?php

class Prodotti{

  protected $tipo;

  protected $prezzo;

  public function __construc($tipo,$prezzo){
//valorizzo i parametri

  $this ->tipo =$nome;
  $this ->prezzo =$prezzo;

  }

}


class Infanzia extends Prodotti {

}

class Salute extends Prodotti {

}

class Alimenti extends Prodotti {

}

class Abbigliamento extends Prodotti {

}


$bambola= new Infanzia('dolly','50');
$integratore = new Salute('florase colesterolo','23');
$caffe = new Alimenti('borbone','6');
$pantalone= new Abbigliamento('nike',60);






// faccio una classe persona
class persona {

  protected $nome;

  protected $cognome;

  protected $indirizzoFatturazione;

  protected $telefono;



  public function __construc($nome,$cognome,$indirizzoFatturazione,$telefono){
//valorizzo i parametri

  $this ->nome =$nome;
  $this ->cognome =$cognome;
  $this ->indirizzoFatturazione =$indirizzoFatturazione;
  $this ->telefono =$telefono;


  }


}


//faccio una classe credit card


class bancomat{

  protected $nome;

  protected $scadenza;

  protected $totale;


  public function __construc($nome,$scadenza,$totale){
//valorizzo i parametri

  $this ->nome =$nome;

  $this ->scdenza =$scadenza;

    $this ->totale =$totale;

  }



}
