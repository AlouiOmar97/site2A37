<?php
require_once "C:/xampp/htdocs/site2A37/Models/offer.php";
require_once "../../Controllers/offerController.php";
echo "<h1>".$_GET['id']."</h1><br>";
echo $_POST['destination'];
if(isset($_POST['title']) && !empty($_POST['title']) &&
   isset($_POST['destination']) && !empty($_POST['destination']) &&
   isset($_POST['dd']) && !empty($_POST['dd']) &&
   isset($_POST['rd']) && !empty($_POST['rd']) &&
   isset($_POST['price']) && !empty($_POST['price']) && 
   isset($_POST['av']) && !empty($_POST['av']) &&
   isset($_POST['cat']) && !empty($_POST['cat']) &&
   isset($_GET['id']) && !empty($_GET['id'])
){
$offer= new Offer($_POST['title'],$_POST['destination'], $_POST['dd'], $_POST['rd'], $_POST['price'], $_POST['av'], $_POST['cat']);
var_dump($offer);
$id= $_GET['id'];
$oC= new OfferController();
$oC->updateOffer($id,$offer);
header('Location: /site2a37/Views/front-office/listOffers.php');
}
?>