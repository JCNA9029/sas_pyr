<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial scale=1.0">
    <title>Payroll Accounts</title>
    <link rel="stylesheet" type="text/css" href="sas_pyr_css.css">

</head>
<body>
    <div class="Form">
        <form class="form-container" action="sas_pyr_database.php" method="post" name="Payrolls" >
            <table id="table1" border="3" align="center" style="background-color: white;">
                <tr>
                    <td colspan="4" align="center">
                        <h1 Class="form-title">Income of Employees</h1>
                    </td>
                </tr>
                <tr>
                    <td colspan="4" align="center">
                        <label for="name">Employee Name: </label>
                        <select name="name" id="name">
                            <option value="Robert Santos">Robert Santos</option>
                            <option value="John Michael">John Michael</option>
                            <option value="Mark Sennizer">Mark Sennizer</option>
                            <option value="Gustavo Fring">Gustavo Fring</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th width="140px">
                        <h3>Daily Pay: </h3>
                    </th>
                    <td>
                        <input Class="form-title" type="number" name="dailypay" id="dailypay" value="0" min="0">
                        </th>
                    <th>
                        <h3>Hours Worked: </h3>
                        </td>
                    <td>
                        <input Class="form-title" type="=number" name="hoursworked" id="hoursworked" value="0" min="0">
                    </td>
                </tr>
                <tr>
                    <th>
                        <h3>Days Worked: </h3>
                    </th>
                    <td>
                        <input Class="form-title" type="number" name="daysworked" id="daysworked" value="0" min="0">
                    </td>
                    <th>
                        <label for="Misc">
                            <h3>Misc. Pays: </h3>
                        </label>
                    </th>
                    <td>
                        <input Class="form-title" type="number" name="miscpay" id="miscpay" value="0" min="0">
                    </td>
                </tr>

            </table>
            <p id="gross"></p>
            <table border="3" align="center" style="background-color: white;">
                <tr>
                    <td>
                        <button type="button" class="form-button" onclick="GIncome()">Gross Income</button>
                    </td>
                </tr>
            </table>
            <br>
           
            <table id="table1" border="3" align="center" style="background-color: white;">
                <tr>
                    <td colspan="4" align="center">
                        <h1 Class="form-title">Deductions of Employees</h1>
                    </td>
                </tr>
                <tr>
                    <th width="100px">
                        <h3>Tax: </h3>
                    </th>
                    <td>
                        <input Class="form-title" type="number" name="tax" id="tax" value="0" min="0">
                    </td>
                    <th width="160px">
                        <h3>SSS: </h3></label>
                    </th>
                    <td>
                        <input Class="form-title" type="number" name="sss" id="sss" value="0" min="0">
                    </td>
                </tr>
                <tr>

                    <Th>
                        <h3>HMO: </h3></label>
                    </Th>

                    <td>
                        <input Class="form-title" type="number" name="hmo" id="hmo" value="0" min="0">
                    </td>
                    <th>
                        <label for="Pagibig">
                            <h3>Pag-ibig: </h3>
                        </label>
                    </th>
                    <td>
                        <input Class="form-title" type="number" name="pagibig" id="pagibig" value="0" min="0">
                    </td>
                </tr>
                <th colspan="2">
                    <h3>Benefits Payment:</h3>
                </th>
                <th colspan="2">
                    <input Class="form-title" type="number" name="benefits" id="benefits" value="0" min="0">
                </th>
            </table>
            <table border="3" align="center" style="background-color: white;">
                <tr>
                    <td>
                        <button type="button" class="form-button" onclick="Deductions()"> Deductions</button>
                    </td>
                </tr>
            </table>
            <br>
            <table border="3" align="center" style="background-color: white;">
                <tr>
                    <td>
                        <button type="button" class="form-button" onclick="Payment()" > Payment</button>
                    </td>
                </tr>
            </table>
            <br>
                    <table border="3" align="center" style="background-color: white;">
                        <tr>
                            <td>
                                <input type="submit" value="Submit">
                            </td>
                        </tr>
                    </table>
        </form>
    </div>
    <script src="sas_pyr_javascript.js"></script>
</body>
</html>