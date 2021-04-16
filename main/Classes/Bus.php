<?php
session_start();
require_once($_SERVER["DOCUMENT_ROOT"] . '/eTicket/helpers/Base.php');

class Bus extends Base
{

    public $bno;

    public function __construct()
    {
        parent::__construct();
        $this->bno = $_SESSION['bno'];
    }


    public function getBusid()
    {
        $query = "SELECT idbus FROM bus WHERE busno='" . $_SESSION['bno'] . "'";
        return $this->fetchColumn($query);
    }


}


