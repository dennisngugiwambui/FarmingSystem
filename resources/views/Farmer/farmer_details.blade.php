@extends('Farmer.app')

@section('content')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

    <style>
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f0f2f5;
        }
        .profile-header {
            background-color: #1877f2;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        .profile-header h1 {
            margin: 0;
            font-size: 36px;
        }
        .profile-header p {
            margin-top: 5px;
            font-size: 18px;
        }
        .profile-image {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
            margin-top: -75px;
            border: 5px solid #fff;
        }
        .cover-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .profile-details {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-top: -100px;
            position: relative;
            z-index: 1;
        }
        .profile-details h2 {
            margin-top: 0;
        }
        .profile-details p {
            font-size: 16px;
        }
        .social-links {
            margin-top: 20px;
        }
        .social-links a {
            color: #1877f2;
            margin-right: 10px;
            font-size: 24px;
        }
        .contact-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        .contact-label {
            font-weight: bold;
            margin-bottom: 5px;
            color: #333;
        }

        .contact-data {
            margin-bottom: 15px;
            color: #555;
        }

        .status-card {
            background-color: #4CAF50;
            color: #fff;

            text-align: center;

        }
        .production-form {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            font-weight: bold;
            color: #333;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .btn-primary {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-primary:hover {
            background-color: #45a049;
        }
        /* Style the form */

        #regForm {
            background-color: #ffffff;
            margin: 100px auto;
            font-family: Raleway;
            padding: 40px;
            width: 70%;
            min-width: 300px;
        }

        h1 {
            text-align: center;
        }

        input {
            padding: 10px;
            width: 100%;
            font-size: 17px;
            font-family: Raleway;
            border: 1px solid #aaaaaa;
        }

        /* Mark input boxes that gets an error on validation: */
        input.invalid {
            background-color: #ffdddd;
        }

        /* Hide all steps by default: */
        .tab {
            display: none;
        }

        button {
            background-color: #04AA6D;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            font-size: 17px;
            font-family: Raleway;
            cursor: pointer;
        }

        button:hover {
            opacity: 0.8;
        }

        #prevBtn {
            background-color: #bbbbbb;
        }

        /* Make circles that indicate the steps of the form: */
        .step {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbbbbb;
            border: none;
            border-radius: 50%;
            display: inline-block;
            opacity: 0.5;
        }

        .step.active {
            opacity: 1;
        }

        /* Mark the steps that are finished and valid: */
        .step.finish {
            background-color: #04AA6D;
        }
        .forming{
            background: #00ad9c;
        }
        .text-red{
            color: red;
        }

        .table-responsive {
            margin-top: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tbody tr:hover {
            background-color: #f5f5f5;
        }

        .btn {
            padding: 6px 12px;
            margin-right: 5px;
        }

        .btn-info {
            background-color: #5bc0de;
            color: #fff;
            border: 1px solid #46b8da;
        }

        .btn-danger {
            background-color: #d9534f;
            color: #fff;
            border: 1px solid #d43f3a;
        }
        .search-container {
            position: relative;
            margin-bottom: 20px;
        }

        .search-input {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
            background-color: #f8f8f8;
        }

        .search-icon {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            right: 10px;
            color: #999;
            cursor: pointer;
        }

    </style>

    <div class="container">
        <div class="profile-header">
            <img src="{{ asset('Admin/farmer-avatar.png') }}" alt="Cover Image" class="cover-image">
            <img src="{{ asset('Admin/farmer-cover.jpeg') }}" alt="Profile Image" class="profile-image">
            <h1>Farmer Name</h1>
            <p>Email: farmer@example.com</p>
        </div>

        <div class="profile-details">
{{--            <h2>About Me</h2>--}}
{{--            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla non lectus eu turpis luctus faucibus. Sed sit amet nunc eget odio varius dictum. Mauris in magna orci. Duis nec lacus feugiat, scelerisque eros vel, mattis mi. Vestibulum rhoncus elit ac urna bibendum condimentum. Sed consequat augue sit amet magna egestas dignissim.</p>--}}


            <h2>Contact Information</h2>
            <p><strong>Registered By:</strong>  <span class="contact-data"> {{$farmer->registered_by_name}}</p>
            <p><strong>Name:</strong>  <span class="contact-data">{{$farmer->full_name}}</p>
            <p><strong>Phone:</strong>  <span class="contact-data">{{$farmer->phone}} </p>
            <p><strong>National Id:</strong> {{$farmer->national_id}} </p>
            <p><strong>Email:</strong> {{$farmer->email}} </p>
            <p><strong>Location:</strong> {{$farmer->location}} </p>
            <p><strong>Crop Type:</strong> {{$farmer->crop_type}} </p>
            <p><strong>Farming Experience:</strong> {{$farmer->farming_experience}} </p>
            <p><strong>Farming Type:</strong> {{$farmer->farming_type}} </p>
            <p><strong>Gender:</strong> {{$farmer->gender}} </p>
            <p><strong>Farm Size:</strong> {{$farmer->farmSize}} </p>
            <p><strong>Crop Grown:</strong> {{$farmer->cropGrown}} </p>
            <p><strong>Status:</strong> <span class="status-card"> {{$farmer->status}} </p>

            <div class="social-links">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>

            <div class="forming">
                <form id="regForm" action="{{route('farmersProduction', ['id'=>$farmer->id])}}" method="POST" style="background: #1de9b6">

                    @csrf
                    <h2>Register Productions</h2>

                    <!-- One "tab" for each step in the form: -->
                    <div class="tab">Product Name:
                        <p><input placeholder="Product name" name="product_name" class="{{ $errors->has('product_name') ? ' is-invalid' : '' }}" oninput="this.className = ''"></p>
                        @if ($errors->has('product_name'))
                            <span class="invalid-feedback text-red">
                        <strong>{{ $errors->first('product_name') }}</strong>
                    </span>
                        @endif
                    </div>

                    <div class="tab">Quantity:
                        <p><input type="number" placeholder="quantity.." name="quantity" class="{{ $errors->has('quantity') ? ' is-invalid' : '' }}" oninput="this.className = ''"></p>
                        @if ($errors->has('quantity'))
                            <span class="invalid-feedback text-red">
                        <strong>{{ $errors->first('quantity') }}</strong>
                    </span>
                        @endif
                    </div>

                    <div class="tab">:
                        <p><input type="date" placeholder="date .." name="production_date" class="{{ $errors->has('date') ? ' is-invalid' : '' }}" oninput="this.className = ''"></p>
                        @if ($errors->has('production_date'))
                            <span class="invalid-feedback text-red">
                        <strong>{{ $errors->first('production_date') }}</strong>
                    </span>
                        @endif
                    </div>

                    <div class="tab">Notes:
                        <p><textarea class="form-control" id="notes" name="notes" cols="30" rows="5" class="{{ $errors->has('notes') ? ' is-invalid' : '' }}" oninput="this.className = ''"></textarea></p>
                        @if ($errors->has('notes'))
                            <span class="invalid-feedback text-red">
                        <strong>{{ $errors->first('notes') }}</strong>
                    </span>
                        @endif

                    </div>

                    <div style="overflow:auto;">
                        <div style="float:right;">
                            <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                            <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                        </div>
                    </div>

                    <!-- Circles which indicates the steps of the form: -->
                    <div style="text-align:center;margin-top:40px;">
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                    </div>

                </form>
            </div>


            <!-- Table for production -->
            <div class="search-container">
                <input type="text" class="search-input" id="myInput" onkeyup="myFunction()" placeholder="Search...">
                <i class="fa fa-search search-icon"></i>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-striped" id="myTable">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Product Name</th>
                        <th>Quantity</th>
                        <th>Production Date</th>
                        <th>Notes</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($farmer->productions as $index => $production)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $production->product_name }}</td>
                            <td>{{ $production->quantity }}</td>
                            <td>{{ $production->production_date }}</td>
                            <td>{{ $production->notes }}</td>
                            <td>
                                <button class="btn btn-danger btn-sm" data-bs-target="#editProduct_{{ $production->id }}" onclick="document.getElementById('id01_{{ $production->id }}').style.display='block'">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <div id="id01_{{ $production->id }}" class="modal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <span onclick="document.getElementById('id01_{{ $production->id }}').style.display='none'" class="close" title="Close Modal">&times;</span>
                            <form class="modal-content" action="" method="POST">
                                @csrf
                                <div class="container">
                                    <p style="padding: 10px; text-align: center;">Are you sure you want to delete this record?</p>
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                    <button class="btn btn-secondary" type="button" onclick="document.getElementById('id01_{{ $production->id }}').style.display='none'">Cancel</button>
                                </div>
                            </form>
                        </div>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>

    <script>
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab

        function showTab(n) {
            // This function will display the specified tab of the form ...
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            // ... and fix the Previous/Next buttons:
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Submit";
            } else {
                document.getElementById("nextBtn").innerHTML = "Next";
            }
            // ... and run a function that displays the correct step indicator:
            fixStepIndicator(n)
        }

        function nextPrev(n) {
            // This function will figure out which tab to display
            var x = document.getElementsByClassName("tab");
            // Exit the function if any field in the current tab is invalid:
            if (n == 1 && !validateForm()) return false;
            // Hide the current tab:
            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            // if you have reached the end of the form... :
            if (currentTab >= x.length) {
                //...the form gets submitted:
                document.getElementById("regForm").submit();
                return false;
            }
            // Otherwise, display the correct tab:
            showTab(currentTab);
        }

        function validateForm() {
            // This function deals with validation of the form fields
            var x, y, i, valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByTagName("input");
            // A loop that checks every input field in the current tab:
            for (i = 0; i < y.length; i++) {
                // If a field is empty...
                if (y[i].value == "") {
                    // add an "invalid" class to the field:
                    y[i].className += " invalid";
                    // and set the current valid status to false:
                    valid = false;
                }
            }
            // If the valid status is true, mark the step as finished and valid:
            if (valid) {
                document.getElementsByClassName("step")[currentTab].className += " finish";
            }
            return valid; // return the valid status
        }

        function fixStepIndicator(n) {
            // This function removes the "active" class of all steps...
            var i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            //... and adds the "active" class to the current step:
            x[n].className += " active";
        }
    </script>

@endsection
