<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Payslip PDF</title>

    <style>
        html,
        body {
            margin: 10px;
            padding: 10px;
            font-family: sans-serif;
        }
        h1,h2,h3,h4,h5,h6,p,span,label {
            font-family: sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 0px !important;
        }
        table thead th {
            height: 28px;
            text-align: left;
            font-size: 16px;
            font-family: sans-serif;
        }
        table, th, td {
            border: 1px solid #ddd;
            padding: 8px;
            font-size: 14px;
        }

        .heading {
            font-size: 24px;
            margin-top: 12px;
            margin-bottom: 12px;
            font-family: sans-serif;
        }
        .small-heading {
            font-size: 18px;
            font-family: sans-serif;
        }
        .total-heading {
            font-size: 18px;
            font-weight: 700;
            font-family: sans-serif;
        }
        .order-details tbody tr td:nth-child(1) {
            width: 20%;
        }
        .order-details tbody tr td:nth-child(3) {
            width: 20%;
        }

        .text-start {
            text-align: left;
        }
        .text-end {
            text-align: right;
        }
        .text-center {
            text-align: center;
        }
        .company-data span {
            margin-bottom: 4px;
            display: inline-block;
            font-family: sans-serif;
            font-size: 14px;
            font-weight: 400;
        }
        .no-border {
            border: 1px solid #fff !important;
        }
        .bg-blue {
            background-color: #414ab1;
            color: #fff;
        }
    </style>
</head>
<body>

    <table class="order-details">
        <thead>
            <tr>
                <th width="50%" colspan="1">
                    
                    <h1>LOGO</h1>
                </th>
                <th width="50%" colspan="2" class="text-start company-data">
                    <span style="font-weight: bold;">Company Name:<?php echo e($employeeDetail->company_name); ?> </span> <br>
                    <span style="font-weight: bold;">Address:<?php echo e($employeeDetail->company_address); ?></span> <br>
                    <span style="font-weight: bold;">Pincode:<?php echo e($employeeDetail->pincode); ?></span> <br>
                    <span style="font-weight: bold;">Country:<?php echo e($employeeDetail->country); ?></span> <br>
                </th>
            </tr>
            <tr class="bg-blue">
                <th width="50%" colspan="2">Employee Details</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Employee Id:</td>
                <td><?php echo e($employeeDetail->employee_id); ?></td>
            </tr>
            <tr>
                <td>Employee Name.:</td>
                <td><?php echo e($employeeDetail->employee_name); ?></td>
            </tr>
            <tr>
                <td>Pay period:</td>
                <td><?php echo e($employeeDetail->pay_period); ?></td>
            </tr>
            <tr>
                <td>Pay Date:</td>
                <td><?php echo e($employeeDetail->pay_date); ?></td>
            </tr>
            <tr>
                <td>Paid days:</td>
                <td><?php echo e($employeeDetail->paid_days); ?></td>
            </tr>
            <tr>
                <td>Loss of Pay days:</td>
                <td><?php echo e($employeeDetail->loss_of_pay_days); ?></td>
            </tr>
        </tbody>
    </table>
<br>
    <table>
        <thead>
            <tr>
                <th class="no-border text-start heading" colspan="5">
                    INCOME DETAILS
                </th>
            </tr>
            <tr class="bg-blue">
                <th>Earnings</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    Basic
                </td>
                <td width="10%"><?php echo e($incomeDetail->basic); ?></td>
            </tr>
            <tr>
                <td>
                    House Rent Allowance
                </td>
                <td width="10%"><?php echo e($incomeDetail->hra); ?></td>
            </tr>
            <tr>
                <td colspan="1" class="total-heading">Gross Earnings =  </td>
                <td colspan="1" class="total-heading"><?php echo e($incomeDetail->gross_earnings); ?></td>
            </tr>
        </tbody>
    </table>
    <br>
    <table>
        <thead>
            <tr>
                <th class="no-border text-start heading" colspan="5">
                    DEDUCTIONS
                </th>
            </tr>
            <tr class="bg-blue">
                <th>Deductions</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    Income Tax
                </td>
                <td width="10%"><?php echo e($incomeDetail->income_tax); ?></td>
            </tr>
            <tr>
                <td>
                    Provident Fund
                </td>
                <td width="10%"><?php echo e($incomeDetail->provident_fund); ?></td>
            </tr>
            <tr>
                <td colspan="1" class="total-heading">Total Deductions = </td>
                <td colspan="1" class="total-heading"><?php echo e($incomeDetail->total_deductions); ?></td>
            </tr>
        </tbody>
    </table>
    <br>
    <table>
        <thead>
            <tr class="bg-blue">
                <th>Total Net Payable <small>(Gross Earnings - Total Deductions):</small> </th>
                <th>Total = <?php echo e($incomeDetail->total_net_payable); ?></th>
            </tr>
        </thead>
    </table>

    <br>
    <p class="text-center">
        Thank your for using Amypo Free Payslip generator
    </p>

</body>
</html>
<?php /**PATH C:\LProjects\payslip\resources\views/admin/payslipPdf.blade.php ENDPATH**/ ?>