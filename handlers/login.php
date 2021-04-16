<?php



session_start();

require_once($_SERVER["DOCUMENT_ROOT"] . '/eTicket/main/Classes/Login.php');
$login = new Login();
$res = $login->logmein($_POST['email'], $_POST['password']);
if ($res!==false){
    $_SESSION['user_id']=$res;
    $_SESSION['logged_in']=true;
    echo json_encode([
        'res'=>true
    ]);
}

else{
    echo json_encode([
        'res' => $res
    ]);
}
