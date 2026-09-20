<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        Email:
        <input type="email" name="email" id="">
        <br>
        Password:
        <input type="password" name="pass" id="">
        <br>
        Subscribe:
        <input type="checkbox" name="subscribe" id="">Yes
        <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php
    if($_SERVER["REQUEST_METHOD"]==="POST"){
        $email = $_POST["email"];
        $pass = $_POST["pass"];
        $subscribe = isset($_POST["subscribe"])?"Yes Subcribed":"Not Subcribed";

        echo "Thank you for signing up ,$email. You have $subscribe to the newsletter.";
    }

?>