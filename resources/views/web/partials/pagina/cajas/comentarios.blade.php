<?Php
$host= $_SERVER["HTTP_HOST"];
$url= $_SERVER["REQUEST_URI"];
?>
<!--comentarios facebook-->
<div id="fb-root"></div>
<script type="text/javascript">
var url = location.href;

    
</script>
<script>



    (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.10&appId=673664079511464";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>



<div class="fb-comments" data-href="<?php echo "http://" . $host . $url; ?>" data-width="100%" data-numposts="5" data-order-by="reverse_time"></div>

<!--fin comentarios facebook-->
  