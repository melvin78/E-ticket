<?php
session_start();
require_once($_SERVER["DOCUMENT_ROOT"] . '/eTicket/main/Classes/GetTickets.php');
require_once($_SERVER["DOCUMENT_ROOT"] . '/eTicket/main/Classes/FormatSchedule.php');

$get_tickets= new GetTickets();
$format= new FormatSchedule();

$data=$get_tickets->getmyTickets($_SESSION['user_id']);
$res=$format->formatTickets($data);

echo json_encode($res);