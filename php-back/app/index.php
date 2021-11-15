<html>
 <head>
  <title>Current time(UTC)</title>
 </head>
 <body>
 <?php 
  date_default_timezone_set('UTC');
  echo date('l jS \of F Y h:i:s A');
 ?> 
 </body>
</html>
