<?php

require_once('config/Connection.php');
require_once('main/Interfaces/DataInterface.php');

class User extends Connection implements DataInterface
{

    public function __construct()
    {
        $res = $this->dbConnect();

        if ($res['response'] = !'200') {
            echo '<h1>Something went wrong</h1>';
        }

    }
}