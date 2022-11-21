
<style><?php include '../css1/custom.css'; ?></style>
<?php
if (isset($_GET['title'])) {
    $title=$_GET['title'];
}
if (isset($_GET['content'])) {
    $content=$_GET['content'];
}
if (isset($_GET['category'])) {
    $categoryId=$_GET['category'];
}
$url = "https://rosins-dev.digiqal.de/wp-json/wp/v2/posts";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
    "Accept: application/json",
    "Authorization: Basic c2FuamluOmJvbGlnbGF2YTEw",
    "Content-Type: application/json",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);


$data = '{"title":"'.$title.'","content":"'.$content.'","status":"publish","categories":"'.$categoryId.'"}';


curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);

curl_close($curl);

?>

<script> window.location = "https://aner.bosnialab.com/task?success=yes";</script>
