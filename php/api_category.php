<?php
$curl=curl_init();
curl_setopt($curl,CURLOPT_URL,'https://rosins-dev.digiqal.de/wp-json/wp/v2/categories');
curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,false);
curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);

$result=curl_exec($curl);
$cat=json_decode($result);
?>
    <div class="category-names">
        <ul><li>All</li>
            <?php
            foreach($cat as $value){

                $category='<li>'.$value->{'name'}.'</li>';
                echo $category;
            }
            ?>
        </ul>
    </div>
<?php
curl_close($curl);