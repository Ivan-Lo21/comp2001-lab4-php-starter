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

    <form action="agreement.php" method="GET">
        <p>Please choose if you accept our terms and conditions:</p>
        <div>
            <input type="radio" id="agree" name="agreement" value=true>
            <label for="agree">I Agree</label>
        </div>
        <div>
            <input type="radio" id="disagree" name="agreement" value=false>
            <label for="disagree">I Disagree</label>
        </div>
        <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>