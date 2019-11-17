<?php

header("Content-Type: application/json; charset=UTF=8");

function csvtojson($file,$delimiter) { 
    if (($handle = fopen($file, "r")) === false) { 
        die("can't open the file."); 
    } 
    $csv_headers = fgetcsv($handle); 
    $csv_json = array(); 
    while ($row = fgetcsv($handle)) { 
        $csv_json[] = array_combine($csv_headers, $row); 
    } 
    fclose($handle); 
    return json_encode($csv_json, JSON_PRETTY_PRINT); 
} 
$jsonresult = csvtojson("../archivo/country.csv", ","); 

echo $jsonresult; 

?>