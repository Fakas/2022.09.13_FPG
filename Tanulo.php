<?php 
class Tanulo () {
    public $Nev;
    public $Kor;
    public $Nem;
/**
 *@param array { Nev: string ,kor : string, nem : string  } 
  *   +nev (string) - tanulo neve 
 *+kor (string) - tanulo kora
 *+nem (string) - a tanulo neme
 */

    function __construct (array $adat) {
        if (isset($adat["nev"])) {
            $this->Nev=$adat["nev"];
        }
        if (isset($adat["kor"])) {
            $this->Kor=$adat["kor"];
        }
        if (isset($adat["nem"])) {
            $this->Nem=$adat["nem"];
        }
    }
    
    public function nev () : string {
        return $this-> nev;
    }
    public function seznev () : string {
        return $this-> nev =$Nev;
    }
    public function kor () : string {
        return $this-> Kor;
    }
    public function setkor () : string {
        return $this-> Kor =$Kor;
    }
    public function nem () : string {
        return $this-> nem;
    }
    public function nem () : string {
        return $this-> nem= $Kor;
    }

}





class InfosOsztaly extends Tanulo () {
private $gepterem;
/**
 *@param array { Nev: string ,kor : string, nem : string  } 
  *   +nev (string) - tanulo neve 
 *+kor (string) - tanulo kora
 *+nem (string) - a tanulo neme
 *+ gepterem  (string )- a tanulo tereme/
*/

function __construct ($adat) {
    parent :: __construct($adat);
    if (isset($adat["gepterem"])) {
        $this->gepterem=$adat["gepterem"];
    }
}
public function setgepterem() :string {
    return $this-> gepterem=$gepterem;
}
public function gepterem () : string {
    return $this-> gepterem;
}










}
class GazdOsztaly extends Tanulo () {
    public $adosz;
    /**
     *@param array { Nev: string ,kor : string, nem : string  } 
      *   +nev (string) - tanulo neve 
     *+kor (string) - tanulo kora
     *+nem (string) - a tanulo neme
     *+ adoszam  (string )- a tanulo adoszama/
    */
    
    function __construct ($adat) {
        parent :: __construct($adat);
        if (isset($adat["adoszam"])) {
            $this->adosz=$adat["adoszam"];
        }
    }
    public function setadoszam() :string {
        return $this-> adosz=$adosz;
    }
    public function adoszam () : string {
        return $this-> adosz;
    }
    
    
    }