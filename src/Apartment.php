<?php


namespace App;


/**
 * Class Apartment
 * @package App
 */
class Apartment extends Room
{

    /**
     * Apartment constructor.
     * @param $roomNumber
     * @param $price
     */
    public function __construct($roomNumber, $price)
    {
        $this->setPrice($price);
        $this->setRoomType('Diamond');
        $this->setHasRestroom(true);
        $this->setHasBalcony(true);
        $this->setBedCount(4);
        $this->setRoomNumber($roomNumber);
        $this->setExtras(['TV', 'air-conditioner', 'refrigerator', 'mini-bar', 'bathtub', 'kitchen box', 'free Wi-fi']);

    }

}