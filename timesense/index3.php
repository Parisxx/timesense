<?php
include('include/conn.php');



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style2.css">
    <title>Document</title>
</head>
<body>
  <?php
    $sql = "SELECT country, goals FROM (SELECT * FROM match_1 UNION ALL SELECT * FROM match_2 UNION ALL SELECT * FROM match_3 UNION ALL SELECT * FROM match_4 UNION ALL SELECT * FROM match_5 UNION ALL SELECT * FROM match_6 UNION ALL SELECT * FROM match_7 UNION ALL SELECT * FROM match_8) AS l LIMIT 4";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)) {
      echo "<table>";
      echo "<tr>";
      if($row['country'] == "Croatia"){
      echo "<td style='text-align: left;' class='countries'>" . "<span class='fi fi-hr'></span>" . $row['country'] . "</td>";
      }
      echo "</tr>";
      echo "<tr>";
      if($row['country'] == "Brazil"){
      echo "<td style='text-align: left;' class='countries'>" . "<span class='fi fi-hr'></span>" . $row['country'] . "</td>";
      }
      echo "</tr>";


      echo "<tr>";
      if($row['country'] == "Netherlands"){
      echo "<td style='text-align: left;' class='countries'>" . "<span class='fi fi-hr'></span>" . $row['country'] . "</td>";
      }
      echo "</tr>";
      echo "<tr>";
      if($row['country'] == "Argentina"){
      echo "<td style='text-align: left;' class='countries'>" . "<span class='fi fi-hr'></span>" . $row['country'] . "</td>";
      }
      echo "</tr>";
      echo "</table>";

    
    }
  ?>
</body>
</html>