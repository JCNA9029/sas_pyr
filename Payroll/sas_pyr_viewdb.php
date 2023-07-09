<?php

$servername = "localhost";
$username = "username";
$password = "p0werp0int";
$database = "payroll";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name, grossincome, totalded, Sweldo FROM payrolldb";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retrieved Form Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-image: url(./img/sas_bg.jpg);
        }
        .header{
            text-align:center;
            display: inline-block;
            border-radius: 3px;
            padding: 10px 20px;
            background-color: #fc84a2;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
        }

        h2 {
            color: #333;
        }

        .form-data {
            background-color: #fc84a2;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-data p {
            margin: 0;
        }

        hr {
            margin: 20px 0;
            border: 0;
            border-top: 1px solid #ccc;
        }

        .btn {
            font-family: Cooper;
            padding: 15px 25px;
            background-color: #781113; color: #fff;
            font-size: 12px;
            transition: background-color 0.3s ease;
            border-radius: 12px;
        }

        .btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="header">
<h2>Payroll Data Entries</h2>
</div>
<br>
<br>
    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='form-data'>";
            echo "<p><strong>Name:</strong>" . $row["name"] . "</p>";
            echo "<p><strong>\nGross Income:</strong>" . $row["grossincome"] . "</p>";
            echo "<p><strong>Total Deductions:</strong>" . $row["totalded"] . "</p>";
            echo "<p><strong>Payment:</strong>" . $row["Sweldo"] . "</p>";

            echo "</div>";
            echo "<hr>";
        }
    } else {
        echo "<p> No form data found </p>";
    }

    $conn->close();
    ?>
    <a href="sas_pyr_payroll.php" class="btn">New Entry</a>
</body>
</html>