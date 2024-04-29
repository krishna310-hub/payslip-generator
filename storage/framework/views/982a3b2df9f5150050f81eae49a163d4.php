<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Free Payslip Generator</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/datepickerjs/dist/datepicker.min.css">
    <script src="https://cdn.jsdelivr.net/npm/datepickerjs/dist/datepicker.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
</head>
<body>
    <header>
        <nav class="bg-white border-gray-200 px-4 lg:px-6 py-2.5 dark:bg-gray-800">
            <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
                <a href="https://amypo.com/" class="flex items-center">
                    <img width="522" height="144" src="https://amypo.com/wp-content/uploads/2023/10/amypng-e1709699800168.png" class="elementor-animation-grow attachment-full size-full wp-image-8433 lazyautosizes lazyloaded" alt="Amypo educational technology" data-src="https://amypo.com/wp-content/uploads/2023/10/amypng-e1709699800168.png" decoding="async" data-srcset="https://amypo.com/wp-content/uploads/2023/10/amypng-e1709699800168.png 522w, https://amypo.com/wp-content/uploads/2023/10/amypng-e1709699800168-300x83.png 300w" data-sizes="auto" data-eio-rwidth="522" data-eio-rheight="144" sizes="167px" srcset="https://amypo.com/wp-content/uploads/2023/10/amypng-e1709699800168.png 522w, https://amypo.com/wp-content/uploads/2023/10/amypng-e1709699800168-300x83.png 300w">
                </a>
                <div class="flex items-center lg:order-2">
                    <a href="#" class="text-gray-800 dark:text-white hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">Log in</a>
                    <a href="#" class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">Get started</a>
                    <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                        <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>
                <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                    <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                        <li>
                            <h4>Free Payslip Generator</h4>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <hr>
    </header>
    <div>
        <form id="incomeForm" method="POST" action="<?php echo e(route('index')); ?>">
            <?php echo csrf_field(); ?>
        <div class="container">
                <center>
                    <h1>Free Payslip Generator</h1><br>
                    <p>With Amypo Payroll, create top-notch payslips for your employees right away! Easy to use and <br> customisable, this free tool will make payroll smoother for you.</p>
                </center>
            <div class="container1">
                <div class="row">
                    <div class="col text-black">
                        <label for="file" class="custum-file-upload">
                            <svg viewBox="0 0 24 24" fill="" class="icon" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M10 1C9.73478 1 9.48043 1.10536 9.29289 1.29289L3.29289 7.29289C3.10536 7.48043 3 7.73478 3 8V20C3 21.6569 4.34315 23 6 23H7C7.55228 23 8 22.5523 8 22C8 21.4477 7.55228 21 7 21H6C5.44772 21 5 20.5523 5 20V9H10C10.5523 9 11 8.55228 11 8V3H18C18.5523 3 19 3.44772 19 4V9C19 9.55228 19.4477 10 20 10C20.5523 10 21 9.55228 21 9V4C21 2.34315 19.6569 1 18 1H10ZM9 7H6.41421L9 4.41421V7ZM14 15.5C14 14.1193 15.1193 13 16.5 13C17.8807 13 19 14.1193 19 15.5V16V17H20C21.1046 17 22 17.8954 22 19C22 20.1046 21.1046 21 20 21H13C11.8954 21 11 20.1046 11 19C11 17.8954 11.8954 17 13 17H14V16V15.5ZM16.5 11C14.142 11 12.2076 12.8136 12.0156 15.122C10.2825 15.5606 9 17.1305 9 19C9 21.2091 10.7909 23 13 23H20C22.2091 23 24 21.2091 24 19C24 17.1305 22.7175 15.5606 20.9844 15.122C20.7924 12.8136 18.858 11 16.5 11Z" fill=""></path> </g></svg>
                            <img id="uploadedImage">
                            <input type="file" name="logo" accept="image/*">
                            <div class="text" id="uploadText">
                                <span>Click to upload Logo</span>
                            </div>
                            <input id="file" type="file">
                        </label>
                    </div>
                    <div class="col text-black">
                        <h4 style="margin-left: 210px; font-size: 18px;">Payslip for the Month</h4>
                        <br>
                        <div style="position: relative; display: flex; align-items: center; margin-left: 210px;">
                          <input class="input2" style="margin-right: 10px; margin-left: 5px; padding-left: 30px;" id="monthYearInput">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" style="fill: currentColor; position: absolute; left: 8px; cursor: pointer;" id="calendar-icon">
                            <path fill="none" d="M0 0h24v24H0z"/>
                            <path d="M17 10H6v2h11v-2zm2-6H5c-1.11 0-1.99.89-1.99 2L3 18c0 1.11.89 2 2 2h14c1.11 0 2-.89 2-2V6c0-1.11-.89-2-2-2zm0 14H5V10h14v8z"/>
                          </svg>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="col" style="margin-top: 30px">
                        <input class="input" type="text" name="company_name" placeholder="Company name" >
                    </div>
                    <div class="col" style="margin-top: 10px">
                        <input class="input" type="text" name="company_address" placeholder="Company address" >
                    </div>
                    <div class="col" style="margin-top: 10px">
                        <input class="input" type="number" name="pincode" placeholder="City pincode" >
                    </div>
                    <div class="col" style="margin-top: 10px">
                        <input class="input" type="text" name="country" placeholder="Country" >
                    </div>
                </div>
                <div>
                    <div class="col p-3 text-black" style="margin-top: 50px;">
                        <h4 style="text-align:left; font-size:18px; font-weight:bold;">Employee Pay Summary</h4>
                        <br><hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col p-3 text-black">
                        <label for="employee-name">
                            <h3 style="margin-left: 10px; letter-spacing: 2px;">Employee Name :</h3>
                            <input id="employee-name" style="margin-left: 10px; margin-top:10px;" type="text" name="employee_name" class="input1" placeholder="Eg: Krishna">
                        </label>
                        <label for="pay-period" class="mt-3">
                            <h3 style="margin-left: 10px; letter-spacing: 2px;">Pay period :</h3>
                            <div style="position: relative; display: inline-block;">
                                <input id="pay-period" style="padding-right: 30px; margin-left: 10px; margin-top: 10px;" class="input1" type="text" name="pay_period">
                                <svg id="calendar-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" style="fill: currentColor; position: absolute; right: 5px; top: 60%; transform: translateY(-50%); cursor: pointer;">
                                    <path fill="none" d="M0 0h24v24H0z"/>
                                    <path d="M17 10H6v2h11v-2zm2-6H5c-1.11 0-1.99.89-1.99 2L3 18c0 1.11.89 2 2 2h14c1.11 0 2-.89 2-2V6c0-1.11-.89-2-2-2zm0 14H5V10h14v8z"/>
                                </svg>
                            </div>
                        </label>
                        <label for="loss-of-pay-days" class="mt-3">
                            <h3 style="margin-left: 10px; letter-spacing: 2px;">Loss of Pay days :</h3>
                            <input id="loss-of-pay-days" type="number" name="loss_of_pay_days" style="margin-left: 10px; margin-top:10px;"placeholder="0" class="input1">
                        </label>
                    </div>
                    <div class="col p-3 text-black">
                        <label for="employee-id">
                            <h3 style="margin-left: 10px;letter-spacing: 2px;">Employee ID :</h3>
                            <input id="employee-id" style="margin-left: 10px; margin-top:10px;" class="input1" placeholder="Eg: 1234" type="number" name="employee_id">
                        </label>
                        <label for="paid-days" class="mt-3">
                            <h3 style="margin-left: 10px; letter-spacing: 2px;">Paid Days :</h3>
                            <input id="paid-days" type="number" name="paid_days" style="margin-left: 10px; margin-top:10px;" class="input1" placeholder="Eg: 22">
                        </label>
                        <label for="pay-date" class="mt-3">
                            <h3 style="margin-left: 10px; letter-spacing: 2px;">Pay date :</h3>
                            <div style="position: relative; display: inline-block;">
                                <input id="pay-date" style="padding-right: 30px; margin-left: 10px; margin-top: 10px;" class="input1" type="date" name="pay_date">
                            </div>
                        </label>
                    </div>
                </div>
                <div>
                    <div class="col p-3 text-black" style="margin-top: 50px;">
                        <h4 style="text-align:left; font-size:18px; font-weight:bold;">Income Details:</h4>
                        <br><hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col p-3 text-black">
                        <table style="margin-left: 10px; font-size: 15px;">
                            <thead>
                                <tr>
                                    <th style="font-size: 18px;">Earnings</th>
                                    <th style="font-size: 18px; text-indent: 30px;">Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="letter-spacing: 2px;">Basic</td>
                                    <td class="col p-8"><input class="input2" name="basic" id="basicAmount" placeholder="0"></td>
                                </tr>
                                <tr>
                                    <td style="letter-spacing: 2px;">House Rent Allowance</td>
                                    <td class="col p-8"><input class="input2" name="hra" id="hraAmount" placeholder="0"></td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold; font-size: 18px;">Gross Earnings</td>
                                    <td class="col p-8"><input class="input2" name="gross_earnings" id="grossEarnings" placeholder="₹0" value readonly></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col p-3 text-black">
                        <table style="margin-left: 10px; font-size: 15px;">
                            <thead>
                                <tr>
                                    <th style="font-size: 18px;">Deductions</th>
                                    <th style="font-size: 18px;text-indent: 30px">Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="letter-spacing: 2px;">Income Tax</td>
                                    <td class="col p-8"><input class="input2" name="income_tax" id="incomeTax" placeholder="0"></td>
                                </tr>
                                <tr>
                                    <td style="letter-spacing: 2px;">Provident Fund</td>
                                    <td class="col p-8"><input class="input2" name="provident_fund" id="providentFund" placeholder="0"></td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold; font-size: 18px;">Total Deductions</td>
                                    <td class="col p-8"><input class="input2" name="total_deductions" id="totalDeductions" placeholder="₹0" readonly></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div>
                    <table style="margin-left: 10px; font-size: 25px;">
                        <tr>
                            <td style="font-weight: bold;">Total Net Payable <p style="font-size: 15px;">Gross Earnings - Total Deductions</p><td>
                            <td class="col p-8"><input class="input3" name="total_net_payable" id="total" placeholder="₹0" readonly></td>
                        </tr>
                    </table>
                </div>
                <div class="col p-12" style="margin-left: 100px;">
                    <button>Generate Payslip</button>
                    <input class="btn" type="reset" value="Reset">
                </div>
            </div>
        </div>
        </form>
    </div>
    <?php if(session('success')): ?>
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: '<?php echo e(session('success')); ?>',
        });
    </script>
    <?php endif; ?>
</body>
<script>

    var currentDate = new Date();
    var currentMonth = currentDate.toLocaleString('default', { month: 'long' });
    var currentYear = currentDate.getFullYear();
    document.getElementById("monthYearInput").value = currentMonth + " " + currentYear;

    var currentDate = new Date();
    var month = currentDate.toLocaleString('default', { month: 'long' });
    var year = currentDate.getFullYear();
    document.getElementById('pay-period').value = month + ' ' + year;

    var currentDate = new Date();
    var month = currentDate.toLocaleString('default', { month: 'long' });
    var date = currentDate.getDate();
    var year = currentDate.getFullYear();
    document.getElementById('pay-date').value = month + ' ' + date + ', ' + year;

    // Function to calculate and update
    function updateTotal() {
        var basicAmount = (document.getElementById('basicAmount').value) || 0;
        var hraAmount = (document.getElementById('hraAmount').value) || 0;
        var grossEarnings = Number(basicAmount) + Number(hraAmount);
        document.getElementById('grossEarnings').value = '₹'+" "+ grossEarnings;
        var incomeTax = (document.getElementById('incomeTax').value) || 0;
        var providentFund = (document.getElementById('providentFund').value) || 0;
        var totalDeductions = Number(incomeTax) + Number(providentFund);
        document.getElementById('totalDeductions').value = '₹'+" "+ totalDeductions;
        let totalNetPay = grossEarnings - totalDeductions;
        document.getElementById('total').value = '₹'+" "+ totalNetPay;
    }

    // Required fields
    document.getElementById('basicAmount').addEventListener('input', updateTotal);
    document.getElementById('hraAmount').addEventListener('input', updateTotal);
    document.getElementById('incomeTax').addEventListener('input', updateTotal);
    document.getElementById('providentFund').addEventListener('input', updateTotal);

    document.getElementById('incomeForm').addEventListener('submit', function(event) {
        var inputs = document.querySelectorAll('#incomeForm input[type="text"], #incomeForm input[type="number"], #incomeForm select');
        var isValid = true;

        var excludedIds = ['basicAmount', 'hraAmount', 'incomeTax', 'providentFund'];

        inputs.forEach(function(input) {
            if (input.value.trim() === '' && !excludedIds.includes(input.id)) {
                isValid = false;
                return;
            }
        });

        if (!isValid) {  
            event.preventDefault();
            alert('Please fill in all fields before submitting.');
        }
    });

    // To display the image
    document.getElementById('file').addEventListener('change', function() {
    var file = this.files[0];
    if (file) {
        document.getElementById('uploadText').style.display = 'none';
        var reader = new FileReader();
        reader.onload = function(event) {
            document.getElementById('uploadedImage').src = event.target.result;
        };
        reader.readAsDataURL(file);
    }
});

</script>
<style>
    .container{
        background-color: rgb(247, 239, 228);
        height: 500px;
        width: 2000px;
        padding-top: 50px;
        padding-right: 30px;
        padding-bottom: 50px;
    }
    h1{
        color: rgb(6, 134, 19);
        font-size: 30px;
        font-weight: bold;
    }
    p{
        font-size: 17px;
    }
    .container1{
        background-color: white;
        height: 1500px;
        width: 900px;
        padding: 50px;
        margin-top: 50px;
        margin-left: 300px;
        border-radius: 10px;
        border: 1px solid rgb(196, 150, 150);
        position: relative;
    }
    .container1::after {
        content: "";
        display: block;
        height: 100px;
        width: 100%;
        position: absolute;
        bottom: -200px;
    }
    .custum-file-upload {
        height: 150px;
        width: 150px;
        display: flex;
        flex-direction: column;
        align-items: space-between;
        gap: 10px;
        cursor: pointer;
        align-items: center;
        justify-content: center;
        border: 2px dashed #111010;
        background-color: #fcfafa;
        padding: 1.5rem;
        border-radius: 10px;
        box-shadow: 0px 48px 35px -48px #e8e8e8;
    }

    .custum-file-upload .icon {
        display: inline;
        align-items: center;
        justify-content: center;
    }

    .custum-file-upload .icon svg {
        height: 40px;
        fill: #0d0c0c;
    }

    .custum-file-upload .text {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .custum-file-upload .text span {
        font-weight: 400;
        color: #181717;
    }

    .custum-file-upload input {
        display: none;
    }
    .input {
        border: 2px solid transparent;
        width: 30em;
        height: 2.5em;
        padding-left: 0.8em;
        outline: none;
        overflow: hidden;
        background-color: #F3F3F3;
        border-radius: 10px;
        transition: all 0.5s;
    }
    .input:hover,
    .input:focus {
        border: 2px solid #4A9DEC;
        box-shadow: 0px 0px 0px 7px rgb(74, 157, 236, 20%);
        background-color: white;
    }

    /* input1 */
    .input1 {
        border: 2px solid transparent;
        width: 23em;
        height: 2.3em;
        padding-left: 0.8em;
        outline: none;
        overflow: hidden;
        background-color: #F3F3F3;
        border-radius: 5px;
        transition: all 0.5s;
    }
    .input1:hover,
    .input1:focus {
        box-shadow: 0px 0px 0px 3px rgb(74, 157, 236, 20%);
        background-color: white;
    }
    /* input2 */
    .input2 {
        border: 2px solid transparent;
        width: 10em;
        height: 2.3em;
        padding-left: 0.8em;
        outline: none;
        overflow: hidden;
        background-color: #F3F3F3;
        border-radius: 5px;
        transition: all 0.5s;
    }
    .input2:hover,
    .input2:focus {
        box-shadow: 0px 0px 0px 3px rgb(74, 157, 236, 20%);
        background-color: white;
    }
    /* input3 */
    .input3 {
        border: 2px solid transparent;
        width: 10em;
        height: 2.5em;
        margin-left: 230px;
        padding-left: 0.8em;
        outline: none;
        overflow: hidden;
        background-color: #F3F3F3;
        border-radius: 10px;
        transition: all 0.5s;
    }
    .input3:hover,
    .input3:focus {
        border: 2px solid #4A9DEC;
        box-shadow: 0px 0px 0px 7px rgb(74, 157, 236, 20%);
        background-color: white;
    }
    button {
        appearance: button;
        background-color: #1899D6;
        border: solid transparent;
        border-radius: 16px;
        border-width: 0 0 4px;
        box-sizing: border-box;
        color: #FFFFFF;
        cursor: pointer;
        display: inline-block;
        font-size: 20px;
        font-weight: 700;
        letter-spacing: .8px;
        line-height: 20px;
        margin: 0;
        outline: none;
        overflow: visible;
        padding: 13px 19px;
        text-align: center;
        text-transform: uppercase;
        touch-action: manipulation;
        transform: translateZ(0);
        transition: filter .2s;
        user-select: none;
        -webkit-user-select: none;
        vertical-align: middle;
        white-space: nowrap;
    }

    button:after {
        background-clip: padding-box;
        background-color: #1CB0F6;
        border: solid transparent;
        border-radius: 16px;
        border-width: 0 0 4px;
        bottom: -4px;
        content: "";
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
        z-index: -1;
    }

    button:main, button:focus {
    user-select: auto;
    }

    button:hover:not(:disabled) {
    filter: brightness(1.1);
    }

    button:disabled {
    cursor: auto;
    }

    button:active:after {
    border-width: 0 0 0px;
    }

    button:active {
    padding-bottom: 10px;
    }
    /* reset button */
    .btn {
    color: white;
    background-color: #222;
    font-weight: 500;
    margin-left: 100px;
    border-radius: 0.5rem;
    font-size: 1rem;
    line-height: 2rem;
    padding-left: 2rem;
    padding-right: 2rem;
    padding-top: 0.7rem;
    padding-bottom: 0.7rem;
    cursor: pointer;
    text-align: center;
    margin-right: 0.5rem;
    display: inline-flex;
    align-items: center;
    border: none;
    }

    .btn:hover {
    background-color: #fcfbfb;
    }

    .btn svg {
    display: inline;
    width: 1.3rem;
    height: 1.3rem;
    margin-right: 0.75rem;
    color: white;
    }

    .btn:focus svg {
    animation: spin_357 0.5s linear;
    }

    @keyframes spin_357 {
    from {
        transform: rotate(0deg);
    }

    to {
        transform: rotate(360deg);
    }
    }
</style>
</html>
<?php /**PATH C:\LProjects\payslip\resources\views/admin/layout.blade.php ENDPATH**/ ?>