<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<div class="table-responsive">
    <table class="table table-bordered border text-nowrap mb-0 mt-3" style="margin-left:250px;width:500px;">
        <thead>
            <tr>
                <th>Shop ID</th>
                <th>Shop Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Contact Number</th>
                {{-- <th>Status</th> --}}
                {{-- <th>Actions</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($shops as $shop)
                <tr id="shopRow{{ $shop->id }}">
                    <td>{{ $shop->id }}</td>
                    <td>{{ $shop->name }}</td>
                    <td>{{ $shop->email }}</td>
                    <td>{{ $shop->address }}</td>
                    <td>{{ $shop->p_number }}</td>
                    {{-- <td>
                        <div class="d-flex align-items-center">
                            <a href="{{ url('/shopupdate/' . $shop->id) }}" class="btn btn-success btn-sm me-2">Edit Details</a>
                            <a href="{{ url('/shop/delete/' . $shop->id) }}" class="btn btn-warning btn-sm me-2">Delete</a>
                        </div>
                    </td> --}}
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="d-flex justify-content-center mt-4">
    {{ $shops->onEachSide(1)->links('pagination::bootstrap-4') }}
</div>

