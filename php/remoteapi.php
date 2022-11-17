<?php
$login = 'sanjin';
$password = 'boliglava10';



wp_remote_post(
    'https://WEBSITE-DOMAIN/wp-json/wp/v2/posts',
    array(
        'headers' => array(
            'Authorization' => 'Basic ' . base64_encode( "$login:$password" )
        ),
        'body' => array(
            'title'   => 'My test',
            'status'  => 'draft',
        )
    )
);