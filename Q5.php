<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        Name:
        <input type="text" name="name" id="">
        <br>
        Age:
        <input type="number" name="age" id="">
        <br>
        Gender:
        <input type="radio" name="gender" id="" value="Male">Male
        <input type="radio" name="gender" id="" value="Female">Female
        <input type="radio" name="gender" id="" value="Other">Other
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php
    if($_SERVER["REQUEST_METHOD"]==="POST"){
        $name = $_POST["name"];
        $age = $_POST["age"];
        $gender = $_POST["gender"];
        echo "Hello, $name ,You are $age years old and identify as $gender.";
    }

?>