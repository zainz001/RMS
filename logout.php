<?php
session_start();
session_unset();
session_destroy();
?>


<body>
    <h2>LOGGED OUT</h2>
    <?PHP echo header('location:login.php');
    ?>
</body>