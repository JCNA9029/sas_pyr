//gross income without deductions
function GIncome() {
    var Pay = parseInt(document.getElementById("dailypay").value);
    var Hour = parseInt(document.getElementById("hoursworked").value);
    var Days = parseInt(document.getElementById("daysworked").value);
    var Misc = parseInt(document.getElementById("miscpay").value);
    var Percent = '';
    switch (Hour) {
        case 0:
            Percent = 0;
            break;
        case 1:
            Percent = 0.125;
            break;
        case 2:
            Percent = 0.25;
            break;
        case 3:
            Percent = 0.375;
            break;
        case 4:
            Percent = 0.50;
            break;
        case 5:
            Percent = 0.625;
            break;
        case 6:
            Percent = 0.75;
            break;
        case 7:
            Percent = 0.875;
            break;
        case 8:
            Percent = 1;
            break;
        default:
            alert("Invalid Input!");
    }
    var grossIncome = (Pay * Days) * Percent + Misc;
    if (Hour > 8 || Hour < 0.99) {
        alert("Invalid");
    } else {
        alert("Your Gross Income is: ₱" + grossIncome);
    }
    return grossIncome;

}
//deductions
function Deductions() {
    var Tax = parseInt(document.getElementById("tax").value);
    var SSS = parseInt(document.getElementById("sss").value);
    var Pagibig = parseInt(document.getElementById("pagibig").value);
    var HMO = parseInt(document.getElementById("hmo").value);
    var Benefit = parseInt(document.getElementById("benefits").value);
    var NewTax = Tax 
    var totalded = (Tax + SSS + Pagibig + HMO + Benefit);
    alert("Your total deduction is: ₱" + totalded);
    return totalded;
}
//total sweldo kasama deductions
function Payment() {
    var employeeName = (document.getElementById("name").value);
    var Pay = parseInt(document.getElementById("dailypay").value);
    var Hour = parseInt(document.getElementById("hoursworked").value);
    var Days = parseInt(document.getElementById("daysworked").value);
    var Misc = parseInt(document.getElementById("miscpay").value);
    var Percent = 0;
    switch (Hour) {
        case 0:
            Percent = 0;
            break;
        case 1:
            Percent = 0.125;
            break;
        case 2:
            Percent = 0.25;
            break;
        case 3:
            Percent = 0.375;
            break;
        case 4:
            Percent = 0.50;
            break;
        case 5:
            Percent = 0.625;
            break;
        case 6:
            Percent = 0.75;
            break;
        case 7:
            Percent = 0.875;
            break;
        case 8:
            Percent = 1;
            break;
        default:
            Text = "Invalid";
    }
    var grossIncome = (Pay * Days) * Percent + Misc;
    var Tax = parseInt(document.getElementById("tax").value);
    var SSS = parseInt(document.getElementById("sss").value);
    var Pagibig = parseInt(document.getElementById("pagibig").value);
    var HMO = parseInt(document.getElementById("hmo").value);
    var Benefit = parseInt(document.getElementById("benefits").value);
    var totalded = (Tax + SSS + Pagibig + HMO + Benefit);
    var Income = parseInt(grossIncome);
    var Deduce = parseInt(totalded);
    var Sweldo = parseInt(Income - Deduce);
    var Results = "Employee Name: " + employeeName + "\n" + "Total Salary: ₱" + Sweldo;
    alert(Results)
    return Sweldo;
}