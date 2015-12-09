<?php wp_footer(); ?>

<?php 

    $whitelist = array(
    '127.0.0.1',
    '::1'
    );  

  if(in_array($_SERVER['REMOTE_ADDR'], $whitelist)){ ?>
    <script type='text/javascript' id="__bs_script__">//<![CDATA[
    document.write("<script async src='//HOST:3000/browser-sync/browser-sync-client.1.9.1.js'><\/script>".replace(/HOST/g, location.hostname).replace(/PORT/g, location.port));
//]]></script>
  <?php } ?>


</body>
</html>
