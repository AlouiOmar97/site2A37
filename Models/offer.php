<?php
class Offer{
    private int $id;
    private string $title;
    private string $destination;
    private string $departure_date;
    private string $return_date;
    private float $price;
    private bool $availibility;
    private string $category;

    public function __construct($title, $destination, $departure_date, $return_date, $price, $availibility, $category)
    {
        $this->title=$title;
        $this->destination =$destination ;
        $this->departure_date =$departure_date ;
        $this->return_date =$return_date ;
        $this->price =$price ;
        $this->availibility =$availibility ;
        $this->category =$category ;
    }

    public function getId(){
        return $this->id ;
    }

    public function setId($id){
        $this->id =$id ;
    }

    public function getTitle(){
        return $this->title ;
    }

    public function setTitle($title){
        $this->title =$title ;
    }

    public function getDestination(){
        return $this->destination ;
    }

    public function setDestination($destination){
        $this->destination =$destination ;
    }

    public function getDepartureDate(){
        return $this->departure_date ;
    }

    public function setDepartureDate($departure_date){
        $this->departure_date =$departure_date ;
    }

    public function getReturnDate(){
        return $this->return_date ;
    }

    public function setReturnDate($return_date){
        $this->return_date =$return_date ;
    }

    public function getPrice(){
        return $this->price ;
    }

    public function setPrice($price){
        $this->price =$price ;
    }

    public function getAvailibility(){
        return $this->availibility ;
    }

    public function setAvailibility($availibility){
        $this->availibility =$availibility ;
    }

    public function getCategory(){
        return $this->category ;
    }

    public function setCategory($category){
        $this->category =$category ;
    }
}
?>