<?php
$curl=curl_init();
curl_setopt($curl,CURLOPT_URL,'https://rosins-dev.digiqal.de/wp-json/wp/v2/posts?per_page=100&_embed');
//curl_setopt($curl,CURLOPT_URL,'https://rosins-dev.digiqal.de/wp-json/wp/v2/posts?categories=');
curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,false);
curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);

$result=curl_exec($curl);
$data=json_decode($result);

?>

    <ul id="paginated-list" data-current-page="1" aria-live="polite">
    <?php
    foreach($data as $value){
        $html="";
        $html.="<li><div class='post-main'><img src=".$value->_embedded->{'wp:featuredmedia'}[0]->source_url." class='post-images' width=350 height=250>";
        $html.='<div class="marketing"><span>MARKETING</span><span class="min-read">5min Read</span></div>';
        $html.='<h2>'.$value->title->rendered.'</h2>';
        $html.='<div class="content-text"><p>'.$value->content->rendered.'</p></div>';
        $html.='<a href="'.$value->link.'" class="read-more">Read full article</a></div></li>';

        echo $html;
    }
    ?>
</ul>
    <nav class="pagination-container">
        <button class="pagination-button" id="prev-button" aria-label="Previous page" title="Previous page">
        </button>

        <div id="pagination-numbers">

        </div>

        <button class="pagination-button" id="next-button" aria-label="Next page" title="Next page">
          </button>
    </nav>
<?php
curl_close($curl);