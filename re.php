<?php
$pixel_id = "";

if (isset($_GET['url'])) 
{
    $page = <<<EOT
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta property="og:url" content="{url}">
  <script>
  !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
  n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
  document,'script','https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '{pixel}'); 
  fbq('track', 'PageView');
  </script>
  <script> setTimeout(function() { window.location='{url}' }, 500);
  </script>
  <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id={pixel}&ev=PageView&noscript=1"/></noscript>
</head>
<body>
<noscript>Redirecting to <a href="{url}">{url}</a></noscript>
</body>
</html>
EOT;
    $page = str_replace('{url}', $_GET['url'], $page);
    $page = str_replace('{pixel}', $pixel_id, $page);
    echo $page;
}
?>