<?php

class TravelOfferController{

// FONCTIONS CRUD STAR METIER 

public function showTravelOffer($traveloffer){
    echo "

    <table border='1'>
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
        <td>{$traveloffer->getId()}</td>
        <td>{$traveloffer->getTitre()}</td>
        <td>{$traveloffer->getDestination()}</td>
        <td>{$traveloffer->getDate_depart()}</td>
        <td>{$traveloffer->getDate_retour()}</td>
        <td>{$traveloffer->getPrix()}</td>
        <td>{$traveloffer->getDisponible()}</td>
        <td>{$traveloffer->getCategorie()}</td>
    </tr>
</table>
    
    ";
}





}



?>