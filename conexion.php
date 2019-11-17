<?php

header("Content-Type: application/json; charset=UTF=8");
// $objeto = json_decode($_GET["objeto"], false);

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
$jsonresult = csvtojson("assets/archivo/country.csv", ","); 
echo $jsonresult; 
// json_encode($_GET)

?>
// $hint = "";

// lookup all hints from array if $q is different from ""
// $q = $_REQUEST["q"];
// $hint ="";  
// if ($q !== "") {
//   $q = strtolower($q);
//   $len=strlen($q);
//   foreach($a as $jsonresult) {
//     if (stristr($q, substr($jsonresult, 0, $len))) {
//       if ($hint === "") {
//         $hint = $jsonresult;
//       } else {
//         $hint .= ", $jsonresult";
//       }
//     }
//   }
// }
// echo $hint === "" ? "no suggestion" : $hint;

?>