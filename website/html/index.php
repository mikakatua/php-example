<?php
$sitename = getenv('SITE_NAME');
$bannercolor = getenv('BANNER_COLOR');
date_default_timezone_set(getenv('TIME_ZONE'));
?>
<!DOCTYPE html>
<html>
<head>
<title>Test Page</title>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

h1 {
  text-align: center;
  background-color: <?php echo $bannercolor; ?>;
}
</style>
</head>
<body>
<h1><?php echo $sitename; ?></h1>
<p>Server and execution environment information:</p>
<?php
highlight_string("\$_ENV =\n" . var_export($_ENV, true) . ";\n");
highlight_string("\n\$_SERVER =\n" . var_export($_SERVER, true) . ";\n");
echo '<hr>';
echo '<i>'.date(DATE_RSS).'</i>';
?>
</body>
</html>
