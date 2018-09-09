<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Home</title>
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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
    <header>
        <h1><u>Run for Tudtuu</u></h1>
    </header>
    <section>
        <nav>
            <br><br>
            <ul>
<!--                <div class="container">-->
<!--                    <div class="btn-group">-->
<!--                        <button type="button" class="btn btn-primary">Apple</button>-->
<!--                        <button type="button" class="btn btn-primary">Samsung</button>-->
<!--                        <button type="button" class="btn btn-primary">Sony</button>-->
<!--                    </div>-->
<!--                </div>-->
            <a href="test.html" class="btn btn-primary" target="_blank"><li><h5>สมัครวิ่ง</h5></li></a>
            <br><br>
            <a href="https://www.su.ac.th/" class="btn btn-primary" target="_blank"><li><h5>ตรวจสอบ BIB</h5></li></a>
            <br><br>
            <a href="http://www.math.sc.su.ac.th/web3/" class="btn btn-primary" target="_blank"><li><h5>ดูแผนที่เส้นทางวิ่ง</h5></li></a>
            <br><br>
            </ul>
        </nav>

<!--        <article>-->
<!--            <h3><b>Register</b></h3>-->
<!--            <form method="POST" action="result_old.php">-->
<!--                First name : <input type="text" name="firstname"><br><br>-->
<!--                Last name  : <input type="text" name="lastname"><br><br>-->
<!--                Date of Birth : <input type="text" name="dob"><br><br>-->
<!--                Gender :-->
<!--                <input type="radio" name="gender" value="male" checked> Male-->
<!--                <input type="radio" name="gender" value="female"> Female-->
<!--                <input type="radio" name="gender" value="other"> Other<br><br>-->
<!--                Address : <input type="text" name="address"><br><br>-->
<!--                E-mail : <input type="text" name="E-mail"><br><br>-->
<!--                Tel. : <input type="text" name="tel"><br><br>-->
<!--                Type :-->
<!--                <select name="type">-->
<!--                    <option value="≤15">≤15</option>-->
<!--                    <option value="15-30">15-30</option>-->
<!--                    <option value="30">>30</option>-->
<!--                </select><br><br>-->
<!--                Shirt Size :-->
<!--                <select name="size">-->
<!--                    <option value="s">S</option>-->
<!--                    <option value="m">M</option>-->
<!--                    <option value="l">L</option>-->
<!--                    <option value="xl">XL</option>-->
<!--                    <option value="xl">XL</option>-->
<!--                    <option value="xxl">XXL</option>-->
<!--                    <option value="xxxl">XXXL</option>-->
<!--                </select><br>-->
<!--                <br></brr><input type="submit" value="Submit">-->
<!--            </form>-->
<!--        </article>-->
    </section>
</body>
</html>