<?php
include("connection.php");
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
       <form id="form">
        <h1>Login Here</h1>
        <input type="text" id="username" placeholder="Enter Username" autofocus><br><br>
        <input type="password" id="password" placeholder="Enter Password" autofocus ><br>
        <button type="submit">Login</button><br>
        <div class="links">
        <a href="./Register/index.html">Register Here</a><br>
        <a href="./Resetpassword/index.html"> Reset</a>
    </div>
       </form>
    </div>
    <script src="script.js"></script>
</body>
</html>