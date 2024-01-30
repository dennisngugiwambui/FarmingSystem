@extends('Farmer.app')

@section('content')

    <div class="block-header">
        <h2>PROFILE</h2>
    </div>


    <style>


        .student-profile .card {
            border-radius: 10px;
        }

        .student-profile .card .card-header .profile_img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            margin: 10px auto;
            border: 10px solid #ccc;
            border-radius: 50%;
        }

        .student-profile .card h3 {
            font-size: 20px;
            font-weight: 700;
        }

        .student-profile .card p {
            font-size: 16px;
            color: #000;
        }

        .student-profile .table th,
        .student-profile .table td {
            font-size: 14px;
            padding: 5px 10px;
            color: #000;
        }
    </style>


    <section>
        <div class="rt-container">
            <div class="col-rt-12">
                <div class="Scriptcontent">

                    <!-- Student Profile -->
                    <div class="student-profile py-4">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="card shadow-sm">
                                        <div class="card-header bg-transparent text-center">
                                            <img class="profile_img" src="https://source.unsplash.com/600x300/?student" alt="student dp">
                                            <h3>{{auth()->user()->username}}</h3>
                                        </div>
                                        <div class="card-body">
                                            <p class="mb-0"><strong class="pr-1">Contact:</strong>{{auth()->user()->phone}}</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="card shadow-sm">
                                        <div class="card-header bg-transparent border-0">
                                            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Admin Information</h3>
                                        </div>
                                        <div class="card-body pt-0">
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th width="30%">Status</th>
                                                    <td width="2%">:</td>
                                                    <td>{{auth()->user()->status}}</td>
                                                </tr>
                                                <tr>
                                                    <th width="30%">Permission</th>
                                                    <td width="2%">:</td>
                                                    <td>{{auth()->user()->usertype}}</td>
                                                </tr>
                                                <tr>
                                                    <th width="30%">Country</th>
                                                    <td width="2%">:</td>
                                                    <td>Kenya</td>
                                                </tr>
                                                <tr>
                                                    <th width="30%">Email</th>
                                                    <td width="2%">:</td>
                                                    <td>{{auth()->user()->email}}</td>
                                                </tr>
                                                <tr>
                                                    <th width="30%">Name</th>
                                                    <td width="2%">:</td>
                                                    <td>{{auth()->user()->username}}</td>
                                                </tr>
                                                <tr>
                                                    <th width="30%">Contact</th>
                                                    <td width="2%">:</td>
                                                    <td>{{auth()->user()->phone}}</td>
                                                </tr>
                                                <tr>
                                                    <th width="30%">UserId</th>
                                                    <td width="2%">:</td>
                                                    <td>{{auth()->user()->id}}</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div style="height: 26px"></div>
                                    <div class="card shadow-sm">
                                        <div class="card-header bg-transparent border-0">
                                            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Other Information</h3>
                                        </div>
                                        <div class="card-body pt-0">
                                            <p>Agriculture is the backbone of our society, and farmers play a crucial role in ensuring food security and sustainability. Farmers are skilled individuals who cultivate the land, raise livestock, and contribute significantly to the economy. Here is a detailed overview of the life and work of a dedicated farmer:</p>

                                            <p><strong>Role:</strong> Farmers are responsible for growing crops, raising animals, and managing agricultural activities. They are involved in planting, cultivating, and harvesting crops, as well as taking care of livestock for meat, milk, or wool production.</p>

{{--                                            <p><strong>Skills:</strong> A successful farmer possesses a wide range of skills, including knowledge of crop cycles, soil health, pest control, and irrigation. They are adept at operating various farm machinery and equipment and have a deep understanding of weather patterns and climate conditions.</p>--}}

{{--                                            <p><strong>Work Environment:</strong> Farmers work outdoors in all weather conditions. Their daily tasks vary based on the season and may include preparing the soil, planting seeds, tending to crops, and managing livestock. Modern farmers also use technology and data analysis to optimize their farming practices.</p>--}}

{{--                                            <p><strong>Challenges:</strong> Farmers face numerous challenges, including unpredictable weather, pests, diseases, and market fluctuations. Sustainable farming practices, water conservation, and adapting to climate change are ongoing concerns for farmers striving to ensure long-term agricultural viability.</p>--}}

{{--                                            <p><strong>Contribution to Society:</strong> Farmers are essential contributors to food production and supply chains. They play a vital role in providing a diverse range of agricultural products, from fruits and vegetables to dairy and meat products. Farmers contribute to rural development and the overall well-being of communities.</p>--}}

{{--                                            <p><strong>Passion and Dedication:</strong> Farming requires dedication, hard work, and a passion for the land. Farmers often work long hours and remain committed to their crops and animals. Their love for farming goes beyond a profession; it's a way of life rooted in a deep connection with nature.</p>--}}

{{--                                            <p>Being a farmer is not just a job; it's a lifestyle that requires resilience, adaptability, and a genuine love for the land. Farmers are the stewards of our environment, providing sustenance for the world and preserving agricultural traditions for future generations.</p>--}}
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- partial -->

                </div>
            </div>
        </div>
    </section>



@endsection
