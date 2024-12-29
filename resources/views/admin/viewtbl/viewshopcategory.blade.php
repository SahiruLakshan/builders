@extends('admin.sidebar')

@section('content')
    <h1 style="margin-left:300px; margin-top:20px;">Shop Category Details</h1>

    <div class="search-bar" style="margin-left:300px; margin-top:20px; width: 800px;">
        <input type="text" id="search-input" class="form-control" placeholder="Search products by Name or Id...">
    </div>

    <div class="table-responsive" id="pagination-data">
        @include('admin.viewtbl.shopcatepagination') <!-- Load paginated data -->
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
        //     fetchProducts(page, query);
        // });

        // $('#search-input').on('keyup', function() {
        //     var query = $(this).val();
        //     fetchProducts(1, query); 
        // });

        function fetchProducts(page, query) {
            $.ajax({
                url: "/shopcategories",
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
