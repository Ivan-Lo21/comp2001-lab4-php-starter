<!DOCTYPE html>
<html>


<?php

include_once('header.php');

include_once('footer.php');
?>
<body class="bginfo">
<div class="container-fluid col-md-10 offset-md-1"></div>
<div class="row"></div>
<div class="card mt-3 px-2 py-2"></div>

<h1>Stationery Application</h1>
<p>Welcome. You have selected
    <?php if (isset($_GET["agreement"]))
        if(($_GET["agreement"]) == "true") {
            echo "AGREE";
        } else
            echo "DISAGREE";
    ?>
    for the agreement.
</p>



</body>
</html>