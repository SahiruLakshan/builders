@extends('admin.sidebar')

@section('content')
<h1 style="margin-left:300px; margin-top:20px;">Professionals Categories Details</h1>

<div class="search-bar" style="margin-left:300px; margin-top:20px; width: 800px;">
    <input type="text" id="search-input" class="form-control" placeholder="Search products by Brand Name or Id...">
</div>

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
                            <th>Name</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->description }}</td>
                                <td>
                                    <a href="/categories/edit/{{ $category->id }}" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="/categories/delete/{{ $category->id }}"
                                        class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

{{-- @section('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function () {
        $(document).on('click', '.pagination a', function (event) {
            event.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            var query = $('#search-input').val();
            fetchProducts(page, query);
        });

        $('#search-input').on('keyup', function () {
            var query = $(this).val();
            fetchProducts(1, query);
        });

        function fetchProducts(page, query) {
            $.ajax({
                url: "/brands",
                type: "GET",
                data: {
                    page: page,
                    query: query
                },
                success: function (data) {
                    $('#pagination-data').html(data);
                }
            });
        }
    });
</script>
@endsection --}}