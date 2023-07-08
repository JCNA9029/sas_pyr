<?php
$servername = "localhost";
$username = "username";
$password = "p0werp0int";
$database = "payroll";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$dailypay = $_POST['dailypay'];
$hoursworked = $_POST['hoursworked'];
$daysworked = $_POST['daysworked'];
$miscpay = $_POST['miscpay'];
$tax= $_POST['tax'];
$hmo = $_POST['hmo'];
$sss = $_POST['sss'];
$pagibig = $_POST['pagibig'];
$benefits = $_POST['benefits'];
//ayaw gumana ng tatlong to
$grossincome = $_POST['GIncome'];
$totalded = $_POST['Deductions'];
$Sweldo = $_POST['Sweldo'];


$sql = "INSERT INTO payrolldb (name, dailypay, hoursworked, daysworked, miscpay, tax, hmo, sss, pagibig, benefits, grossincome, totalded, Sweldo) 
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("siiiiiiiiiiii", $name, $dailypay, $hoursworked, $daysworked, $miscpay, $tax, $hmo,
$sss, $pagibig, $benefits, $grossincome, $totalded, $Sweldo);

if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$stmt->close();
$conn->close();

?>