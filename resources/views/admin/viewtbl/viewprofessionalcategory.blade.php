{{-- @extends('admin.sidebar')

@section('content') --}}
    {{-- <h1 style="margin-left:300px; margin-top:20px;">Professionals Categories Details</h1>

    <div class="search-bar" style="margin-left:300px; margin-top:20px; width: 800px;">
        <input type="text" id="search-input" class="form-control" placeholder="Search products by Brand Name or Id...">
    </div> --}}

    {{-- <div class="table-responsive" id="pagination-data" style="margin-left:300px; margin-top:20px; width: 800px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Professionals Category</h1>

                    <table class="table mt-4">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Category Name</th>
                                <th>Description</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 0;
                            @endphp
                            @foreach ($prof_cate as $cate)
                                @php
                                    $i++;
                                @endphp
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $cate->name }}</td>
                                    <td>{{ $cate->description }}</td>

                    
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
 @endsection --}}
 
@extends('admin.sidebar')

@section('content')

    <h1 style="margin-left:300px; margin-top:20px;">Professionals Categories Details</h1>

    <div class="search-bar" style="margin-left:300px; margin-top:20px; width: 800px;">
        <input type="text" id="search-input" class="form-control" placeholder="Search services by Name or ID...">
    </div>

    <div class="table-responsive" id="pagination-data">
        @include('admin.viewtbl.professinalcategorypagination') <!-- Load paginated data -->
    </div>
@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function() {
    function fetchServices(page, query) {
        $.ajax({
            url: "/viewprofessionalsCategory", // Use the correct route
            type: "GET",
            data: {
                page: page,
                query: query
            },
            success: function(data) {
                $('#pagination-data').html(data);
            }
        });
    }

<<<<<<< HEAD
  
=======
    // // Trigger AJAX on pagination link click
    // $(document).on('click', '.pagination a', function(event) {
    //     event.preventDefault();
    //     var page = $(this).attr('href').split('page=')[1];
    //     var query = $('#search-input').val();
    //     fetchServices(page, query);
    // });

    // // Trigger AJAX on search input keyup
    // $('#search-input').on('keyup', function() {
    //     var query = $(this).val();
    //     fetchServices(1, query); // Always start from the first page
    // });
>>>>>>> udara_branch
});
</script>
@endsection


