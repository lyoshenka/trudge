<?php

echo <<<END
<!doctype html>
<html><head>
  <meta charset="utf-8">
  <title>Down for a bit</title>
  <style type="text/css">
    body { padding: 50px 30px 30px; font: 20px Helvetica, sans-serif; color: #222; line-height: 1.4 }
    h1 { font-size: 40px; }
    article { text-align: left; max-width: 650px; margin: 0 auto; }
  </style>
</head><body>
  <article>
    <h1>We&rsquo;ll be back</h1>
    <p>
      Temporarily offline. Sorry for the inconvenience.
    </p>
    <p>&mdash; Grin</p>
  </article>
</body></html>
END;
die();

define('DS', DIRECTORY_SEPARATOR);

// load kirby
require(__DIR__ . DS . 'kirby' . DS . 'bootstrap.php');

// check for a custom site.php
if(file_exists(__DIR__ . DS . 'site.php')) {
  require(__DIR__ . DS . 'site.php');
} else {
  $kirby = kirby();
}

// render
echo $kirby->launch();
