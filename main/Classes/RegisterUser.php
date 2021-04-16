<?php

require_once($_SERVER["DOCUMENT_ROOT"] . '/eTicket/helpers/Base.php');

class RegisterUser extends base
{

    public function registerPostuser($fname, $sname, $email, $password, $password_confirmation)
    {
        return $this->registerNewuser($fname, $sname, $email, $password, $password_confirmation);
    }

}