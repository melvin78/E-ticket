<?php


require_once($_SERVER["DOCUMENT_ROOT"] . '/eTicket/helpers/Base.php');
require_once($_SERVER["DOCUMENT_ROOT"] . '/eTicket/main/Classes/UpdateSeats.php');


class Ticket extends Base
{
    public function saveTicket($data)
    {

        return $this->saveTicketinfo($data);
    }

    public function updateBookedseats($sno, $bno)
    {
        $query = "SELECT idbus FROM bus WHERE busno='" . $bno . "'";
        $bus_id = $this->fetchColumn($query);
        $data = [
            'bno' => $bus_id,
            'sno' => $sno
        ];

        $this->setstatusTobooked($data);

    }


}