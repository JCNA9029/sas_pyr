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

$Percent = null;
            $grossIncome = 0;
            $totalded = 0;
            switch ($hoursworked) {
                case 0:
                    $Percent = 0;
                    break;
                case 1:
                    $Percent = 0.125;
                    break;
                case 2:
                    $Percent = 0.25;
                    break;
                case 3:
                    $Percent = 0.375;
                    break;
                case 4:
                    $Percent = 0.50;
                    break;
                case 5:
                    $Percent = 0.625;
                    break;
                case 6:
                    $Percent = 0.75;
                    break;
                case 7:
                    $Percent = 0.875;
                    break;
                case 8:
                    $Percent = 1;
                    break;
                default:
                echo ("Invalid");
            }

            $grossIncome = ($dailypay*$daysworked)*$Percent+$miscpay;
            $totalded = $tax+$hmo+$pagibig+$benefits+$sss;
            
            $Sweldo = $grossIncome-$totalded;
            
$sql = "INSERT INTO payrolldb (name, dailypay, hoursworked, daysworked, miscpay, tax, hmo, sss, pagibig, benefits, grossincome, totalded, Sweldo) 
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("siiiiiiiiiiii", $name, $dailypay, $hoursworked, $daysworked, $miscpay, $tax, $hmo,
$sss, $pagibig, $benefits, $grossIncome, $totalded, $Sweldo);

if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$stmt->close();
$conn->close();

?>