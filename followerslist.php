 <html>
<body>

<form action="followerslist.php" method="GET">
<div class="form-group">
Write Tweet to POST: <input type="text" class="form-control" name="name">
</div><br>

<input type="submit">
</form>

</body>
</html>



<?php
 
require 'define.php';
 
 $toa = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, ACCESS_TOKEN, ACCESS_TOKEN_SECRET);

 
$timeline = $toa->post("statuses/update", array("status" => $_GET["name"]))
 ?>

 <body>
 <table class="table table-striped">
  


<?php  
{ ?>

<tr> 
<td>
</td>
<td>
   </td></tr>
 </tr>

<?php
}
?>

  
  </table>
</div>

</body>
</html>

      
