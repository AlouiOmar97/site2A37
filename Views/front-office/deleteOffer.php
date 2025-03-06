<?php
require_once "C:/xampp/htdocs/site2A37/Models/offer.php";
require_once "../../Controllers/offerController.php";
echo "<h1>".$_GET['id']."</h1><br>";
if(
   isset($_GET['id']) && !empty($_GET['id'])
){
$id= $_GET['id'];
$oC= new OfferController();
$oC->deleteOffer($id);
header('Location: /site2a37/Views/front-office/listOffers.php');
}
?>