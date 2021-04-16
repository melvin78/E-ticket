<?php
require_once($_SERVER["DOCUMENT_ROOT"] . '/eTicket/main/Classes/ScheduleDetails.php');
require_once($_SERVER["DOCUMENT_ROOT"] . '/eTicket/main/Classes/FormatSchedule.php');
 $schd= new ScheduleDetails();
 $fsch= new FormatSchedule();

 $res=$fsch->formatTimetable($schd->allSchedules());

 echo json_encode([
     'data'=>$res
 ]);