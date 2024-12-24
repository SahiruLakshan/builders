@extends('admin.sidebar')

@section('content')
    {{-- <h1 style="margin-left:300px; margin-top:20px;">Professionals Categories Details</h1>

    <div class="search-bar" style="margin-left:300px; margin-top:20px; width: 800px;">
        <input type="text" id="search-input" class="form-control" placeholder="Search products by Brand Name or Id...">
    </div> --}}

    <div class="table-responsive" id="pagination-data" style="margin-left:300px; margin-top:20px; width: 800px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Professionals Category</h1>
                    {{-- <a href="{{ route('services.create') }}" class="btn btn-primary">Add New Service</a> --}}
                    <table class="table mt-4">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Category Name</th>
                                <th>Description</th>
                                {{-- <th>Actions</th> --}}
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

                                    {{-- <td>
                                        <a href="{{ route('services.edit', $service->id) }}" class="btn btn-warning">Edit</a>
                                        <form action="{{ route('service.destroy', $service->id) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td> --}}
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
{{-- @endsection
@extends('admin.sidebar')

@section('content')
    <h1 style="margin-left:300px; margin-top:20px;">Service Details</h1>

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
        $(document).on('click', '.pagination a', function(event) {
            event.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            var query = $('#search-input').val();
            fetchProducts(page, query);
        });

        $('#search-input').on('keyup', function() {
            var query = $(this).val();
            fetchProducts(1, query);
        });
        // Fetch services data via AJAX
        function fetchServices(page, query) {
                    $.ajax({
                        url: "/services", // Your route for fetching services
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
@endsection --}}


