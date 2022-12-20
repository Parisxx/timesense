<?php
include('include/conn.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php 

// $sql1 = 'SELECT p.letter, c.name FROM `country_poule` cp LEFT JOIN countries c ON cp.country_id = c.id LEFT JOIN poule p ON cp.poule_id = p.id';

// $q = mysqli_query($conn, $sql1);

// // Lijst uit DB
// $poules  = mysqli_fetch_all($q);


// $geordend = [];

// foreach($poules as $poule) {

    
//     $geordend[$poule[0]][] = $poule[1];
// }



// ?>

// <?php foreach($geordend as $key => $poule): ?>
//     <div>
//         <h1>Poule <?= $key; ?></h1>
//         <ul>
//             <?php foreach($poule as $country): ?>
//                 <li><?= $key; ?> <?= $country; ?></li>
//             <?php endforeach; ?>
//         </ul>
//     </div>
// <?php endforeach; ?>



</body>
</html>

