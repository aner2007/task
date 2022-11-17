<?php

$url="https://rosins-dev.digiqal.de/wp-json/wp/v2/posts";

$headers = array();
$headers[] = 'Content-Type: application/json';
$data_array=array(
    'title' =>'Mostar',
    'content' =>'svega pomalo je bilo',
    'type' =>'post'
);

$data =http_build_query($data_array);

$ch=curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch,CURLOPT_HTTPHEADER, $headers);

$resp = curl_exec($ch);

if($e = curl_error($ch)){
    echo $e;
} else {
    $decoded = json_decode($resp);
    foreach ($decoded as $key => $val){
        echo $key.' : '.$val.'<br>';
    }
}
curl_close();