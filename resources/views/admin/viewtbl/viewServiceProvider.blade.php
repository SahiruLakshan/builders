
@extends('admin.sidebar')

@section('content')
    <h1 style="margin-left:300px; margin-top:20px;">Service Providers Details</h1>

    <div class="search-bar" style="margin-left:300px; margin-top:20px; width: 800px;">
        <input type="text" id="search-input" class="form-control" placeholder="Search service providers by Name or Number...">
    </div>

    <div class="table-responsive" id="pagination-data">
        @include('admin.viewtbl.serviceProviderPagination') <!-- Load paginated data -->
    </div>
@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        // $(document).on('click', '.pagination a', function(event) {
        //     event.preventDefault();
        //     var page = $(this).attr('href').split('page=')[1];
        //     var query = $('#search-input').val();
        //     fetchServices(page, query);
        // });

        // $('#search-input').on('keyup', function() {
        //     var query = $(this).val();
        //     fetchServices(1, query);
        // });
        // Fetch services data via AJAX
        function fetchServices(page, query) {
                    $.ajax({
                        url: "/serviceproviders", // Your route for fetching services
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
    });
</script>
@endsection
