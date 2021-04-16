<?php


class FormatSchedule
{


    public function format($data)
    {
        $output = array();
        foreach ($data as $row) {
            $output[] = [
                'bno' => $row['busno'],
                'date' => $row['traveldate'],
                'from' => $row['Boardingpoint'],
                'to' => $row['Destination'],
                'time' => $row['departuretime'],
                'arrival' => $row['arrival_time'],
                'price' => $row['price']

            ];

        }
        return $output;
    }

    public function formatSeats($data)
    {
        $output = array();
        foreach ($data as $row) {
            $output[] = [
                'seats' => $row['available'],
                'busno' => $row['busno'],
            ];

        }
        return $output;
    }

    public function formatSeatsavailable($data)
    {

        $output = array();
        foreach ($data as $row) {
            $output[] = [
                'sno' => $row['seatno'],
                'status' => $row['availability'],
            ];

        }
        return $output;
    }

    public function formatTickets($data)
    {
        $output = array();
        foreach ($data as $row) {
            $output[] = [
                'bno' => $row['bno'],
                'from' => $row['movingfrom'],
                'to' => $row['movingto'],
                'sno' => $row['seatno'],
                'date' => $row['travel_date'],
                'issued' =>$row['date_of_issue'],
                'tno' => $row['ticket_no'],
                'fname' => $row['first_name'],
                'sname' => $row['second_name'],
                'depart' => $row['departuretime'],
                'arrival_time' => $row['arrival_time'],
                'price' => $row['price'],

            ];

        }
        return $output;

    }

    public function formatTimetable($data){
        $output = array();
        foreach ($data as $row) {
            $output[] = [
                'boarding_point'=>$row['Boardingpoint'],
                'destination'=>$row['Destination'],
                'boarding_county'=>$row['countyfrom'],
                'leaving_county'=>$row['countyt'],
                'id_schedule'=>$row['idschedule']

            ];

        }
        return $output;

    }


}