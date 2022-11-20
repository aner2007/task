
<?php
if (isset($_GET['postId'])) {
    $postId = $_GET['postId'];
    $rest_api_url = "https://rosins-dev.digiqal.de/wp-json/wp/v2/posts/" . $postId . "?force=true";

    $curl = curl_init($rest_api_url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
    curl_setopt($ch, CURLOPT_URL, $rest_api_url);
    curl_setopt($ch, CURLOPT_POST, 1);

    $headers = array(
        "Accept: application/json",
        "Authorization: Basic c2FuamluOmJvbGlnbGF2YTEw",
        "Content-Type: application/json",
    );
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);


    $resp = curl_exec($curl);

    curl_close($curl);
}
?>


