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
                        <div class="d-flex align-items-center">
                            <a href="{{ url('/shopupdate/' . $shop->id) }}" class="btn btn-success btn-sm me-2">Edit
                                Details</a>
                            <a href="{{ url('/shop/delete/' . $shop->id) }}" class="btn btn-danger btn-sm me-2">Delete</a>

                            @if ($shop->shop_approve == null)
                                <form id="shopApproveForm" action="{{ url('/shopapprove', $shop->id) }}" method="POST"
                                    class="me-2">
                                    @csrf
                                    <button type="button" class="btn btn-dark btn-sm" onclick="confirmApproval()">Shop
                                        Approve</button>
                                </form>

                                <script>
                                    function confirmApproval() {
                                        Swal.fire({
                                            title: 'Are you sure?',
                                            text: "You are about to approve this shop.",
                                            icon: 'warning',
                                            showCancelButton: true,
                                            confirmButtonColor: '#3085d6',
                                            cancelButtonColor: '#d33',
                                            confirmButtonText: 'Yes, approve it!'
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                document.getElementById('shopApproveForm').submit();
                                            }
                                        });
                                    }
                                </script>

                                <button type="button" class="btn btn-primary btn-sm me-2" disabled>Add Products</button>
                            @else
                                <button type="button" class="btn btn-success btn-sm me-2" disabled>Shop
                                    Approved</button>
                                <a href="{{ url('/addshopproduct/' . $shop->id) }}" class="btn btn-primary btn-sm">Add
                                    Products</a>
                            @endif

                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="d-flex justify-content-center mt-4">
    {{ $shops->onEachSide(1)->links('pagination::bootstrap-4') }}
</div>
