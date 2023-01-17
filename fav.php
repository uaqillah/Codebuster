<?php
echo "<h1>My favourite</h1>";
echo "<br/>";
if(isset($_POST['submit'])){
if(!empty($_POST['check_list'])) {

foreach($_POST['check_list'] as $selected) {


echo "<p>".$selected ."</p>";
if($selected == 'Sunset Cruise'){
    echo '<img class="img" src="https://image.kkday.com/v2/image/get/w_960%2Cc_fit%2Cq_55%2Ct_webp/s1.kkday.com/product_132460/20220822065654_m5yKV/jpg"  width="210" height="180">';
}
else if($selected == 'Mangrove Tour'){
    echo '<img class="img" src="https://www.langkawi-insight.com/langkawi_i00001e.jpg"  width="200" height="180">';
}
else if($selected == 'Island Hopping'){
    echo '<img class="img" src="https://tourslangkawi.com/wp-content/uploads/2021/10/Island-Hopping-Langkawi-04-1-300x300.jpg"  width="200" height="180">';
}
}

}
}
?>