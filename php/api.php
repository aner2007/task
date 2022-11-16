<?php
$curl=curl_init();
curl_setopt($curl,CURLOPT_URL,'https://rosins-dev.digiqal.de/wp-json/wp/v2/posts');
curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,false);
curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);

$result=curl_exec($curl);
//$result=json_encode($result);
$data=json_decode($result);
foreach($data as $value){
    $html.='<h2>'.$value->title->rendered.'</h2>';
    $html.='<p>'.$value->content->rendered.'</p>';
    $html.='<a class="read-more">Read more</a></div>';
    echo $html;

}

curl_close($curl);
