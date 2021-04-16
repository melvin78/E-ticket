<?php
session_start();
require_once($_SERVER["DOCUMENT_ROOT"] . '/eTicket/main/Classes/Schedule.php');
require_once($_SERVER["DOCUMENT_ROOT"] . '/eTicket/main/Classes/FormatSchedule.php');

$schedule = new Schedule();
$format = new FormatSchedule();

$data = $schedule->getAvailableseats($_SESSION['from'], $_SESSION['to']);
$result= $format->formatSeats($data);
echo json_encode($result);