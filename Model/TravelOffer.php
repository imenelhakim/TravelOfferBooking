<?php
class TravelOffer{

    private int $id;
    private string $titre;
    private string $destination;
    private string $date_depart;
    private string $date_retour;
    private float $prix;
    private bool $disponible;
    private string $categorie;

    public function __construct($i,$t,$d,$dd,$dr,$p,$disp,$c){
        $this->id = $i;
        $this->titre = $t;
        $this->destination = $d ;
        $this->date_depart = $dd;
        $this->date_retour = $dr;
        $this->prix = $p;
        $this->disponible = $disp;
        $this->categorie = $c;
    }
    
    // public function __construct($i,$t,$d,$dd,$dr,$p,$disp,$c){
    //     $this->id = $i;
    //     $this->titre = $t;
    //     $this->destination = $d ;
    //     $this->date_depart = $dd;
    //     $this->date_retour = $dr;
    //     $this->prix = $p;
    //     $this->disponible = $disp;
    //     $this->categorie = $c;
    // }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of titre
     */ 
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set the value of titre
     *
     * @return  self
     */ 
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get the value of destination
     */ 
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * Set the value of destination
     *
     * @return  self
     */ 
    public function setDestination($destination)
    {
        $this->destination = $destination;

        return $this;
    }

    /**
     * Get the value of date_depart
     */ 
    public function getDate_depart()
    {
        return $this->date_depart;
    }

    /**
     * Set the value of date_depart
     *
     * @return  self
     */ 
    public function setDate_depart($date_depart)
    {
        $this->date_depart = $date_depart;

        return $this;
    }

    /**
     * Get the value of date_retour
     */ 
    public function getDate_retour()
    {
        return $this->date_retour;
    }

    /**
     * Set the value of date_retour
     *
     * @return  self
     */ 
    public function setDate_retour($date_retour)
    {
        $this->date_retour = $date_retour;

        return $this;
    }

    /**
     * Get the value of prix
     */ 
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set the value of prix
     *
     * @return  self
     */ 
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get the value of disponible
     */ 
    public function getDisponible()
    {
        return $this->disponible;
    }

    /**
     * Set the value of disponible
     *
     * @return  self
     */ 
    public function setDisponible($disponible)
    {
        $this->disponible = $disponible;

        return $this;
    }

    /**
     * Get the value of categorie
     */ 
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set the value of categorie
     *
     * @return  self
     */ 
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }
}


?>