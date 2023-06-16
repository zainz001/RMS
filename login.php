<?php
include('dbconnect.php') ?>
<!DOCTYPE html>
<html>

<head>
  <title>Railway Management System - Login</title>
  <link rel="stylesheet" href="style.css">
  
</head>


<body class="p1">
  <div class="container">
  
  <h2>Railway Management System</h2>
    <h3>login</h3>
    <form action="code.php" method="post">
      <input type="text" name="email" placeholder="Email" required>
      <input type="password" name="password" placeholder="Password" required>
      <select name="user_type" id="format">
        <option selected disabled>select as </option>
        <option value="admin">Admin</option>
        <option value="customer">Customer</option>
      </select>
      <input type="submit" name="login">
      <br>

      <div class="sign">
        <p>create a new account <a href="signup.php">signup</a></p>

      </div>

    </form>
  </div>

</body>


</html>