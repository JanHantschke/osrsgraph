<?php
$baseTemplate = file_get_contents("base.html");
print $baseTemplate;


/*
// create curl resource
$curl = curl_init();

// set url
curl_setopt($curl, CURLOPT_URL, "https://api.weirdgloop.org/exchange/history/osrs/latest?id=2353");

curl_setopt($curl, CURLOPT_HTTPHEADER,array('Content-Type: application/json'));

//return the transfer as a string
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);



// $output contains the output string
$output = curl_exec($curl);

// close curl resource to free up system resources
curl_close($curl);

print $output;
*/

?>