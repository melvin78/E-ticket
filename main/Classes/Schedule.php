<?php

require_once($_SERVER["DOCUMENT_ROOT"] . '/eTicket/helpers/Base.php');

class Schedule extends Base
{


    public function getScheduledetails($from, $to)
    {
        $query = "SELECT departuretime,Destination,Boardingpoint,busno,traveldate,arrival_time,price FROM buss
WHERE Boardingpoint = '" . $from . "' AND Destination= '" . $to . "'  ";

        return $this->getResultSetArray($query);


    }

    public function getLocationnamefrom($from, $index)
    {
        $query = "SELECT location_name FROM location WHERE idlocation ='" . $from . "'";

        return $this->getSinglevalue($query, $index);

    }

    public function getLocationto($to, $index)
    {

        $query = "SELECT location_name FROM location WHERE idlocation='" . $to . "'";
        return $this->getSinglevalue($query, $index);
    }

    public function getAvailableseats($from, $to)
    {
        $query2 = "SELECT available,busno FROM seats_available WHERE movingfrom='" . $from . "' AND goingto='" . $to . "'";
        return $this->getResultSetArray($query2);

    }

}