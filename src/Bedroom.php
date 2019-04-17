<?php


namespace App;


/**
 * Class Bedroom
 * @package App
 */
class Bedroom extends Room
{

    /**
     * Bedroom constructor.
     * @param $roomNumber
     * @param $price
     */
    public function __construct($roomNumber, $price)
    {
        $this->setPrice($price);
        $this->setRoomType('Gold');
        $this->setHasRestroom(true);
        $this->setHasBalcony(true);
        $this->setBedCount(2);
        $this->setRoomNumber($roomNumber);
        $this->setExtras(['TV', 'air-conditioner', 'refrigerator', 'mini-bar', 'bathtub']);

    }

}