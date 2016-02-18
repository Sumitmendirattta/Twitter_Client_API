<html>
<body>

<form action="searchtweetsbyhashtag.php" method="GET">
<div class="form-group">
Enter Twitter ID: <input type="text" class="form-control" name="name">
</div><br>

<input type="submit">
</form>

</body>
</html>


<?php
error_reporting(0);
require 'define.php';

$query = array(
  "q" => "@".$_GET["name"],
  "result_type" => "popular"
);

$autho = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, ACCESS_TOKEN, ACCESS_TOKEN_SECRET);
 
$alldata = $autho->get('search/tweets', $query);?>
  <body>
 <table class="table table-striped">
  
 <thead>
      <tr>
        <th>Index</th>
        <th align="centre">Follower Tweets</th>
        
      </tr>
    </thead>

<?php
foreach ($alldata->statuses as $result) { ?>
  <tr> 

<td>
 <?php echo $result->user->screen_name . ": " ?></td>
<td>
   <?php echo $result->text . "<br>";
?></td></tr>
 </tr>

<?php
}
?>
  
</div>

</body>
</html>