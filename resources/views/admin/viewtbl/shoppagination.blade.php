<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<div class="table-responsive">
    <table class="table table-bordered border text-nowrap mb-0 mt-3" style="margin-left:250px;width:500px;">
        <thead>
            <tr>
                <th>Shop Number</th>
                <th>Shop Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Contact Number</th>
                <th>Status</th>
                <th>Actions</th>
                <th>Subscriptions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($shops as $shop)
                <tr id="shopRow{{ $shop->id }}">
                    <td>{{ $shop->number }}</td>
                    <td>{{ $shop->name }}</td>
                    <td>{{ $shop->email }}</td>
                    <td>{{ $shop->address }}</td>
                    <td>{{ $shop->p_number }}</td>
                    <td>
                        <!-- Shop Approval Status -->
                        <span class="badge {{ $shop->shop_approve && $shop->cancel_shop == 'No' ? 'bg-success' : 'bg-danger' }}">
                            {{ $shop->shop_approve && $shop->cancel_shop == 'No' ? 'Approved' : 'Pending' }}
                        </span>
                        
                        <!-- Product Approval Status -->
                        <span class="badge {{ $shop->product_approve && $shop->cancel_product == 'No' ? 'bg-success' : 'bg-danger' }}">
                            @if ($shop->product_approve && $shop->cancel_product == 'No')
                                <a href="{{ url('/addshopproduct/' . $shop->id) }}" class="btn btn-sm btn-primary">Add Products</a>
                            @elseif ($shop->product_approve == null || $shop->cancel_product == 'Yes')
                                Product Pending
                            @endif
                        </span>                        
                        
                    </td>
                    <td>
                        <div class="d-flex align-items-center">
                            <a href="{{ url('/shopupdate/' . $shop->id) }}" class="btn btn-success btn-sm me-2">Edit Details</a>
                            <a href="{{ url('/shop/delete/' . $shop->id) }}" class="btn btn-warning btn-sm me-2">Delete</a>
                        </div>

                       
                    </td>
                    <td>
                        <div class="d-flex align-items-center mt-2">
                            <!-- Shop Approval Buttons -->
                            @if ($shop->shop_approve == null || $shop->cancel_shop == 'Yes')
                                <button type="button" class="btn btn-dark btn-sm me-2"
                                    onclick="confirmApproval('{{ $shop->id }}', 'approveShop')">Shop Approve</button>
                            @else
                                <button type="button" class="btn btn-danger btn-sm me-2"
                                    onclick="confirmApproval('{{ $shop->id }}', 'cancelShop')">Cancel Shop</button>
                            @endif

                            <!-- Product Approval Buttons -->
                            @if ($shop->shop_approve && $shop->product_approve == null || $shop->cancel_product == 'Yes')
                                <button type="button" class="btn btn-dark btn-sm me-2"
                                    onclick="confirmApproval('{{ $shop->id }}', 'approveProduct')">Product Approve</button>
                            @elseif ($shop->cancel_product == 'No')
                                <button type="button" class="btn btn-danger btn-sm me-2"
                                    onclick="confirmApproval('{{ $shop->id }}', 'cancelProduct')">Cancel Product</button>
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

<script>
    function confirmApproval(shopId, action) {
        let url = '';
        let message = '';
        let confirmButtonText = '';

        // Determine URL and message based on the action
        switch (action) {
            case 'approveShop':
                url = `/shopapprove/${shopId}`;
                message = 'You are about to approve this shop.';
                confirmButtonText = 'Yes, approve it!';
                break;
            case 'cancelShop':
                url = `/cancelapprove/${shopId}`;
                message = 'You are about to cancel the approval of this shop.';
                confirmButtonText = 'Yes, cancel it!';
                break;
            case 'approveProduct':
                url = `/productapprove/${shopId}`;
                message = 'You are about to approve this product.';
                confirmButtonText = 'Yes, approve it!';
                break;
            case 'cancelProduct':
                url = `/cancelproductapprove/${shopId}`;
                message = 'You are about to cancel the approval of this product.';
                confirmButtonText = 'Yes, cancel it!';
                break;
        }

        // SweetAlert Confirmation
        Swal.fire({
            title: 'Are you sure?',
            text: message,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: confirmButtonText
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: url,
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        Swal.fire('Success', response.message, 'success');
                        location.reload();
                    },
                    error: function(xhr, status, error) {
    console.log(xhr.responseText);  // Log the error to the console for debugging
    Swal.fire('Error', 'Something went wrong. Please try again later.', 'error');
}

                });
            }
        });
    }
</script>
