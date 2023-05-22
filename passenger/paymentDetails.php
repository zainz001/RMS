<?php
session_start();
include('../dbconnect.php');
include('../head.php');
?>


<body>
    <form action="addpaydetail.php" method="post">
        <label for="cardnum">Card Number</label>
        <input type="number" name="cardnum" id="cardnum"> <br>
        <select name="cardtype" id="cardtype">
            <option value="master">Master</option>
            <option value="Union">Union</option>
            <option value="Visa">Visa</option>
            <option value="Paypal">Paypal</option>
        </select><br>
        <button class="btn btn-success" type="submit" name="addpayment">Add payment</button>
    </form>
</body>