<?php
class TravelOffer{

    public int $id;
    public string $titre;
    public string $destination;
    public string $date_depart;
    public string $date_retour;
    public float $prix;
    public bool $disponible;
    public string $categorie;

    public function show(){
        echo "

        <table>
        <tr>
            <td>ID</td>
            <td>TITRE</td>
            <td>DESTINATION</td>
            <td>DEPART</td>
            <td>RETOUR</td>
            <td>PRIX</td>
            <td>DISPONIBILITE</td>
            <td>CATEGORIE</td>
        </tr>
        <tr>
            <td>$this->id</td>
            <td>$this->titre</td>
            <td>$this->destination</td>
            <td>$this->date_depart</td>
            <td>$this->date_retour</td>
            <td>$this->prix</td>
            <td>$this->disponible</td>
            <td>$this->categorie</td>
        </tr>
    </table>
        
        ";
    }
}

$to = new TravelOffer();
$to->id='1';
$to->titre='Echange culturel';
$to->destination='Japon';
$to->date_depart='26/02/2025';
$to->date_retour='26/03/2025';
$to->prix=2500;
$to->disponible=1;
$to->categorie="echange";

$to->show();


?>