<!DOCTYPE html>
<html>
<head>
	<title> Photographs | Pixels</title>
	<link rel="stylesheet" type="text/css" href="styleImagePage.css">
</head>
<body>


<h2 > PIXELS </h2>


<hr>
<?php
   require_once('./conn.php'); 
   $stmt= $conn->prepare("SELECT img FROM image_table");
   $stmt->execute();
    echo "<ul>";
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      echo '<li><img src="data:image/jpeg;base64,'.base64_encode($row['img'] ).'" height="280" width="280" " /></li>';
     
    }
    echo "</ul>";
 ?>
  
  
</body>
</html>