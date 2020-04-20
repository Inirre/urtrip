<?php

if($_POST["submit"]) {
    /////////////////////////////////////////////
    // put values into variables
    /////////////////////////////////////////////

    // Customer details
    $first_name = $_POST["customer"]["firstName"];
    $last_name = $_POST["customer"]["lastName"];
    $full_name = $firstName . " " . $lastName;
    $birth_date = $_POST["customer"]["birthYear"]."-".$_POST["customer"]["birthMonth"]."-".$_POST["customer"]["birthDay"];
    $email = $_POST["customer"]["emailAddress"];
    $phone = $_POST["customer"]["phoneNumber"];
    $work_category = $_POST["customer"]["workCategory"];
    $work = $_POST["customer"]["work"];

    // Trip details
    $submissionDate = date("Y-m-d");
    $purpose = $_POST["trip"]["type"];

    $numberOfAdults = $_POST["trip"]["travellers"]["numberOfAdults"];
    $numberOfMinors = $_POST["trip"]["travellers"]["numberOfMinors"];
    $numberOfChildren = $_POST["trip"]["travellers"]["numberOfChildren"];

    $dateDeparture = $_POST["trip"]["times"]["departure"];
    $dateReturn = $_POST["trip"]["times"]["return"];
    $tripDuration = $_POST["trip"]["times"]["duration"][0] . " " . $_POST["trip"]["times"]["duration"][1];
    $placeFrom = $_POST["trip"]["places"]["from"];
    $destination = $_POST["trip"]["places"]["to"];
    $additionalInfo = $_POST["trip"]["additionalInfo"];

    $transportMode = implode(" ", $_POST["trip"]["transport"]["modes"]);
    $transportPreferences = $_POST["trip"]["transport"]["preference"];

    $onSiteTransport = implode(" ", $_POST["trip"]["onSite"]["transport"]);
    $onSiteHousing = implode(" ", $_POST["trip"]["onSite"]["housing"]);

    $budget = $_POST["trip"]["budget"]["min"] . "-" . $_POST["trip"]["budget"]["max"] . " €";
    
    $thankYou="<div id='test' class='form__confirmation'>
                <p class='form__confirmation__message'>Merci de nous avoir contacté !\nLes messages sont généralement traîtés sous 48h.</p>
                <i class='far fa-times-circle form__confirmation__cross'></i>
                </div>"
    ;

    /////////////////////////////////////////////
    // insert data in database
    /////////////////////////////////////////////
    // connect to mysql 
    $mysqli = new mysqli('localhost:3306', 'root', 'Jackson.5', 'urtrip_database');
    //check our connection
    if($mysqli->connect_error){
        die('connect error : ' . $mysqli->connect_errno . ': ' . $mysqli->connect_error);
    }

    // insert customer data
    $sqlCustomers = "INSERT INTO customers (
        first_name,
        last_name,
        birth_date,
        email,
        phone,
        work_category,
        work
        )
        VALUES (
            '{$mysqli->real_escape_string($first_name)}',
            '{$mysqli->real_escape_string($last_name)}',
            '{$mysqli->real_escape_string($birth_date)}',
            '{$mysqli->real_escape_string($email)}',
            '{$mysqli->real_escape_string($phone)}',
            '{$mysqli->real_escape_string($work_category)}',
            '{$mysqli->real_escape_string($work)}'
        )
    ";
    $insertCustomers = $mysqli->query($sqlCustomers);
    // print response from mysql
    if($insertCustomers){
        echo "Customers: Success! Row ID: {$mysqli->insert_id}";
    } else {
        die("Customers: Error: {$mysqli->errno} : {$mysqli->error}");
    }

    // insert customer data
    $sqlTrips = "INSERT INTO trips (
        submission_date,
        purpose,
        adults,
        minors,
        children,
        departure_date,
        return_date,
        duration,
        place_from,
        destination,
        comments,
        transport_mode,
        transport_preferences,
        on_site_transport,
        on_site_housing,
        budget
        )
        VALUES (
            '{$mysqli->real_escape_string($submissionDate)}',
            '{$mysqli->real_escape_string($purpose)}',
            '{$mysqli->real_escape_string($numberOfAdults)}',
            '{$mysqli->real_escape_string($numberOfMinors)}',
            '{$mysqli->real_escape_string($numberOfChildren)}',
            '{$mysqli->real_escape_string($dateDeparture)}',
            '{$mysqli->real_escape_string($dateReturn)}',
            '{$mysqli->real_escape_string($tripDuration)}',
            '{$mysqli->real_escape_string($placeFrom)}',
            '{$mysqli->real_escape_string($destination)}',
            '{$mysqli->real_escape_string($additionalInfo)}',
            '{$mysqli->real_escape_string($transportMode)}',
            '{$mysqli->real_escape_string($transportPreferences)}',
            '{$mysqli->real_escape_string($onSiteTransport)}',
            '{$mysqli->real_escape_string($onSiteHousing)}',
            '{$mysqli->real_escape_string($budget)}'
        )
    ";
    $insertTrips = $mysqli->query($sqlTrips);
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
