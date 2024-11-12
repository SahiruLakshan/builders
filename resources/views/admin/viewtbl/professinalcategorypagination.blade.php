<table class="table table-bordered border text-nowrap mb-0 mt-3" style="margin-left:300px;width:800px;">
    <thead>
        <tr>
            <th style="max-width: 15%;">Professional Category ID</th>
            <th style="max-width: 40%;">Category Name</th>
            <th style="max-width: 35%;">Description</th>
            <th style="max-width: 10%;">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td style="max-width:300px;overflow:scroll">{{ $product->name }}</td>
                <td style="max-width:600px;overflow:scroll">{{ $product->description }}</td>
                <td>
                    <span>
                        <a href="{{ url('/getproduct/' . $product->id) }}" class="btn btn-success btn-sm">Edit</a>
                        <a href="{{ url('/delete/product/' . $product->id) }}" class="btn btn-danger btn-sm">Delete</a>
                    </span>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<div class="d-flex justify-content-center mt-4">
    {{ $products->onEachSide(1)->links('pagination::bootstrap-4') }}
</div>
