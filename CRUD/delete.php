
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
        <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php
    include 'db.php';

    if($_SERVER["REQUEST_METHOD"]==="POST"){
        $email = $_POST["email"];

        $sql = $conn -> prepare("delete from employee where email=?");
        $sql -> bind_param("s",$email);
        if($sql -> execute()){
            echo "Deleted";
        }
    }

?>