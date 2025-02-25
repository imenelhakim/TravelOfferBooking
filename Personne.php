<?php
class Personne{
    private string $nom;
    private string $prenom;

    public function __construct(){
        $this->nom = '';
        $this->prenom = '';
        echo 'Ctor<br>';
    }
    
    public function __destruct(){
        echo '<br>Dtor';
    }

    public function saisir($n,$p){
        $this->nom = $n;
        $this->prenom = $p;
    }

    public function afficher(){
        echo 'Nom:'.$this->nom;
        echo '<br>Prenom:'.$this->prenom;
    }

    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }
}

// instanciation
$personne1 = new Personne();
$personne1->saisir('Barkaoui','Rayen');
// unset($personne1);
$personne1->afficher();


$personne2 = new Personne();
$personne2->saisir('Ben Yahmed','Med Wassim');

$personne2->afficher();
echo '<br>';
// var_dump($personne2->nom);
var_dump($personne2->getNom());

?>