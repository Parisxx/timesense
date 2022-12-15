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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css"/>
    <link href="https://site-assets.fontawesome.com/releases/v6.2.0/css/all.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
  
<div class="main-container">



  <div class="left-main">
  <nav>
  <div class="nav-icon">
    <i class="fa-regular fa-bars" style="color: #FFF; font-size: 25px;"></i>
    </div>
    <ul class="nav-links">
      <li><a href="" style="color: #7DF48C;  border-bottom: 3px solid #7DF48C;">HOME</a></li>
      <li><a href="">SCHEDULE</a></li>
      <li><a href="">GROUPS</a></li>
      <li><a href="">TEAMS</a></li>
      <li><a href="">STORE</a></li>
    </ul>
  </nav>

  <div class="timer-container">
  <p style="margin-right: 10px">Until next match: </p><p id="demo"></p>

<script>
// Set the date we're counting down to
var countDownDate = new Date("Dec 18, 2022 16:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>
</div>

  <div class="main-news">
    <div class="right-align">
    <div class="news-title"><h1>France beats Marocco in the latest World Cup Match</h1></div>
    <div class="news-nav">
      <button type="submit"><i class="fa-solid fa-arrow-right"></i></button>
    </div>
    </div>
  </div>

</div>


<div class="right-main">
<nav>
    <ul class="nav-links nav2" style="gap: 2em;">
      <li><a href="" style="color: #7DF48C;  border-bottom: 3px solid #7DF48C;">UPCOMING</a></li>
      <li><a href="">RESULTS</a></li>
    </ul>
  </nav>




<div class="table-container">
  <div class="scroll">
<table>
    <tr>
        <td class="spacing"></td>
    </tr>
  <?php
    $sql = "SELECT country, goals FROM match_1";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)) {
      echo "<tr>";
      if($row['country'] == "Croatia"){
      echo "<td style='text-align: left;' class='countries'>" . "<span class='fi fi-hr'></span>" . $row['country'] . "</td>";
      }
      if($row['country'] == "Brazil"){
      echo "<td style='text-align: left;' class='countries'>" . "<span class='fi fi-br'></span>" . $row['country'] . "</td>";
      }
      echo "<td style='text-align: right; padding-right: 20px;' class='countries'>" . $row['goals'] . "</td>";
      echo "</tr>";
    }
  ?>
  <tr>
    <tr>
         <td><div class="line"> </div></td>
    </tr>
    <td class="details"><h2>Fri 9-12</h2>
    <h3>Quarter Final</h3>
    </td>
  </tr>
</table>

<table>
    <tr>
        <td class="spacing"></td>
    </tr>
  <?php
    $sql = "SELECT country, goals FROM match_2";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)) {
      echo "<tr>";
      if($row['country'] == "Netherlands"){
      echo "<td style='text-align: left;' class='countries'>" . "<span class='fi fi-nl'></span>" . $row['country'] . "</td>";
      }
      if($row['country'] == "Argentina"){
      echo "<td style='text-align: left;' class='countries'>" . "<span class='fi fi-ar'></span>" . $row['country'] . "</td>";
      }
      echo "<td style='text-align: right; padding-right: 20px;' class='countries'>" . $row['goals'] . "</td>";
      echo "</tr>";
    }
  ?>
  <tr>
    <tr>
         <td><div class="line"> </div></td>
    </tr>
    <td class="details"><h2>Fri 9-12</h2>
    <h3>Quarter Final</h3>
    </td>
  </tr>
</table>

<table>
    <tr>
    <td class="spacing"></td>
    </tr>
  <?php
    $sql = "SELECT country, goals FROM match_3";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)) {
      echo "<tr>";
      if($row['country'] == "Morocco"){
      echo "<td style='text-align: left;' class='countries'>" . "<span class='fi fi-ma'></span>" . $row['country'] . "</td>";
      }
      if($row['country'] == "Portugal"){
      echo "<td style='text-align: left;' class='countries'>" . "<span class='fi fi-pt'></span>" . $row['country'] . "</td>";
      }
      echo "<td style='text-align: right; padding-right: 20px;' class='countries'>" . $row['goals'] . "</td>";
      echo "</tr>";
    }
  ?>
  <tr>
    <tr>
         <td><div class="line"> </div></td>
    </tr>
    <td class="details"><h2>Sat 10-12</h2>
    <h3>Quarter Final</h3>
    </td>
  </tr>
</table>

<table>
    <tr>
    <td class="spacing"></td>
    </tr>
  <?php
    $sql = "SELECT country, goals FROM match_4";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)) {
      echo "<tr>";
      if($row['country'] == "England"){
      echo "<td style='text-align: left;' class='countries'>" . "<span class='fi gb-eng'></span>" . $row['country'] . "</td>";
      }
      if($row['country'] == "France"){
      echo "<td style='text-align: left;' class='countries'>" . "<span class='fi fi-fr'></span>" . $row['country'] . "</td>";
      }
      echo "<td style='text-align: right; padding-right: 20px;' class='countries'>" . $row['goals'] . "</td>";
      echo "</tr>";
    }
  ?>
  <tr>
    <tr>
         <td><div class="line"> </div></td>
    </tr>
    <td class="details"><h2>Sat 10-12</h2>
    <h3>Quarter Final</h3>
    </td>
  </tr>
</table>

<table>
    <tr>
      <td class="spacing"></td>
    </tr>
  <?php
    $sql = "SELECT country, goals FROM match_5";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)) {
      echo "<tr>";
      if($row['country'] == "Argentina"){
      echo "<td style='text-align: left;' class='countries'>" . "<span class='fi fi-ar'></span>" . $row['country'] . "</td>";
      }
      if($row['country'] == "Croatia"){
      echo "<td style='text-align: left;' class='countries'>" . "<span class='fi fi-hr'></span>" . $row['country'] . "</td>";
      }
      echo "<td style='text-align: right; padding-right: 20px;' class='countries'>" . $row['goals'] . "</td>";
      echo "</tr>";
    }
  ?>
  <tr>
    <tr>
         <td><div class="line"> </div></td>
    </tr>
    <td class="details"><h2>Sat 10-12</h2>
    <h3>Quarter Final</h3>
    </td>
  </tr>
</table>

<table>
    <tr>
      <td class="spacing"></td>
    </tr>
  <?php
    $sql = "SELECT country, goals FROM match_6";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)) {
      echo "<tr>";
      if($row['country'] == "France"){
      echo "<td style='text-align: left;' class='countries'>" . "<span class='fi fi-fr'></span>" . $row['country'] . "</td>";
      }
      if($row['country'] == "Morocco"){
      echo "<td style='text-align: left;' class='countries'>" . "<span class='fi fi-ma'></span>" . $row['country'] . "</td>";
      }
      echo "<td style='text-align: right; padding-right: 20px;' class='countries'>" . $row['goals'] . "</td>";
      echo "</tr>";
    }
  ?>
  <tr>
    <tr>
         <td><div class="line"> </div></td>
    </tr>
    <td class="details"><h2>Sat 10-12</h2>
    <h3>Quarter Final</h3>
    </td>
  </tr>
</table>

<table>
    <tr>
      <td class="spacing"></td>
    </tr>
  <?php
    $sql = "SELECT country, goals FROM match_7";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)) {
      echo "<tr>";
      if($row['country'] == "Croatia"){
      echo "<td style='text-align: left;' class='countries'>" . "<span class='fi fi-hr'></span>" . $row['country'] . "</td>";
      }
      if($row['country'] == "Morocco"){
      echo "<td style='text-align: left;' class='countries'>" . "<span class='fi fi-ma'></span>" . $row['country'] . "</td>";
      }
      echo "<td style='text-align: right; padding-right: 20px;' class='countries'>" . $row['goals'] . "</td>";
      echo "</tr>";
    }
  ?>
  <tr>
    <tr>
         <td><div class="line"> </div></td>
    </tr>
    <td class="details"><h2>Sat 10-12</h2>
    <h3>Quarter Final</h3>
    </td>
  </tr>
</table>

<table>
    <tr>
      <td class="spacing"></td>
    </tr>
  <?php
    $sql = "SELECT country, goals FROM match_8";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)) {
      echo "<tr>";
      if($row['country'] == "Argentina"){
      echo "<td style='text-align: left;' class='countries'>" . "<span class='fi fi-ar'></span>" . $row['country'] . "</td>";
      }
      if($row['country'] == "France"){
      echo "<td style='text-align: left;' class='countries'>" . "<span class='fi fi-fr'></span>" . $row['country'] . "</td>";
      }
      echo "<td style='text-align: right; padding-right: 20px;' class='countries'>" . $row['goals'] . "</td>";
      echo "</tr>";
    }
  ?>
  <tr>
    <tr>
        <td><div class="line"></div></td>
    </tr>
    <td class="details"><h2>Sat 10-12</h2>
    <h3>Quarter Final</h3>
    </td>
  </tr>
</table>
</div>
</div>
</div>
</div>







</body>
</html>