<div class="table-responsive"> <!-- This makes the table scrollable if needed -->
    <table class="table table-bordered border text-nowrap mb-0 mt-3" style="margin-left:300px;width:500px;">
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
                          {{-- // add this button for first approve --}}
                          <a href={{ url('/shop/delete/' . $shop->id) }} class="btn btn-success btn-sm">Approve</a>
                        </span>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="d-flex justify-content-center mt-4">
    {{ $shops->onEachSide(1)->links('pagination::bootstrap-4') }}
</div>