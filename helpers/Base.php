<?php

require_once($_SERVER["DOCUMENT_ROOT"] . '/eTicket/config/Connection.php');

class Base extends Connection

{

    public function __construct()
    {
        $this->dbConnect();
    }

    public function setstatusTobooked($data){



            $stmt = $GLOBALS['dbConnection']->prepare("UPDATE SEATS SET status= 1 WHERE seatscol=:sno and busid=:bno");
            $stmt->bindParam(':sno', $data['sno'], PDO::PARAM_STR);
            $stmt->bindParam(':bno', $data['bno'], PDO::PARAM_STR);


            $stmt->execute();




    }

    public function insertRecord($table, $values)
    {


        //Strip $_POST array to fields with values
        $values = array_filter($values);
        //Take array keys from array
        $field_keys = array_keys($values);
        //Implode for insert fields
        $ins_fields = implode(",", $field_keys);
        //Implode for insert value fields (values will binded later)
        $value_fields = ":" . implode(", :", $field_keys);
        //Create update fields for each array create value = 'value = :value'.
        $update_fields = array_keys($values);
        foreach ($update_fields as &$val) {
            $val = $val . " = :" . $val;
        }
        $update_fields = implode(", ", $update_fields);
        //SQL Query
        $insert = "INSERT INTO $table ($ins_fields) VALUES ($value_fields) ON DUPLICATE KEY UPDATE $update_fields";
        $query = $GLOBALS['dbConnection']->prepare($insert);
        //Bind each value based on value coming in.
        foreach ($values as $key => &$value) {
            switch (gettype($value)) {
                case 'integer':
                case 'double':
                    $query->bindParam(':' . $key, $value, PDO::PARAM_INT);
                    break;
                default:
                    $query->bindParam(':' . $key, $value, PDO::PARAM_STR);
            }

            if ($query->execute()) {
                return 'Tickets booked Successfully';
            } else {
                return 'A problem has occured you are welcomed to try again';
            }
        }
    }

    public function getResultSetArray($varQuery)
    {


        $rsData = $GLOBALS['dbConnection']->prepare($varQuery);


        // if an error occurred, raise itd
        if (isset($GLOBALS['dbConnection']->errorCode) && ($GLOBALS['dbConnection']->errorCode != 00000)) {
            // if an error occurred, raise it.
            $responseArray['response'] = '500';
            $responseArray['message'] = 'Internal server error. MySQL error: ' . $GLOBALS['dbConnection']->errorCode;
        } else {


            if ($rsData->execute()) {

                $rsArray = $rsData->fetchAll();

            } else {

                $rsArray = array('result' => 'null');
            }

        }
        return $rsArray;
    }

    public function getSinglevalue($query, $index)
    {

        $rsData = $GLOBALS['dbConnection']->prepare($query);


        // if an error occurred, raise itd
        if (isset($GLOBALS['dbConnection']->errorCode) && ($GLOBALS['dbConnection']->errorCode != 00000)) {
            // if an error occurred, raise it.
            $responseArray['response'] = '500';
            $responseArray['message'] = 'Internal server error. MySQL error: ' . $GLOBALS['dbConnection']->errorCode;
        } else {


            if ($rsData->execute()) {

                $rsArray = $rsData->fetch();

            } else {

                $rsArray = array('result' => 'null');
            }

        }
        return $rsArray[$index];
    }

    public function saveTicketinfo($data)
    {
        foreach ($data as $datum) {
            $stmt = $GLOBALS['dbConnection']->prepare("INSERT INTO booked_tickets (bno, movingfrom,movingto,seatno,travel_date,ticket_no,first_name,second_name,user_id)
  VALUES (:bno, :movingfrom, :movingto,:seatno,:travel_date,:ticket_no,:first_name,:second_name,:user_id)");
            $stmt->bindParam(':bno', $datum['bno'], PDO::PARAM_STR);
            $stmt->bindParam(':movingfrom', $datum['movingfrom'], PDO::PARAM_STR);
            $stmt->bindParam(':movingto', $datum['movingto'], PDO::PARAM_STR);
            $stmt->bindParam(':seatno', $datum['seatno'], PDO::PARAM_STR);
            $stmt->bindParam(':travel_date', $datum['travel_date'], PDO::PARAM_STR);
            $stmt->bindParam(':ticket_no', $datum['ticket_no'], PDO::PARAM_STR);
            $stmt->bindParam(':first_name', $datum['first_name'], PDO::PARAM_STR);
            $stmt->bindParam(':second_name', $datum['second_name'], PDO::PARAM_STR);
            $stmt->bindParam(':user_id', $datum['user_id'], PDO::PARAM_STR);


            $stmt->execute();


        }

        return 1;


    }

    public function registerNewuser($fname, $sname, $email, $password, $password_confirmation)
    {

        if ($password !== $password_confirmation) {

            return 'Password combinations do not match';
        } else {

            $stmt = $GLOBALS['dbConnection']->prepare("INSERT INTO users_eticket (fname, sname, email, password)
            VALUES (:fname,:sname,:email,:password)");
            $stmt->bindParam(':fname', $fname, PDO::PARAM_STR);
            $stmt->bindParam(':sname', $sname, PDO::PARAM_STR);
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $stmt->bindParam(':password', $hashed_password, PDO::PARAM_STR);


            if ($stmt->execute()) {
                return 1;
            } else {
                return 0;
            }
        }


    }

    public function fetchColumn($query)
    {
        $rsData = $GLOBALS['dbConnection']->prepare($query);


        // if an error occurred, raise itd
        if (isset($GLOBALS['dbConnection']->errorCode) && ($GLOBALS['dbConnection']->errorCode != 00000)) {
            // if an error occurred, raise it.
            $responseArray['response'] = '500';
            $responseArray['message'] = 'Internal server error. MySQL error: ' . $GLOBALS['dbConnection']->errorCode;
        } else {


            if ($rsData->execute()) {

                return $rsData->fetchColumn();

            }


        }
    }


}