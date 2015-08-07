<!DOCTYPE html>
<html>
<head>
  <title>Hackers Dilemma</title>

  <meta property="og:title" content="Hackers Dilemma"/>
  <meta property="og:image" content="http://hackersdilemma.com/pupi/assets/img/facebook.jpg"/>
  <meta property="og:site_name" content="Hackers Dilemma"/>
  <meta property="og:url" content="http://hackersdilemma.com" >
  <meta property="og:description" content=""/>
  <meta property="og:type" content="website" />

  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-39352206-19', 'auto');
    ga('send', 'pageview');
  </script>
</head>
<body>

<?php 
  $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  $index_of = parse_url($url, PHP_URL_PATH);
?>

<h1>Index of <?php echo $index_of; ?></h1>

