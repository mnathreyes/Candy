<?php
function create_logo()
{
    return '<img src="img/logo.png" alt="Logo">';
}

function create_copyright_notice()
{
    $year = date('Y');
    $message = '&copy; ' . $year . ' The Candy Store';
    return $message;
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Functions with Return Values</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <h1>The Candy Store</h1>
<h2>Function That Returns a Value</h2>
<p><?= create_logo() ?></p>
<p>Welcome to The Candy Store</p>
<p><?= create_logo() ?></p>
<p><?= create_copyright_notice() ?></p>
  </body>
</html>
