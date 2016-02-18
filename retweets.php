<?php
 
require 'define.php';
 
$toa = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, ACCESS_TOKEN, ACCESS_TOKEN_SECRET);
 

 
$timeline = $toa->get('statuses/retweets_of_me');


 ?>

 <body>
 <table class="table table-striped">
  
 <thead>
      <tr>
        <th>Index</th>
        <th align="centre">Re-Tweets</th>
        
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

      
