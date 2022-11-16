<?php
$curl=curl_init();
curl_setopt($curl,CURLOPT_URL,'https://rosins-dev.digiqal.de/');
curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,false);
curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);

$result=curl_exec($curl);
echo $result;
curl_close($curl);
