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
        Email:
        <input type="email" name="email" id="">
        <br>
        Qualification:
        <select name="qualify" id="">
            <option value="BTech">BTech</option>
            <option value="BSC">BSC</option>
            <option value="BCom">BCom</option>
            <option value="MSC">MSC</option>
        </select>
        <br>
        Gender:
        <input type="radio" name="gender" id="" value="Male">Male
        <input type="radio" name="gender" id="" value="Female">Female
        <input type="radio" name="gender" id="" value="Other">Other
        <br>
        Skills:
        <input type="checkbox" name="skills" id="" value="C">C
        <input type="checkbox" name="skills" id="" value="Java">Java
        <input type="checkbox" name="skills" id="" value="Python">Python
        <input type="checkbox" name="skills" id="" value="JS">JS
        <br>
        Experience:
        <select name="experience" id="">
            <option value="0-1">0-1 years</option>
            <option value="1-3">1-3 years</option>
            <option value="3+">3+ years</option>
        </select>
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"]==="POST"){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $qualification = $_POST["qualify"];
    $gender = $_POST["gender"];
    $skills = $_POST["skills"];
    $experience = $_POST["experience"];

    echo "Myself $name , my email is $email and I am a $gender.I am qualified in $qualification.I have skills in $skills and $experience years of experience";
}


?>