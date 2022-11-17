<?php
$curl=curl_init();
curl_setopt($curl,CURLOPT_URL,'https://rosins-dev.digiqal.de/wp-json/wp/v2/posts?_embed');
curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,false);
curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);

$result=curl_exec($curl);
$data=json_decode($result);
foreach($data as $value){
    $html.="<div class='post-main'><img src=".$value->_embedded->{'wp:featuredmedia'}[0]->source_url." class='post-images' width=350 height=250>";
    $html.='<h2>'.$value->title->rendered.'</h2>';
    $html.='<p>'.$value->content->rendered.'</p>';
    $html.='<a class="read-more">Read full article</a></div>';
    echo $html;

}

curl_close($curl);