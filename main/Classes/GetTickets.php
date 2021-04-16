<?php

require_once($_SERVER["DOCUMENT_ROOT"] . '/eTicket/helpers/Base.php');

class GetTickets extends Base
{
    public function getmyTickets($user_id)
    {
        $query = "SELECT ticket_no,first_name,second_name,bno,seatno,movingfrom,movingto,date_of_issue,travel_date,departuretime,arrival_time,price FROM mytickets where user_id='" . $user_id . "'";

        return $this->getResultSetArray($query);

    }

}