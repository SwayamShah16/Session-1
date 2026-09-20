
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
        Phone:
        <input type="number" name="phone" id="">
        <br>
        Department:
        <input type="text" name="dept" id="">
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
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $dept = $_POST["dept"];
        $salary = $_POST["sal"];

        $sql = $conn -> prepare("insert into employee values (?,?,?,?,?)");
        $sql -> bind_param("ssssi",$name,$email,$phone,$dept,$salary);
        if($sql -> execute()){
            echo "Inserted";
        }
    }

?>