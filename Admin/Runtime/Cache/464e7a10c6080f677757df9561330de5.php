<?php if (!defined('THINK_PATH')) exit(); ?>
 <!doctype html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 	<script src="__ROOT__/Public/JS/jquery.min.js"></script>
 </head>
 <body>
 	<button>tijiao</button>
 </body>
 <script>
  // console.log($);
  $.getJSON("/kuanjia/Admin/Tpl/Admin/test_receive.php", function(json){
    alert(json[0]["Name"]);
  });
 </script>
 </html>