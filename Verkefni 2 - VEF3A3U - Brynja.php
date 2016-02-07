<!DOCTYPE HTML>
<html>
<head><title>Verkefni 2 - VEF3A3U - Brynja</title></head>
<body>

<p>1. Það er þægilegra að nota OOP af því að það gerir kóðann auðveldari að lesa og þægilegri að skrifa. Þú þarft ekki að skrifa jafn mikinn kóða og í procedural
programming. OOP býður einnig upp á inheritance, polymorphism og composition. Dæmi um muninn á procedural programming og OOP er t.d. að þú værir að vinna fyrir
fyrirtæki sem framleiðir bílaparta sem þarf að update-a inventory kerfið sitt. Yfirmaðurinn þinn biður þig um að gera tvö form, eitt fyrir bíla og eitt fyrir trukka.
Bílaformið á að taka inn lit, vélarstærð, hvort hann sé sjálfskiptur eða beinskiptur og fjölda hurða. Trukkaformið á að taka inn svipuð, en aðeins öðruvísi, gildi
eins og lit, vélarstærð, hvort hann sé sjálfskiptur eða beinskiptur, stærð á bílstjórasvæði og hversu mikið hann dregur. Í procedural programming myndirðu fyrst
skrifa kóða til að processa bílaformið og svo kóðann fyrir trukkaformið. Í OOP myndirðu búa til base class sem heitir ökutæki. Inní klasanum ökutæki væri það sem
bæði bíll og trukkur hafa sameiginlegt, s.s. litur, vélarstærð og sjálfskiptur/beinskiptur.  Við búum til method fyrir hvert gildi. Method fyrir litinn myndi taka
lit bílsins sem parameter og geyma hann t.d. í database. Svo búum við til 2 aðra classes fyrir bíl og trukk. Bílaklasinn myndi hafa method fyrir fjölda hurða
og trukkaklasinn myndi hafa method fyrir stærð á bílstjórasvæði og hversu mikið hann dregur. Segjum sem svo að við viljum fara úr venjulegum klasa yfir í sérstakar
gerðir eins og t.d. Nissan eða Mazda. Í procedural programming þyrftum við að búa til nýtt form fyrir hverja gerð og endurtaka allan kóðann úr hinum klasanum
og bæta við kóða fyrir gerðina. En í OOP þyrftum við bara að extenda bílaklasann með nissan class og mazda class og bæta við methods sem eru við hæfi þar. Þar að 
leiðandi er þægilegra að nota OOP en procedural programming í þessu tilfelli.
</p>

<p>2. Class properties þurfa að vera skilgreindar sem public, private eða protected. Ef þú skilgreinir property-ið með var er hún public. Members sem eru skilgreindir
sem public geta verið accessed hvar sem er á meðan private members geta bara verið accessed inní þeim breytum sem þú skilgreindir þá. Skilgreiningar á properties væru t.d.:

<?php
  public $public = "Public";
  private $private = "Private";
?> Ef þú reynir að echo-a bæði properties þá virkar einungis public breytan, en þú færð fatal error ef þú reynir að echo-a private breytuna.

Methods virka svipað og properties en methods sem þú skilgreinir án keywords eru skilgreindar sem public
</p>
<p>3. Namespaces er eru hönnuð til að leysa tvö vandamál sem forritarar lenda í þegar þeir búa til kóða sem er hægt að endurnýta eins og functions og classes.
Þessi tvö vandamál eru 1. Þegar classes/functions/constants sem þú býrð til heita sama nafni og internal PHP classes/functions/constants eða þriðja-aðila classes/functions/constants
2. Að geta stytt löng nöfn, notuð til að forðast vandamál 1, sem gerir það auðveldara að lesa kóðann.</p>

<p>4. Interfaces leyfa þér að búa til kóða sem skilgreinir hvaða methods klasarnir sem implementa kóðann nota. Hinsvegar geturðu ekki bætt neinum kóða við þessi
methods.</p>

<p>5. Class sem heitir bók: <?php
class Bok {
  public $titill;
  public $verd;

 public function setPrice($price) { //functionið setPrice sem stillir verð bókarinnar
    $this->verd = $price;
  }

 public function getPrice() { //functionið getPrice sem skilar verði bókarinnar
  return $this->verd;
  }

 public function setTitle($title) { //functionið setTitle sem stillir titill bókarinnar
    $this->titill = $title;
  }

 public function getTitle() { //functionið getTitle sem skilar titli bókarinnar
  return $this->titill;
  }

 public function __construct($verd,$titill) {
    setPrice($verd);
    setTitle($titill);
  }

  public function __toString() { //nota __toString til að birta upplýsingar um bækurnar
    return $this->getTitle() . ", " . $this->getPrice() . "<br>";
  }
}
?> </p>

<p>7. Búa til 3 objects og gefa þeim values: <?php
$efnafraedi = new Bok(1990,"Efnafræði");
$staerdfraedi = new Bok(1995,"Stærðfræði");
$islenska = new Bok(2000,"Íslenska");

?></p>

<p>8. Class sem erfir Bók: <?php
 class BokExtends extends Bok { //bý til klasann BokExtends sem erfir klasann Bok
    public $publisher;

    function getPublisher() {
      return $this->publisher;
    }

    function setPublisher($name) {
        $this->publisher = $name;
    }
 }
//echo-a upplýsingar up bækurnar(átti ég að echo-a publisher líka?)
echo $efnafraedi;
echo $staerdfraedi;
echo $islenska;
?></p>

<p>8. OOP User: <?php 
  class User{ //bý til klasann User og bý til breyturnar email og password.
    public $email;
    public $password;

    public function setPassword($pass) {
      $this->password = $pass;
    }

    public function getPassword() {
      return $this->password;
    }

    public function setEmail($mail){
      $this->email = $mail;
    }

    public function getEmail(){
      return $this->email;
    }

    public function __construct($array){ //bý til constructor sem tekur array og upphafsstillir notandann
      $this->password = $array[0];
      $this->email = $array[1];
    }
  }

?></p>
</body>

</html>