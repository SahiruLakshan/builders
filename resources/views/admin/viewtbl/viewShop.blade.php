@extends('admin.sidebar')

@section('content')
    <h1 style="margin-left:400px; margin-top:20px;">Shop Details</h1> <!-- Shop Details title -->
    <div class="table-responsive"> <!-- This makes the table scrollable if needed -->
        <table class="table table-bordered border text-nowrap mb-0 mt-3" style="margin-left:400px;width:500px;">
            <thead>
                <tr>
                    <th>Shop ID</th>
                    <th>Shop Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Contact Number</th>
                    <th>Actions</th> <!-- For Approve, Update, and Delete -->
                </tr>
            </thead>
            <tbody>
                @foreach ($shops as $shop)
                    <tr>
                        <td>{{ $shop->id }}</td>
                        <td>{{ $shop->name }}</td>
                        <td>{{ $shop->email }}</td>
                        <td>{{ $shop->address }}</td>
                        <td>{{ $shop->p_number }}</td>
                        <td>
                            <span>
                              <a href={{ url('/shopupdate/' . $shop->id) }} class="btn btn-success btn-sm">Edit Details</a>
                              <a href={{ url('/shop/delete/' . $shop->id) }} class="btn btn-danger btn-sm">Delete</a>
                            </span>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
