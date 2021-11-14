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
<p>Greetings
    <?php
        $customer_name = $_POST["customerName"];
        echo $customer_name;
    ?>
</p>
<p>
    Your contact details are :
    <?php
        $postcode = $_POST["postcode"];
        echo "Postcode: $postcode\n";
        if (!empty($_POST["email"])) {
            $email = $_POST["email"];
            echo "Email: $email";
        }
    ?>
</p>


</body>
</html>