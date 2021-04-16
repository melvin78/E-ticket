<?php

require_once($_SERVER["DOCUMENT_ROOT"].'/eTicket/helpers/Base.php');
class Seat extends Base
{

    public function getSeatavailability($busno, $from, $to, $date)
    {

        $query = "SELECT seatno,availability FROM seat_availability_view 
WHERE busno='" . $busno . "' AND movingfrom='" . $from . "' AND goingto='" . $to . "' AND traveldate ='" . $date . "' ";

        return $this->getResultSetArray($query);
    }

}