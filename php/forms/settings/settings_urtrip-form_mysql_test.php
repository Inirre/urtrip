<?php

// import functions for writing sql query
require __DIR__ . '/../functions/forms.php';

/////////////////////////////////////////////////
// SEND DATA TO DATABASE
/////////////////////////////////////////////////

if($_POST["submit"]) {

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
        'first_name' => $_POST["customer"]["firstName"],
        'last_name' => $_POST["customer"]["lastName"],
        'birth_date' => $_POST["customer"]["birthYear"]."-".$_POST["customer"]["birthMonth"]."-".$_POST["customer"]["birthDay"],
        'email' => $_POST["customer"]["emailAddress"],
        'phone' => $_POST["customer"]["phoneNumber"],
        'work' => $_POST["customer"]["work"]
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
        'purpose' => $_POST["trip"]["type"],
        'adults' => $_POST["trip"]["travellers"]["numberOfAdults"],
        'minors' => $_POST["trip"]["travellers"]["numberOfMinors"],
        'children' => $_POST["trip"]["travellers"]["numberOfChildren"],
        'departure_date' => $_POST["trip"]["times"]["departure"],
        'return_date' => $_POST["trip"]["times"]["return"],
        'duration' => call_user_func(function () {
            if($_POST["trip"]["times"]["duration"][0] == ""){
                return "";
            } else {
                return implode(" ", $_POST["trip"]["times"]["duration"]);
            }
        }),
        'place_from' => $_POST["trip"]["places"]["from"],
        'destination' => $_POST["trip"]["places"]["to"],
        'comments' => $_POST["trip"]["additionalInfo"],
        'transport_mode' => implode(", ", $_POST["trip"]["transport"]["modes"]),
        'transport_preferences' => $_POST["trip"]["transport"]["preference"],
        'on_site_transport' => implode(", ", $_POST["trip"]["onSite"]["transport"]),
        'on_site_housing' => implode(", ", $_POST["trip"]["onSite"]["housing"]),
        'budget' => $_POST["trip"]["budget"]["min"] . "-" . $_POST["trip"]["budget"]["max"] . " €"
    ];

    $tripsQuery = writeMyQuery('trips', $tripsRawData, $mysqli);
    echo $tripsQuery;

    $insertTrips = $mysqli->query($tripsQuery);

    // print response from mysql
    if($insertTrips){
        echo "Trips: Success! Row ID: {$mysqli->insert_id}";
    } else {
        die("Trips: Error: {$mysqli->errno} : {$mysqli->error}");
    }

    // close connection
    $mysqli->close();

}

?>