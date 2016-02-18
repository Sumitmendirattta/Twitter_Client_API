<!DOCTYPE html>
<html lang="en">
<head>
  <title>Twitter API</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>


<?php 

require 'twitteroauth/twitteroauth.php';
 error_reporting(0);
define('CONSUMER_KEY', '5A1NuRN1bzazI266FZdSWepIE');
define('CONSUMER_SECRET', 'ENKGldtDzJNCgEOkTa9fMZYPukjS7ZX7nXWUJHys1xq07kmb6n');
define('ACCESS_TOKEN', '457221746-ovTlfanqeKu9pAl4lHdEPy1llJgxEeHY0XhVrYwZ');
define('ACCESS_TOKEN_SECRET', 'uWPgUlcCQ4S7XGK25fky0TOPXbePxyHK3OsdJJHBfBZgo');

?>