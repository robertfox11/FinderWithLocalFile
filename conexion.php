<?php

//  header("Content-Type: application/json; charset=UTF=8");
//  $tecnologia =array(
//      'frotend'=> 'html5', 'css3', 'js',
//      'backend'=> 'java', 'php', 'apache'
//  );
//  echo json_encode($tecnologia);
// $array = array("foo", "bar", "hello", "world");
// $nombre =$_REQUEST["nombre"];
// $sugerencia ="";
// if ($nombre!=="") {
//     $nombre = strtolower($nombre);
//     $long = strlen($nombre);
//     foreach ($array as $nom) {
//         if (stristr($nombre, substr($nom, 0, $long))) {
//             if ($sugerencia =="") {
//                 $sugerencia = $nom;
//             }else{
//                 $sugerencia ="$sugerencia, $nom";
//             }
//         }
//     }
// }
// echo ($sugerencia ==="")? "no hay sugerencia": $sugerencia;
// if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
//     // Indica los métodos permitidos.
//     header('Access-Control-Allow-Methods: GET, POST, DELETE');
//     // Indica los encabezados permitidos.
//     header('Access-Control-Allow-Headers: Authorization');
//     http_response_code(204);
// }
// 
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

?>