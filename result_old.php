<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>ทดสอบ html</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        /* Style the header */
        header {
            background-color: #535353;
            padding: 30px;
            text-align: center;
            font-size: 35px;
            color: white;
        }

        /* Create two columns/boxes that floats next to each other */
        nav {
            float: left;
            width: 30%;
            height: 500px; /* only for demonstration, should be removed */
            background: #007a6d;
            padding: 20px;
        }

        /* Style the list inside the menu */
        nav ul {
            list-style-type: none;
            padding: 0;
        }

        article {
            float: left;
            padding: 20px;
            width: 70%;
            background-color: #eea31f;
            height: 500px; /* only for demonstration, should be removed */
        }

        /* Clear floats after the columns */
        section:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Style the footer */
        footer {
            background-color: #777;
            padding: 10px;
            text-align: center;
            color: white;
        }

        /* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
        @media (max-width: 600px) {
            nav, article {
                width: 100%;
                height: auto;
            }
        }
    </style>
</head>

<body>

<header>
    <h1><u>Run for Tudtuu</u></h1>
</header>
<section>
    <nav>
        <br><br>
        <img src="https://upload.wikimedia.org/wikipedia/th/thumb/f/fd/Silpakorn_University_Logo.png/1200px-Silpakorn_University_Logo.png" alt="HTML tutorial" align="middle" style="width:400px;height:400px;border:0">
        <!--<ul>-->
        <!--<a href="https://www.cp.su.ac.th/" target="_blank"><li><h3>ภาควิชาคอมพิวเตอร์</h3></li></a>-->
        <!--<br>-->
        <!--<a href="https://www.su.ac.th/" target="_blank"><li><h3>มหาวิทยาลัยศิลปากร</h3></li></a>-->
        <!--<br>-->
        <!--<a href="http://www.math.sc.su.ac.th/web3/" target="_blank"><li><h3>ภาควิชาคณิตศาสตร์</h3>์</li></a>-->
        <!--<br>-->
        <!--</ul>-->
    </nav>

    <article>
<?php
include ('conn/mysqlcon.php');

// define variables and set to empty values
$firstname = $lastname = $DOB = $gender = $address = $email = $tel = $type = $size= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $firstname = test_input($_POST["firstname"]);
  $lastname = test_input($_POST["lastname"]);
  $DOB = test_input($_POST["dob"]);
  $gender = test_input($_POST["gender"]);
  $address = test_input($_POST["address"]);
  $email = test_input($_POST["E-mail"]);
  $tel = test_input($_POST["tel"]);
  $type = test_input($_POST["type"]);
  $size = test_input($_POST["size"]);

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

echo $firstname;echo '<br>';
echo $lastname;echo '<br>';
echo $DOB;echo '<br>';
echo $gender ;echo '<br>';
echo $address ;echo '<br>';
echo $email ;echo '<br>';
echo $tel;echo '<br>';
echo $type;echo '<br>';
echo $size;echo '<br>';

//insert data
$sql = "INSERT INTO userprofile (firstname, lastname, dob, gender, address, email, tel, type, size) 
VALUES ('$firstname', '$lastname', '$DOB', '$gender', '$address', '$email', '$tel', '$type', '$size')";

//echo $sql."<br>";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
        <br>
        <a href="report.php." class="btn btn-info">Report</a>
    </article>
</section>
<!---->



</body>

</html>
