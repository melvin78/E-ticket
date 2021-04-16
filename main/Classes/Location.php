<?php

require_once($_SERVER["DOCUMENT_ROOT"].'/eTicket/helpers/Base.php');


class Location extends Base
{


    public function getLocationwhereCountyid($post_value)
    {
        $query = "SELECT * FROM location WHERE countyid = '" . $post_value . "'  ORDER BY location_name ASC ";
        return $this->getResultSetArray($query);

    }

    public function getCounty()
    {
        $query = " SELECT * FROM county ORDER BY countyname ASC";
        return $this->getResultSetArray($query);
    }

}