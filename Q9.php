<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Register with Us</h2>

    <form action="" method="POST">
        Full Name:
        <input type="text" name ="name">
        <br>
        Email:
        <input type="text" name="email" id="">
        <br>
        Password:
        <input type="password" name="pass" id="">
        <br>
        Confirm Password:
        <input type="password" name = "cpass"> 
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php

    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["pass"];
        $conpass = $_POST["cpass"];

        if(empty($name)){
            echo "<script>alert('Name is Required')</script>";
        }

        if($pass != $conpass){
            echo "<script>alert('Passwords dont match')</script>";
        }

        if(! filter_var($email,FILTER_VALIDATE_EMAIL)){
            echo "<script>alert('Email is not in valid format')</script>"
        }
    }

?>
