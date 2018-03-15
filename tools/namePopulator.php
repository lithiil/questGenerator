<?php
/**
 * This script generates a json with 100 rare names, you can use them in the names array of the quests or rumors jsons
 * Thanks to http://namey.muffinlabs.com !
 */

$data = [];

for ($i = 0; $i < 10; $i++) {

    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "http://namey.muffinlabs.com/name.json?count=10&type=male&with_surname=true&frequency=all&callback=json4",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
            "Cache-Control: no-cache",
            "Postman-Token: 3d5e8a00-75d0-4c83-81c4-938e7977ba2b"
        ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    $results = str_replace('json4','',$response);
    $results = explode(',',preg_replace("/[^a-zA-Z,_.@\- ]/", '', $results));

    foreach ($results as $result) {
        array_push($data, $result);
    }
}

$data = json_encode($data, JSON_PRETTY_PRINT);

file_put_contents('names.json',$data);
