<?php

require_once($_SERVER["DOCUMENT_ROOT"] . '/eTicket/helpers/Base.php');

class ScheduleDetails extends base
{
    public function allSchedules()
    {
        $query = "SELECT DISTINCT idschedule,Boardingpoint,Destination,countyfrom,countyt FROM buss";

        return $this->getResultSetArray($query);

    }
}