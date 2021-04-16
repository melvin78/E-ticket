<?php
session_start();
require_once($_SERVER["DOCUMENT_ROOT"] . '/eTicket/main/Classes/GenerateTicket.php');
require_once($_SERVER["DOCUMENT_ROOT"] . '/eTicket/main/Classes/Ticket.php');


$generate_ticket = new GenerateTicket();
$save_ticket = new Ticket();
foreach ($_POST['details'] as $detail) {

    $save_ticket->updateBookedseats($detail['sno'], $_SESSION['bno']);
}

$data = $generate_ticket->formatTicket($_POST['details']);
$res = $save_ticket->saveTicket($data);


echo json_encode([
    'res' => $res
]);













