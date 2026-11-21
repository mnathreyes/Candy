<?php
function write_logo()
{
    echo '<img src="img/logo.png" alt="Logo">';
}

function write_copyright_notice()
{
    $year = date('Y');
    echo '&copy; ' . $year . ' The Candy Store';
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Basic Functions</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <h1>The Candy Store</h1>
<h2>Basic Functions</h2>
<p><?php write_logo(); ?></p>
<p>Welcome to The Candy Store</p>
<p><?php write_logo(); ?></p>
<p><?php write_copyright_notice(); ?></p>
  </body>
</html>
