@extends('Farmer.app')

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
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

    <div class="search-container">
        <input type="text" class="search-input" id="myInput" onkeyup="myFunction()"  placeholder="Search...">
        <i class="fa fa-search search-icon"></i>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-striped" id="myTable">
            <thead>
            <tr>
                <th>Full Name</th>
                <th>Farming Type</th>
                <th>Crop Grown</th>
{{--                <th>Crop Type</th>--}}
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($farmers as $farmer)
                <tr>
                    <td>{{ $farmer->full_name }}</td>
                    <td>{{ $farmer->farming_type }}</td>
                    <td>{{ $farmer->cropsGrown }}</td>
{{--                    <td>{{ $farmer->crop_type }}</td>--}}
                    <td>
                        <button class="btn btn-info btn-sm" onclick="editFarmer({{ $farmer->id }})">
                            <i class="fa fa-edit">

                            </i>
                        </button>
                        <button class="btn btn-danger btn-sm" onclick="deleteFarmer({{ $farmer->id }})">
                            <i class="fa fa-trash">

                            </i>
                        </button>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>

    <script>
        function editFarmer(farmerId) {
            // Handle edit functionality, e.g., redirect to edit page
            console.log('Edit farmer with ID:', farmerId);
        }

        function deleteFarmer(farmerId) {
            // Handle delete functionality, e.g., show confirmation modal
            console.log('Delete farmer with ID:', farmerId);
        }
    </script>

    <script>
        function myFunction() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
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
        getPagination('#myTable');


        function getPagination(table) {
            var lastPage = 1;

            $('#maxRows')
                .on('change', function(evt) {
                    //$('.paginationprev').html('');						// reset pagination

                    lastPage = 1;
                    $('.pagination')
                        .find('li')
                        .slice(1, -1)
                        .remove();
                    var trnum = 0; // reset tr counter
                    var maxRows = parseInt($(this).val()); // get Max Rows from select option

                    if (maxRows == 5000) {
                        $('.pagination').hide();
                    } else {
                        $('.pagination').show();
                    }

                    var totalRows = $(table + ' tbody tr').length; // numbers of rows
                    $(table + ' tr:gt(0)').each(function() {
                        // each TR in  table and not the header
                        trnum++; // Start Counter
                        if (trnum > maxRows) {
                            // if tr number gt maxRows

                            $(this).hide(); // fade it out
                        }
                        if (trnum <= maxRows) {
                            $(this).show();
                        } // else fade in Important in case if it ..
                    }); //  was fade out to fade it in
                    if (totalRows > maxRows) {
                        // if tr total rows gt max rows option
                        var pagenum = Math.ceil(totalRows / maxRows); // ceil total(rows/maxrows) to get ..
                        //	numbers of pages
                        for (var i = 1; i <= pagenum; ) {
                            // for each page append pagination li
                            $('.pagination #prev')
                                .before(
                                    '<li data-page="' +
                                    i +
                                    '">\
                                                      <span>' +
                                    i++ +
                                    '<span class="sr-only">(current)</span></span>\
                                                    </li>'
                                )
                                .show();
                        } // end for i
                    } // end if row count > max rows
                    $('.pagination [data-page="1"]').addClass('active'); // add active class to the first li
                    $('.pagination li').on('click', function(evt) {
                        // on click each page
                        evt.stopImmediatePropagation();
                        evt.preventDefault();
                        var pageNum = $(this).attr('data-page'); // get it's number

                        var maxRows = parseInt($('#maxRows').val()); // get Max Rows from select option

                        if (pageNum == 'prev') {
                            if (lastPage == 1) {
                                return;
                            }
                            pageNum = --lastPage;
                        }
                        if (pageNum == 'next') {
                            if (lastPage == $('.pagination li').length - 2) {
                                return;
                            }
                            pageNum = ++lastPage;
                        }

                        lastPage = pageNum;
                        var trIndex = 0; // reset tr counter
                        $('.pagination li').removeClass('active'); // remove active class from all li
                        $('.pagination [data-page="' + lastPage + '"]').addClass('active'); // add active class to the clicked
                        // $(this).addClass('active');					// add active class to the clicked
                        limitPagging();
                        $(table + ' tr:gt(0)').each(function() {
                            // each tr in table not the header
                            trIndex++; // tr index counter
                            // if tr index gt maxRows*pageNum or lt maxRows*pageNum-maxRows fade if out
                            if (
                                trIndex > maxRows * pageNum ||
                                trIndex <= maxRows * pageNum - maxRows
                            ) {
                                $(this).hide();
                            } else {
                                $(this).show();
                            } //else fade in
                        }); // end of for each tr in table
                    }); // end of on click pagination list
                    limitPagging();
                })
                .val(5)
                .change();

            // end of on select change

            // END OF PAGINATION
        }

        function limitPagging(){
            // alert($('.pagination li').length)

            if($('.pagination li').length > 7 ){
                if( $('.pagination li.active').attr('data-page') <= 3 ){
                    $('.pagination li:gt(5)').hide();
                    $('.pagination li:lt(5)').show();
                    $('.pagination [data-page="next"]').show();
                }if ($('.pagination li.active').attr('data-page') > 3){
                    $('.pagination li:gt(0)').hide();
                    $('.pagination [data-page="next"]').show();
                    for( let i = ( parseInt($('.pagination li.active').attr('data-page'))  -2 )  ; i <= ( parseInt($('.pagination li.active').attr('data-page'))  + 2 ) ; i++ ){
                        $('.pagination [data-page="'+i+'"]').show();

                    }

                }
            }
        }

        $(function() {
            // Just to append id number for each row
            $('table tr:eq(0)').prepend('<th> ID </th>');

            var id = 0;

            $('table tr:gt(0)').each(function() {
                id++;
                $(this).prepend('<td>' + id + '</td>');
            });
        });

        //  Developed By Yasser Mas
        // yasser.mas2@gmail.com

    </script>



@endsection
