<!DOCTYPE html>
<html>
<head>
    <title>Payroll Data Submission Result</title>
    <style>
        body{
            background-image: url(./img/sas_bg.jpg);
        }
        .container{
            text-align: center;
            background-color: #fc84a2;
            padding: 20px;
            width: auto ;
            margin-top: 4%;
            margin-bottom: 4%;
            border: 0px solid;
            border-radius: 20px;
        }
        .results{
            text-align:center;
            display: inline-block;
            border-radius: 3px;
            padding: 10px 20px;
            background-color: #fc84a2;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
        }
        .btn {
            font-family: Cooper;
            padding: 15px 25px;
            background-color: #781113; color: #fff;
            font-size: 12px;
            transition: background-color 0.3s ease;
            border-radius: 12px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="results">
        <h1>Payroll Data Submission Result</h1>
        <?php

        if (isset($_POST['name']) && isset($_POST['dailypay']) && isset($_POST['hoursworked']) && isset($_POST['daysworked']) 
        && isset($_POST['miscpay']) && isset($_POST['tax']) && isset($_POST['hmo'])
        && isset($_POST['sss']) && isset($_POST['pagibig']) && isset($_POST['benefits'])) {
            include 'sas_pyr_database.php';

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

            echo "<p><strong>Name:</strong>" . $name . "</p>";
            echo "<p><strong>Gross Income:</strong>" . $grossIncome . "</p>";
            echo "<p><strong>Total Deductions:</strong>" . $totalded . "</p>";
            echo "<p><strong>Net Payment: ₱</strong>" . $Sweldo . "</p>";
            echo "<br>";

        } else {
            echo "<p> No form data submitted </p>";
        }
        ?>

        <a href="sas_pyr_payroll.php" class="btn">Go Back</a>
        <a href="sas_pyr_viewdb.php" class="btn">View Entries</a>
        </div>
    </div>
</body>
</html>