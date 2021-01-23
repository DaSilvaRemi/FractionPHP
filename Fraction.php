<?php
class Fraction {
    private $_numerateur;
    private $_denominateur;

public function __construct($a,$b) {
      $this->_numerateur = $a;
      $this->_denominateur = $b;
}
    public function get_LeNumerateur()
    {
        return $this->_numerateur;
    }
    public function get_LeDenominateur()
    {
        return $this->_denominateur;
    }
    public function setNumerateur($a)
    {
        $this->_numerateur = $a;
    }
    public function setDenominateur($b)
    {
        $this->_denominateur = $b;
    }
    public function get_pgcd()
    {
        return $this->LePgcd();
    }
    public function Addition(Fraction $Frac)
    {
        $_numerateur = $this->_numerateur * $Frac->_denominateur + $this->_denominateur * $Frac->_numerateur ;
        $_denominateur = $this->_denominateur * $Frac->_denominateur;
        return new Fraction($_numerateur,$_denominateur);
    }
    public function Multiplication(Fraction $Frac){
        $_numerateur = $this->_numerateur * $Frac->_numerateur;
        $_denominateur = $this->_denominateur * $Frac->_denominateur;
        return new Fraction($_numerateur,$_denominateur);
}

    public function SimplifierFraction()
    {
        $r=$this->LePgcd();
        $_numerateur = $this->_numerateur/$r;
        $_denominateur = $this->_denominateur/$r;

        if($this->_denominateur<0)
        {
            $_numerateur=-$this->_numerateur;
            $_denominateur=-$this->_denominateur;
        }
    }
    private function LePgcd()
    {
       $_numerateur = $this->_numerateur;
       $_denominateur = $this->_denominateur;
       $reste = 1;
            while($reste !=0)
            {
                $reste=$_numerateur % $_denominateur;
                $_numerateur = $_denominateur;
                $_denominateur = $reste;
            }
            return $_numerateur;
    }

       public function Affichage()
    {
        echo ("Fraction = $this->_numerateur /  $this->_denominateur Numerateur  = $this->_numerateur Denominateur = $this->_denominateur PGCD = ".$this->LePgcd()."\n <br/>");
    }
    public function compare(Fraction $Frac){
        $this->SimplifierFraction();
        $Frac->SimplifierFraction();
        if ($this->_numerateur == $Frac->_numerateur && $this->_denominateur == $Frac->_denominateur){
            echo "Oui";
        }
        else{
            echo "Non";
        }
    }

}
?>