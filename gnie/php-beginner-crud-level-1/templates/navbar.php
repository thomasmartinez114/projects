<?php

// Site File Name
$fileName = basename(__FILE__);
// echo $fileName;
$trim = preg_replace('/.php/', '', $fileName);
echo $trim;

// if ($trim = "CA") {
//   echo "Canada";
// } elseif ($trim = "CL") {
//   echo "Chile";
// } else {
//   echo "Null";
// }


?>

<!-- <nav class="navbar navbar-light bg-light">
    <a href="../../index.php" class="navbar-brand"><img src="../../images/GNIEDirect_logo.png" alt="IGT Logo"
            class="navbar-logo" /></a>
    <h3 class="title">United States - <?php echo ucfirst($trim) ?></h3>
</nav> -->