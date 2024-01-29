@extends('Farmer.app')

@section('content')


    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>


    <style>


        .form-container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 80%;
        }

        .form-container h2 {
            text-align: center;
            color: #333;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-top: 5px;
        }

        select {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-top: 5px;
        }

        button {
            background-color: #28a745;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #218838;
        }
    </style>

    <div class="form-container">
        <h2>Farmer Registration</h2>
        <form action="" method="POST">
            @csrf
            <div class="form-group">
                <label for="full_name">Full Name:</label>
                <input type="text" id="full_name" name="full_name" required>
            </div>

            <div class="form-group">
                <label for="phone">National Id:</label>
                <input type="number" id="national_id" name="national_id" required>
            </div>

            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="number" id="phone" name="phone" required>
            </div>


            <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="location">Location:</label>
                <input type="text" id="location" name="location" required>
            </div>

            <div class="form-group">
                <label for="crop_type">Preferred Crop Type:</label>
                <select id="crop_type" name="crop_type" required>
                    <option value="grains">Grains</option>
                    <option value="fruits">Fruits</option>
                    <option value="vegetables">Vegetables</option>
                    <option value="livestock">Livestock</option>
                </select>
            </div>

            <div class="form-group">
                <label for="experience">Farming Experience (in years):</label>
                <select tyle="width: 100%;" name="farming_experience">
                    <option value="0">0</option>
                    <option value="1-3">1-3</option>
                    <option value="4-8">4-8</option>
                    <option value="9-15">9-15</option>
                    <option value="15 and above">15 and above</option>
                </select>
            </div>

            <div class="form-group">
                <label for="experience">Farming Type:</label>
                <select id="farming_type" name="farming_type"  class="myselect" style="width: 100%;">
                    <option value="Commercial farming">Commercial farming</option>
                    <option value="Extensive farming">Extensive farming</option>
                    <option value="Mixed farming">Mixed farming</option>
                    <option value="Nomadic farming">Nomadic farming</option>
                    <option value="Organic farming">Organic farming</option>
                    <option value="Pastoral farming">Pastoral farming</option>
                    <option value="Arable farming">Arable farming</option>
                    <option value="Aquaculture">Aquaculture</option>
                    <option value="Subsistence farming">Subsistence farming</option>
                    <option value="Poultry farming">Poultry farming</option>
                    <option value="Subsistence">Subsistence</option>
                    <option value="Dry farming">Dry farming</option>
                    <option value="Flower farm">Flower farm</option>
                    <option value="Ranch">Ranch</option>
                    <option value="Shifting agriculture">Shifting agriculture</option>
                    <option value="Urban farming">Urban farming</option>
                    <option value="Apiary">Apiary</option>
                    <option value="Plantation farming">Plantation farming</option>
                </select>
            </div>

            <div class="form-group">
                <label for="gender">Gender:</label>
                <select id="gender" name="gender" required style="width: 100%">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>

           <div class="form-group">
               <label for="farmSize">Farm Size (acres):</label>
               <input type="number" id="farmSize" name="farmSize" required>
           </div>

            <div class="form-group">
                <label for="cropsGrown">Crops Grown:</label>
                <input type="text" id="cropsGrown" name="cropsGrown" required>
            </div>


            <button type="submit">Register</button>
        </form>
    </div>


    <!-- Initialize Select2 -->
    <script>
        $(document).ready(function () {
            $('.js-select2').select2({
                placeholder: 'Select a farming type',
                allowClear: true
            });
        });
    </script>

    <script type="text/javascript">
        $(".myselect").select2();
    </script>



@endsection
