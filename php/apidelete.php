<?php
if (isset($_GET['postId'])) {
    $postId = $_GET['postId'];

    $rest_api_url = "https://rosins-dev.digiqal.de/wp-json/wp/v2/posts/" . $postId . "?force=true";
    $curl = curl_init($rest_api_url);
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
    curl_setopt($curl, CURLOPT_URL, $rest_api_url);
    $headers = array(
        "Accept: application/json",
        "Authorization: Basic c2FuamluOmJvbGlnbGF2YTEw",
        "Content-Type: application/json",
    );
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);


    curl_exec($curl);

    curl_close($curl);
}else{
    echo "Don't exist Post with this Id";
}
header("Location: https://aner.bosnialab.com/task/");
?>
