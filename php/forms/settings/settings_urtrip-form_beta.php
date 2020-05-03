<?php
// import functions for writing sql query
require __DIR__ . '/../functions/forms.php';

/////////////////////////////////////////////////
// SEND DATA TO DATABASE
/////////////////////////////////////////////////
if( ! empty($_POST)) {
    // open connection
    $mysqli = new mysqli('localhost:3306', 'root', 'Jackson.5', 'urtrip_database');
    //check our connection
    if($mysqli->connect_error){
        die('connect error : ' . $mysqli->connect_errno . ': ' . $mysqli->connect_error);
    }

    /////////////////////////////////////////////////
    // -- customer data 
    /////////////////////////////////////////////////

    $customersRawData = [
        'first_name' => $_POST["Prénom"],
        'last_name' => $_POST["Nom"],
        'birth_date' => $_POST["Date_de_naissance"][2]."-".$_POST["Date_de_naissance"][1]."-".$_POST["Date_de_naissance"][0],
        'email' => $_POST["Email"],
        'phone' => $_POST["Téléphone"],
        'work' => $_POST["Métier"]
    ];
    $customersQuery = writeMyQuery('customers', $customersRawData, $mysqli);
    $insertCustomers = $mysqli->query($customersQuery);
    // print response from mysql
    if($insertCustomers){
        echo "Customers: Success! Row ID: {$mysqli->insert_id}";
    } else {
        die("Customers: Error: {$mysqli->errno} : {$mysqli->error}");
    }

    /////////////////////////////////////////////////
    // -- trip data 
    /////////////////////////////////////////////////

    $tripsRawData = [
        //'customer_id' => mysql_insert_id(),
        'submission_date' => date("Y-m-d"),
        'purpose' => $_POST["Type_de_voyage"],
        'adults' => $_POST["Adultes"],
        'minors' => $_POST["Mineurs"],
        'children' => $_POST["Enfants"],
        'departure_date' => $_POST["Départ_le"],
        'return_date' => $_POST["Retour_le"],
        'duration' => call_user_func(function () {
            if($_POST["Durée"][0] == ""){
                return "";
            } else {
                return implode(" ", $_POST["Durée"]);
            }
        }),
        'place_from' => $_POST["De"],
        'destination' => $_POST["A"],
        'comments' => $_POST["Note"],
        'transport_mode' => implode(", ", $_POST["Mode_de_transport"]),
        'transport_preferences' => $_POST["Retour"] . " " . $_POST["Préférence"],
        'on_site_transport' => implode(", ", $_POST["Transport_sur_place"]),
        'on_site_housing' => implode(", ", $_POST["Logement"]),
        'budget' => $_POST["Budget_min"] . "-" . $_POST["Budget_max"] . " €"
    ];

    $tripsQuery = writeMyQuery('trips', $tripsRawData, $mysqli);

    $insertTrips = $mysqli->query($tripsQuery);

    // print response from mysql
    if($insertTrips){
        echo "Trips: Success! Row ID: {$mysqli->insert_id}";
    } else {
        die("Trips: Error: {$mysqli->errno} : {$mysqli->error}");
    }

    // close connection
    $mysqli->close();

};
?>
