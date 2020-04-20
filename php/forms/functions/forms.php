<?php

// filter array to only get key-value pairs form fields filled by customer
function getNonEmptyFields (array $arrayToFilter): array {
    $nonEmptyFields = array_filter($arrayToFilter, function($k){
        return $k !== "";
    });
    return $nonEmptyFields;
}

// get a list of the columns to fill in the table
function getColumns (array $data): string {
    return $columns = implode(",", array_keys($data));
}

// get sql values to fill in table
function getValues (array $data, $mysqli): string {
    $tempArray = [];
    foreach($data as $value){
        $tempArray[] = "'".$mysqli->real_escape_string($value)."'";
    };
    return $values = implode(",", array_values($tempArray));
}

// write the query
function writeMyQuery (string $sqlTableName, array $rawData, $mysqli): string {
    $data = getNonEmptyFields($rawData);
    $columns = getColumns($data);
    $values = getValues($data, $mysqli);
    return $myQuery = "INSERT INTO $sqlTableName ($columns) VALUES ($values);";
}

?>
