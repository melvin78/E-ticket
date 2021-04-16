<?php
require_once($_SERVER["DOCUMENT_ROOT"] . '/eTicket/main/Classes/RegisterUser.php');
require_once($_SERVER["DOCUMENT_ROOT"] . '/eTicket/main/Classes/ConfirmRegistered.php');
$reg = new RegisterUser();
$confirm = new ConfirmRegistered();
$res = $confirm->confirmuserIsnotregistered($_POST['email']);


if ($res == 0) {
    $reg->registerPostuser($_POST['fname'], $_POST['sname'], $_POST['email'], $_POST['password'], $_POST['password_confirmation']);
    echo json_encode([
        'res'=>true
    ]);
}

else{
    echo json_encode([
        'res'=>false
    ]);

}



