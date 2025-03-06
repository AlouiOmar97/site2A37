<?php
require_once "C:/xampp/htdocs/site2A37/config.php";
require_once "C:/xampp/htdocs/site2A37/Models/offer.php";

class OfferController{

    public function displayOffers() {
        $sql= "SELECT * FROM `offer`";
        $db= config::getConnexion();
        try{
            $query= $db->prepare($sql);
            $query->execute();
            $result= $query->fetchAll();
            return $result;
        }catch(Exception $e){
            echo "error display Offers : ". $e->getMessage();
        }
    }

    public function displayOfferById($id) {
        $sql= "SELECT * FROM `offer` where id= :id";
        $db= config::getConnexion();
        try{
            $query= $db->prepare($sql);
            $query->execute([
                'id' => $id
            ]);
            $result= $query->fetch();
            return $result;
        }catch(Exception $e){
            echo "error display Offer By Id : ". $e->getMessage();
        }
    }

    public function addOffer(Offer $offer){
$sql= "INSERT INTO `offer`
(`title`, `destination`, `departure_date`, `return_date`, `price`, `availibility`, `category`) 
VALUES (:title, :destination, :departure_date, :return_date, :price, :availibility, :category)";
        $db= config::getConnexion();
        var_dump($offer);
        try{
            $query= $db->prepare($sql);
            $query->execute([
                'title' => $offer->getTitle(),
                'destination' => $offer->getDestination(),
                'departure_date' => $offer->getDepartureDate(),
                'return_date' => $offer->getReturnDate(),
                'price' => $offer->getPrice(),
                'availibility' => $offer->getAvailibility(),
                'category' => $offer->getCategory()
            ]);
        }catch(Exception $e){
            echo "error add Offer : ". $e->getMessage();
        }
    }

    public function updateOffer($id, Offer $offer){
        $sql= "UPDATE `offer` SET `title`=:title,`destination`=:destination,`departure_date`=:departure_date,`return_date`=:return_date,`price`=:price,`availibility`=:availibility,`category`=:category WHERE `id`=:id";
        $db= config::getConnexion();
        try{
            $query= $db->prepare($sql);
            $query->execute([
                'title' => $offer->getTitle(),
                'destination' => $offer->getDestination(),
                'departure_date' => $offer->getDepartureDate(),
                'return_date' => $offer->getReturnDate(),
                'price' => $offer->getPrice(),
                'availibility' => $offer->getAvailibility(),
                'category' => $offer->getCategory(),
                'id' => $id
            ]);
        }catch(Exception $e){
            echo "error update Offer : ". $e->getMessage();
        }
    }


    public function deleteOffer($id){
        $sql= "DELETE FROM `offer` WHERE id= :id";
        $db= config::getConnexion();
        try{
            $query= $db->prepare($sql);
            $query->execute([
                'id' => $id
            ]);
        }catch(Exception $e){
            echo "error delete Offers : ". $e->getMessage();
        }
    }

}

$oC= new OfferController();
$offers=$oC->displayOffers();
$offer= new Offer('tit33','dest33', '2025-01-01', '2025-01-01', 55, 1, 'cat33');
//$oC->addOffer($offer);
//var_dump($offers);
$offerById=$oC->displayOfferById(2);
var_dump($offerById);
?>