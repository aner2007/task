<?php
$curl=curl_init();
curl_setopt($curl,CURLOPT_URL,'https://rosins-dev.digiqal.de/wp-json/wp/v2/posts?_embed');
curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,false);
curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);

$result=curl_exec($curl);
$data=json_decode($result);

$arrayIds=[];
?>
<ul id="paginated-list" data-current-page="1" aria-live="polite">
<?php
    foreach($data as $value){
    $html="";
    $html.="<li><div class='post-main'><img src=".$value->_embedded->{'wp:featuredmedia'}[0]->source_url." class='post-images' width=350 height=250>";
    $html.='<h2>'.$value->title->rendered.'</h2>';
    $html.='<p>'.$value->content->rendered.'</p>';
    $html.='<a class="read-more">Read full article</a></div></li>';

    echo $html;
}
?>
    </ul>
    <?php
    curl_close($curl);
<?php include '../includes/header.php'; ?>

<style><?php include '../css/pagination.css'; ?></style>
<main>



    <nav class="pagination-container">
        <button class="pagination-button" id="prev-button" aria-label="Previous page" title="Previous page">
            &lt;
        </button>

        <div id="pagination-numbers">

        </div>

        <button class="pagination-button" id="next-button" aria-label="Next page" title="Next page">
            &gt;
        </button>
    </nav>
</main>
<script src="../js/pagination.js"></script>
<?php include '../includes/footer.php'; ?>
