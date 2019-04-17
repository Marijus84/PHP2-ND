<?php


namespace App;


/**
 * Class SingleRoom
 * @package App
 */
class SingleRoom extends Room
{
    /**
     * SingleRoom constructor.
     * @param $roomNumber
     * @param $price
     */
    public function __construct($roomNumber, $price)
    {
        $this->setPrice($price);
        $this->setRoomType('Standard');
        $this->setHasRestroom(true);
        $this->setHasBalcony(false);
        $this->setBedCount(1);
        $this->setRoomNumber($roomNumber);
        $this->setExtras(['TV', 'air-conditioner']);

    }


}