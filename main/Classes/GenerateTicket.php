<?php


class GenerateTicket
{
    public $bno;
    public $from;
    public $to;
    public $date;
    public $user_id;

    public function __construct()
    {
        $this->bno = $_SESSION['bno'];

        $this->from = $_SESSION['from'];
        $this->to = $_SESSION['to'];
        $this->date = $_SESSION['date'];
        $this->user_id=$_SESSION['user_id'];
    }

    public function formatTicket($data)
    {
        $output = array();
        foreach ($data as $row) {
            $output[] = [
                'bno' => $this->bno,
                'movingfrom' => $this->from,
                'movingto' => $this->to,
                'seatno' => $row['sno'],
                'travel_date' => $this->date,
                'ticket_no' => 'ET-' . $this->bno . '-' . mt_rand(10000, 50000) . '-MELVIN',
                'first_name' => $row['fname'],
                'second_name' => $row['sname'],
                'user_id'=>$this->user_id
            ];

        }
        return $output;

    }

}