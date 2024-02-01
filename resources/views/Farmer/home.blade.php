@extends('Farmer.app')

@section('content')


    <div class="block-header">
        <h2>DASHBOARD</h2>
    </div>
    <!-- Widgets -->
    <div class="row clearfix">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-pink hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">playlist_add_check</i>
                </div>
                <div class="content">
                    <div class="text">Profile</div>
                    <div class="number count-to" data-from="0" data-to="{{$users}}" data-speed="15" data-fresh-interval="20"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-cyan hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">help</i>
                </div>
                <div class="content">
                    <div class="text">STATISTICS</div>
                    <div class="number count-to" data-from="0" data-to="{{$production}}" data-speed="1000" data-fresh-interval="20"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-light-green hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">forum</i>
                </div>
                <div class="content">
                    <div class="text">FARM RECORDS</div>
                    <div class="number count-to" data-from="0" data-to="{{$production}}" data-speed="1000" data-fresh-interval="20"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-orange hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">person_add</i>
                </div>
                <div class="content">
                    <div class="text">TOTAL FARMERS</div>
                    <div class="number count-to" data-from="0" data-to="{{$farmer}}" data-speed="1000" data-fresh-interval="20"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Widgets -->


    <div class="row clearfix">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="header">
                    <div class="row clearfix">
                        <div class="col-xs-12 col-sm-6">
                            <h2>Registered Farmers</h2>
                        </div>
                        <div class="col-xs-12 col-sm-6 align-right">
                            <div class="row clearfix">
                                <div class="switch panel-switch-btn">
                                    <div class="search-container">
                                        <!-- Corrected id to match the JavaScript function -->
                                        <input type="text" class="search-input" id="searchInput" onkeyup="searchTable()" placeholder="Search...">
                                        <i class="fa fa-search search-icon"></i>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="body">
                    <!-- Enhanced styling for the table -->
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped" id="myTable">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Full Name</th>
                                <th>Farming Type</th>
                                <th>Crop Grown</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($farmers as $farmer)
                                <tr>
                                    <td>{{ $farmer->id }}</td>
                                    <td>{{ $farmer->full_name }}</td>
                                    <td>{{ $farmer->farming_type }}</td>
                                    <td>{{ $farmer->cropsGrown }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        // JavaScript function for searching the table
        function searchTable() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("searchInput");
            filter = input.value.toUpperCase();
            table = document.querySelector(".table");
            tr = table.getElementsByTagName("tr");

            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0]; // Change index based on the column you want to search
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>

    <script>
        // JavaScript function for searching the table
        function searchTable() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("searchInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable"); // Corrected table selection
            tr = table.getElementsByTagName("tr");

            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1]; // Changed index to 1 for the "Full Name" column
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>



@endsection
