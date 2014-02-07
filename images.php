<?php
   define('PAGE_ID', '0000000000000');
   define('APP_ID','');
   define('APP_SECRET','');
   include("phpcUrl.php");
   $face = new FacePageAlbum(PAGE_ID, $_GET['aid'], $_GET['aurl'], APP_ID, APP_SECRET);
?>
