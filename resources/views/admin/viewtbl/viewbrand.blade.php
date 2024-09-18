@extends('admin.sidebar')

@section('content')
    <h1 style="margin-left:400px; margin-top:20px;">Brand Details</h1> <!-- Shop Details title -->
    <div class="table-responsive"> <!-- This makes the table scrollable if needed -->
        <table class="table table-bordered border text-nowrap mb-0 mt-3" style="margin-left:400px;width:800px;">
            <thead>
                <tr>
                    <th>Brand ID</th>
                    <th>Brand Name</th>
                    <th>Company Name</th>
                    <th>Email</th>
                    <th>Contact Number</th>
                    <th>Actions</th> <!-- For Approve, Update, and Delete -->
                </tr>
            </thead>
            <tbody>
                @foreach ($brands as $brand)
                    <tr>
                        <td>{{ $brand->id }}</td>
                        <td>{{ $brand->b_name }}</td>
                        <td>{{ $brand->company_name }}</td>
                        <td>{{ $brand->email }}</td>
                        <td>{{ $brand->brand_contact_number }}</td>
                        <td>
                            <span>
                              <a href={{ url('/brandupdate/' . $brand->id) }} class="btn btn-success btn-sm">Edit Details</a>
                              <a href={{ url('/brand/delete/' . $brand->id) }} class="btn btn-danger btn-sm">Delete</a>
                            </span>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
