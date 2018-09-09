<html lang="en">
<head>
    <title>Bootstrap 4 Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>


</head>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>FirstName</th>
            <th>LastName</th>
            <th>DathOfBirth</th>
            <th>Gender</th>
            <th>Address</th>
            <th>Email</th>
            <th>Tel</th>
            <th>Type</th>
            <th>Size</th>
        </tr>
    </thead>




<body>
<?php
include ('conn/mysqlcon.php');
$sql = "select * from userprofile";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0){?>
<!--    // output data of each row-->
    <tbody><?php
    while($row = mysqli_fetch_assoc($result)){?>
    <tr>
        <td><?php echo $row['userid'];?></td>
        <td><?php echo $row['firstname'];?></td>
        <td><?php echo $row['lastname'];?></td>
        <td><?php echo $row['dob'];?></td>
        <td><?php echo $row['gender'];?></td>
        <td><?php echo $row['address'];?></td>
        <td><?php echo $row['email'];?></td>
        <td><?php echo $row['tel'];?></td>
        <td><?php echo $row['type'];?><td>
        <td><?php echo $row['size'];?><td>
    </tr>
    <?php
    }?>
    </tbody><?php
}
else{
    echo '0 result';
}
mysqli_close($conn);

?>
</body>
</table>

</html>
