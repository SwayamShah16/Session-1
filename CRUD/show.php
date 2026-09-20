<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="show.css">
</head>
<body>
    <?php
        include 'db.php';
        $result = $conn -> query("select * from employee");
    ?>
    <table border="1">
        <tr>
            <td>Name</td>
            <td>Email</td>
            <td>Phone</td>
            <td>Department</td>
            <td>Salary</td>
        </tr>

        <?php
            while($row = $result -> fetch_assoc()){
        ?>
        <tr>
            <td><?php echo $row["e_name"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
            <td><?php echo $row["phone"]; ?></td>
            <td><?php echo $row["dept"]; ?></td>
            <td><?php echo $row["salary"]; ?></td>
        </tr>

        <?php } ?>
</body>
</html>

