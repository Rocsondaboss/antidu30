<?php

    extract($_REQUEST);
    $file=fopen("anti-duterte-comments.txt","a");

    fwrite($file,"Date retrieved : ");
    fwrite($file, $dateRetrieved ."\n");

    fwrite($file,"Comment : ");
    fwrite($file, $comment ."\n");

    fwrite($file,"FB post link : ");
    fwrite($file, $fbplink ."\n");

    fwrite($file,"FB user link : ");
    fwrite($file, $fbulink ."\n");

    fwrite($file,"********************************************");
    fwrite($file, "\n");


    fclose($file);

 ?>


<!DOCTYPE html>
<html>
<body>

<title>The Anti-Duterte Comments Report</title>
<h1 style="text-align: center">The Anti-Duterte Comments Report</h1>



<form action="index.php" method="POST">
<label for="fname">Date retrieved:</label>
  <input type="date" id="dateRetrieved" name="dateRetrieved"><br><br>

  <label for="fname">Comment:</label>
  <textarea type="text" id="comment" name="comment"></textarea><br><br>

  <label for="lname">Facebook post link:</label>
  <input type="text" id="fbplink" name="fbplink"><br><br>

  <label for="lname">Facebook user link:</label>
  <input type="text" id="fbulink" name="fbulink"><br><br>



  <input type="submit" value="Submit">
</form>

</body>
</html>