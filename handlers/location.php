<?php
require_once($_SERVER["DOCUMENT_ROOT"].'/eTicket/main/Classes/Location.php');

if (isset($_POST["county_index"])) {
    $location = new Location();


    if ($_POST["county_index"] === "county") {

        $data = $location->getCounty();
        foreach ($data as $row) {
            $output[] = array(
                'id' => $row["idcounty"],
                'name' => $row["countyname"]
            );
        }

        echo json_encode($output);
    } else {

        $data = $location->getLocationwhereCountyid($_POST['county_index_id']);
        foreach ($data as $row) {
            $output[] = array(
                'id' => $row["idlocation"],
                'name' => $row["location_name"]
            );
        }
        echo json_encode($output);
    }
}

