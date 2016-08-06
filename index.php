<?php require('admin/config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Content By Pesce</title>
<link href="<?php echo $BaseURL ?>/js/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background-color:#E2E2E2 !important">
<div class="container" style="background-color:#FFF">
  <p />
  <div class="media">
    <div class="media-left"> <a href="#"> <img class="media-object" src="<?php echo $BaseURL ?>/images/cbp.png" width="100px"> </a> </div>
    <div class="media-body">
      <h1>Content By Pesce</h1>
      <h4>Demo</h4>
    </div>
  </div>
  <p align="justify">CBP is a quick way to set up a basic website using <a href="https://www.tinymce.com/" target="new">TinyMCE</a> and basic file management. It is useful for creating a static site while allowing non technical folks to add/modify content. Specifically this was designed to have a static introduction area, and maintain a running list which would be updated frequently by clerical staff. <br>
  </p>
  <p align="justify">The requirements were:</p>
  <ul>
    <li> Non &quot;Dynamic&quot; </li>
    <li>No Database </li>
    <li> Small </li>
    <li> Easy to use</li>
    <li> Mobile Friendly</li>
    <li>Cheap</li>
  </ul>
  <p>Nullam sagittis neque ut erat interdum, ac volutpat nisi porttitor. Morbi non posuere tellus. Nam semper bibendum mi. Etiam vitae nulla sed felis finibus auctor quis quis ipsum. Nunc varius arcu vitae interdum finibus. Nam tempor ante eu est bibendum, quis pharetra purus sodales. Morbi sollicitudin dapibus nunc nec luctus. In nec mi egestas, interdum massa et, iaculis arcu. Etiam consectetur orci vel pulvinar sodales. Fusce ultricies hendrerit enim et sollicitudin. Vivamus venenatis tincidunt velit vel placerat. Donec tincidunt tellus elit, sed maximus libero ullamcorper vitae. Curabitur quis neque justo. Aliquam dignissim iaculis tincidunt. Ut leo nisl, ultrices facilisis lorem in, sagittis sagittis dolor.</p>
  <p align="justify">Fusce in magna quis magna euismod posuere sed et eros. Praesent rutrum nibh ipsum, vitae convallis velit efficitur et. Ut tortor leo, interdum non tempus id, placerat at erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec blandit enim id molestie vehicula. Donec aliquet sapien sodales diam egestas imperdiet. Fusce et ipsum volutpat, laoreet mi eu, viverra nisl. Sed placerat vestibulum velit, vitae cursus leo facilisis nec. Phasellus volutpat cursus tristique. Fusce vitae diam imperdiet enim consectetur iaculis non sed arcu. Vestibulum eu tincidunt mauris. Morbi porta lectus ac eleifend semper. Sed cursus, mauris ut finibus cursus, justo urna rutrum mi, eget lacinia massa lorem vitae purus. Suspendisse ut consectetur erat, nec ullamcorper sapien. Sed non porta quam, vitae interdum nunc. Suspendisse in nunc sapien.</p>
  <h3 class="text-center">User Generated Content Below</h3>
  <hr />
  <?php include('admin/content.html'); ?>
</div>
</body>
</html>
<script src="<?php echo $BaseURL ?>/js/jquery/jquery.min.js"></script>
<script src="<?php echo $BaseURL ?>/js/bootstrap/js/bootstrap.min.js"></script>