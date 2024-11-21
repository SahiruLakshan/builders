<div class="table-responsive">
    <div class="container">
        <div class="row">
            <div class="col-md-12 "style="margin-left:200px;width:800px;">
                <h1>Shop Products</h1>
                <table class="table table-bordered border text-nowrap mb-0 mt-3" >
                    <thead>
                        <tr>
                            <th>Shop Product No</th>
                            <th>Image</th>
                            <th> Product</th>
                            <th> Brand</th>
                            <th>Product Category</th>
                            <th>Product Subcategory</th>
                            <th>Color</th>
                            <th>Product Quantity</th>
                            <th>Measurement</th>
                            <th>Unit Price</th>
                            <th>Vendor</th>
                            <th>Discount</th>
                            <th>Cost</th>
                            <th>Attachment</th>
                            <th>Description</th>
                            <th>Applications</th>
                            <th>Other Categories</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    {{-- <tbody>
                        @foreach ($services as $service)
                            <tr>
                                <td>{{ $service->id }}</td>
                                <td>{{ $service->servicename }}</td>
                                <td>{{ $service->description }}</td>
                                <td>
                                    <a href="{{ route('shopproduct.update', $service->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('shopproduct.destroy', $service->id) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody> --}}
                </table>

                <div class="d-flex justify-content-center mt-4">
                    {{-- {{ $services->onEachSide(1)->links('pagination::bootstrap-4') }} --}}
                </div>
            </div>
        </div>
    </div>
</div>
