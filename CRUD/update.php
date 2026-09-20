
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
        Salary:
        <input type="number" name="sal" id="">
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php
    include 'db.php';

    if($_SERVER["REQUEST_METHOD"]==="POST"){
        $email = $_POST["email"];
        $salary = $_POST["sal"];

        $sql = $conn -> prepare("update employee set salary=? where email=?");
        $sql -> bind_param("is",$salary,$email);
        if($sql -> execute()){
            echo "Updated";
        }
    }

?>