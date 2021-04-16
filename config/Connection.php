<?php


abstract class Connection
{

    public function dbConnect(){

        $dbHost = 'mysql:host=localhost;dbname=eticket;charset=utf8';
        $dbUsername = 'melvin';
        $dbPassword = 'melvin';


        if (!isset($GLOBALS['dbConnection'])) {

            try {
                $GLOBALS['dbConnection'] = new PDO($dbHost, $dbUsername, $dbPassword);

            }
            catch (PDOException $exception){
                $GLOBALS['dbConnection']->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $GLOBALS['dbConnection']=$exception->getMessage();
            }


        }



        return $GLOBALS['dbConnection'];



    }

}