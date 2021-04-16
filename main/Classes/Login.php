<?php

require_once($_SERVER["DOCUMENT_ROOT"] . '/eTicket/helpers/Base.php');

class Login extends base
{

    public function logmein($email, $password)

    {
        $query1 = "SELECT password FROM users_eticket where email='" . $email . "'";
        $verify_password = $this->fetchColumn($query1);
        if (password_verify($password, $verify_password)) {
            $query = "SELECT idusers_eticket FROM users_eticket where email='" . $email . "'";
            return $this->fetchColumn($query);
        } else {
            return false;
        }


    }

}