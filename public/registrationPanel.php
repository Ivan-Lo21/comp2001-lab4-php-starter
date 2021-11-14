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
<p>Welcome to this fictional stationery application page created for ISAD251 example. To continue please accept our terms and conditions.</p>

<form action="registrationResult.php" method="POST">
    <p>Please choose if you accept our terms and conditions:</p>
    <div>
        <label for="customerName">Customer Name*:</label>
        <input type="text" id="customerName" name="customerName" required>
    </div>
    <div>
        <label for="postcode">Postcode*:</label>
        <input type="text" id="postcode" name="postcode" required>
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
    </div>
    <br>
    <input type="submit" value="Submit">
</form>
</body>
</html>