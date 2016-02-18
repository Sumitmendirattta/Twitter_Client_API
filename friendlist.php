<?php
 
require 'define.php';
 
$toa = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, ACCESS_TOKEN, ACCESS_TOKEN_SECRET);
 

 
$timeline = $toa->get('friends/list');
 ?>

 <body>
 <table class="table table-striped">
  
 <thead>
      <tr>
        <th>Index</th>
        <th align="centre">Friends List</th>
        
      </tr>
    </thead>

<?php 
$t=0;
foreach ($timeline->users as $tweet)  
{ ?>

<tr> 

<td>
	<?php	echo $t; ?>
	</td>
<td>


<?php 
print_r($tweet->name);

$t++;
?></td>


<?php
}
?>

  
  </table>
</div>

</body>
</html>

      
