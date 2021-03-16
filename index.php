<!-- shop on line : classe prodotti con - tipo e prezzo
classe infanzia, salute , alimenti , abbigliamento che ereditano le caratteristiche di prodotti.
 -->
<?php

class Prodotti{

  protected $tipo;

  protected $prezzo;

  public function __construc($tipo,$prezzo){
//valorizzo i parametri

  $this ->tipo =$tipo;
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


// faccio una classe persona
class Persona {

  protected $nome;

  protected $cognome;

  protected $indirizzoFatturazione;

  protected $telefono;

  protected $oggettiComprati=[];


  public function __construc($nome,$cognome,$indirizzoFatturazione,$telefono){
//valorizzo i parametri

  $this ->nome =$nome;
  $this ->cognome =$cognome;
  $this ->indirizzoFatturazione =$indirizzoFatturazione;
  $this ->telefono =$telefono;

  }

  public function compro(Prodotti $prodotti){
	$this->oggettiComprati[] = $prodotti;


}
}

//faccio una classe credit card


class Bancomat {

  protected $nome;

  protected $scadenza;

  protected $totale;


  public function __construc($nome,$scadenza,$totale){
//valorizzo i parametri

  $this ->nome =$nome;

  $this ->scadenza =$scadenza;

  $this ->totale =$totale;

  }

}


$bambola= new Infanzia('dolly','50');
$integratore = new Salute('florase colesterolo','23');
$caffe = new Alimenti('borbone','6');
$pantalone= new Abbigliamento('nike','60');



$adele = new Persona('adele','recubini','indirizzo','555555');



$adele -> compro($bambola);
var_dump($adele);

//$c = new CreditCard(..);
//$user->insertCreditCard($c);
