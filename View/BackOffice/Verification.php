<?php

include '../../Model/TravelOffer.php';
include '../../Controlleur/TravelOfferController.php';

$toc = new TravelOfferController();

$to = new TravelOffer(1,$_GET["title"],$_GET["destination"],$_GET["dep_date"],$_GET["ret_date"],$_GET["price"],$_GET["availability"],$_GET["category"]);
// $to = new TravelOffer(1,$_POST["title"],$_POST["destination"],$_POST["dep_date"],$_POST["ret_date"],$_POST["price"],$_POST["availability"],$_POST["category"]);

// var_dump($to);

$toc->showTravelOffer($to);

?>