

<?php
 
require 'define.php';
 
$toa = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, ACCESS_TOKEN, ACCESS_TOKEN_SECRET);
 
$user = 'mikyajumbo';
 
$timeline = $toa->get('statuses/user_timeline', array('screen_name' => $user));
 ?>

 <body>
 <table class="table table-striped">
  
 <thead>
      <tr>
        <th>Index</th>
        <th align="centre">Tweets</th>
        
      </tr>
    </thead>

<?php foreach ($timeline as $i => $tweet)  
{ ?>

<tr> 
<td>
<?php echo "$i" ?></td>
<td>
   <?php echo " $tweet->text" . PHP_EOL ."<br>";?></td></tr>
 </tr>

<?php
}
?>

  
  </table>
</div>

</body>
</html>

      
