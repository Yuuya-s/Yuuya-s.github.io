<?php
  include("connect.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <form id="form" action="index.php" method="POST">
     <h1>Registration</h1>
     <input type="text" id="first" placeholder="Firstname" autofocus ><br><br>
     <input type="text" id="second" placeholder="Secondname" autofocus ><br><br>
     <input type="tel" id="phone" placeholder="Phonenumber" autofocus><br><br>
     <input type="email" id="email" placeholder="Email" autofocus ><br><br>
     <input type="password" id="pass" placeholder="Enter Password" autofocus autocomplete><br><br>
     <input type="password" id="passw" placeholder="Confirm Password" autofocus autocomplete><br><br>
     <button type="submit">Register</button>
     <a href="../index.html">Login Here</a>
    </form>
 </div>
    <script src="script.js"></script>
</body>
</html>