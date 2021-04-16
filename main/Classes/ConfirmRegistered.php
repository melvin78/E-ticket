<?php
require_once($_SERVER["DOCUMENT_ROOT"] . '/eTicket/helpers/Base.php');

class ConfirmRegistered extends Base

{

    public function confirmuserIsnotregistered($email)
    {

        $query = "SELECT count(email) FROM users_eticket WHERE email='" . $email . "'";
        return $this->fetchColumn($query);

    }

}