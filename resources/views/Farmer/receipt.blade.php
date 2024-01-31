<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meshop Ecommerce</title>
    <style>
        body{
            background-color: #F6F6F6;
            margin: 0;
            padding: 0;
        }
        h1,h2,h3,h4,h5,h6{
            margin: 0;
            padding: 0;
        }
        p{
            margin: 0;
            padding: 0;
        }
        .container{
            width: 80%;
            margin-right: auto;
            margin-left: auto;
        }
        .brand-section{
            background-color: #0d1033;
            padding: 10px 40px;
        }
        .logo{
            width: 50%;
        }

        .row{
            display: flex;
            flex-wrap: wrap;
        }
        .col-6{
            width: 50%;
            flex: 0 0 auto;
        }
        .text-white{
            color: #fff;
        }
        .company-details{
            float: right;
            text-align: right;
        }
        .body-section{
            padding: 16px;
            border: 1px solid gray;
        }
        .heading{
            font-size: 20px;
            margin-bottom: 08px;
        }
        .sub-heading{
            color: #262626;
            margin-bottom: 05px;
        }
        table{
            background-color: #fff;
            width: 100%;
            border-collapse: collapse;
        }
        table thead tr{
            border: 1px solid #111;
            background-color: #f2f2f2;
        }
        table td {
            vertical-align: middle !important;
            text-align: center;
        }
        table th, table td {
            padding-top: 08px;
            padding-bottom: 08px;
        }
        .table-bordered{
            box-shadow: 0px 0px 5px 0.5px gray;
        }
        .table-bordered td, .table-bordered th {
            border: 1px solid #dee2e6;
        }
        .text-right{
            text-align: end;
        }
        .w-20{
            width: 20%;
        }
        .float-right{
            float: right;
        }
    </style>
</head>
<body>
<script>
    // Trigger print when the page is loaded
    window.onload = function () {
        // Wait for the window to load completely before triggering the print function
        window.setTimeout(function () {
            // Trigger the print function
            window.print();
            // Close the window after printing
            window.onafterprint = function () {
                window.close();
            };
        }, 500);
    };
</script>


<div class="container">
    <div class="brand-section">
        <div class="row">
            <div class="col-6">
                <h1 class="text-white">FARMER PRODUCTION</h1>
            </div>
            <div class="col-6">
                <div class="company-details">
                    <p class="text-white">PRODUCTION RECEIPT</p>
                    <p class="text-white">CHUKA, KENYA</p>
                    <p class="text-white">+254794834319</p>
                </div>
            </div>
        </div>
    </div>

    <div class="body-section">
        <div class="row">
            <div class="col-6">
                <h2 class="heading">Invoice No.# {{ $production->id }}</h2>
                <p class="sub-heading">FROM: {{ $production->farmer }}  </p>
                <p class="sub-heading">CONTACT: {{ $production->phone }}  </p>
            </div>
        </div>
    </div>

    <div class="body-section">
        <h3 class="heading">Produced Items</h3>
        <br>
        <table class="table-bordered">
            <thead>
            <tr>
                <th>Product Name</th>
                <th class="w-20">Quantity</th>
                <th class="w-20">Notes</th>
                <th class="w-20">Date</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>{{ $production->product_name }}</td>
                <td>{{ $production->quantity }}</td>
                <td>{{ $production->notes }}</td>
                <td>{{ $production->production_date }}</td>
            </tr>
            </tbody>
        </table>
        <br>
        <h3 class="heading">Production Status: Recorded </h3>
        <h3 class="heading">Farmer Status: registered</h3>
    </div>


    <div class="body-section">
        <p>&copy; Copyright 2024/2025
            <a href="/" class="float-right">Farmer Production</a>
        </p>
    </div>
</div>
</body>
</html>
