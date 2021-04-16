<?php
session_start();
require_once($_SERVER["DOCUMENT_ROOT"] . '/eTicket/main/Classes/Schedule.php');
require_once($_SERVER["DOCUMENT_ROOT"] . '/eTicket/main/Classes/FormatSchedule.php');
if (isset($_SESSION['from']) && isset($_SESSION['to'])) {
    $schedule = new Schedule();
    $format_schedule = new FormatSchedule();

    $data = $schedule->getScheduledetails($_SESSION['from'], $_SESSION['to']);


    $result = $format_schedule->format($data);

    echo json_encode($result);


} else {
    echo 'error occured';
}



