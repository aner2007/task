<link rel="stylesheet" href="css/custom.css">
<link rel="stylesheet" href="css/header.css">
<link rel="stylesheet" href="css/footer.css">
<link rel="stylesheet" href="css/pagination.css">
<link rel="stylesheet" href="css/form.css">
<link rel="stylesheet" href="styles/style.css">
<link rel="stylesheet" href="css/subscribe.css">
<?php include 'includes/header.php'; ?>
<?php
$curl=curl_init();
curl_setopt($curl,CURLOPT_URL,'https://rosins-dev.digiqal.de/wp-json/wp/v2/posts?per_page=100&_embed');
//curl_setopt($curl,CURLOPT_URL,'https://rosins-dev.digiqal.de/wp-json/wp/v2/posts?per_page=100&categories=');
curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,false);
curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);

$result=curl_exec($curl);
$data=json_decode($result);

        $html="";
        $html3="";
        $html4="";
        $html5="";
        $html6="";
        foreach($data as $value){
         if($value->_embedded->{'wp:term'}[0][0]->id == 5 ){
             $html5.="<li><div class='post-main'><img src=".$value->_embedded->{'wp:featuredmedia'}[0]->source_url." class='post-images' width=350 height=250>";
             $html5.='<div class="marketing"><span>MARKETING</span><span class="min-read">5min Read</span></div>';
             $html5.='<h2>'.$value->title->rendered.'</h2>';
             $html5.='<div class="content-text"><p>'.$value->content->rendered.'</p></div>';
             $html5.='<a href="'.$value->link.'" class="read-more">Read full article</a></div></li>';
         } elseif ($value->_embedded->{'wp:term'}[0][0]->id == 4 ){
             $html4.="<li><div class='post-main'><img src=".$value->_embedded->{'wp:featuredmedia'}[0]->source_url." class='post-images' width=350 height=250>";
             $html4.='<div class="marketing"><span>MARKETING</span><span class="min-read">5min Read</span></div>';
             $html4.='<h2>'.$value->title->rendered.'</h2>';
             $html4.='<div class="content-text"><p>'.$value->content->rendered.'</p></div>';
             $html4.='<a href="'.$value->link.'" class="read-more">Read full article</a></div></li>';
         }  elseif ($value->_embedded->{'wp:term'}[0][0]->id == 3 ){
             $html3.="<li><div class='post-main'><img src=".$value->_embedded->{'wp:featuredmedia'}[0]->source_url." class='post-images' width=350 height=250>";
             $html3.='<div class="marketing"><span>MARKETING</span><span class="min-read">5min Read</span></div>';
             $html3.='<h2>'.$value->title->rendered.'</h2>';
             $html3.='<div class="content-text"><p>'.$value->content->rendered.'</p></div>';
             $html3.='<a href="'.$value->link.'" class="read-more">Read full article</a></div></li>';
         }  elseif ($value->_embedded->{'wp:term'}[0][0]->id == 6 ){
             $html6.="<li><div class='post-main'><img src=".$value->_embedded->{'wp:featuredmedia'}[0]->source_url." class='post-images' width=350 height=250>";
             $html6.='<div class="marketing"><span>MARKETING</span><span class="min-read">5min Read</span></div>';
             $html6.='<h2>'.$value->title->rendered.'</h2>';
             $html6.='<div class="content-text"><p>'.$value->content->rendered.'</p></div>';
             $html6.='<a href="'.$value->link.'" class="read-more">Read full article</a></div></li>';
         }

            $html.="<li><div class='post-main'><img src=".$value->_embedded->{'wp:featuredmedia'}[0]->source_url." class='post-images' width=350 height=250>";
            $html.='<div class="marketing"><span>MARKETING</span><span class="min-read">5min Read</span></div>';
            $html.='<h2>'.$value->title->rendered.'</h2>';
            $html.='<div class="content-text"><p>'.$value->content->rendered.'</p></div>';
            $html.='<a href="'.$value->link.'" class="read-more">Read full article</a></div></li>';

            }
        ?>
    <ul id="paginated-list" data-current-page="1" aria-live="polite">
        echo $html;
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
include 'includes/footer.php'; ?>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/pagination.js"></script>
<script src="js/form.js"></script>