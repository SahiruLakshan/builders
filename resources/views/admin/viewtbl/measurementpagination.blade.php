<table class="table table-bordered border text-nowrap mb-0 mt-3" style="margin-left:300px;width:800px;">
    <thead>
        <tr>
            <th style="max-width: 15%;">ID</th>
            <th style="max-width: 40%;">Unit</th>
            <th style="max-width: 35%;">Description</th>
            <th style="max-width: 10%;">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($measurement as $measurements)
            <tr>
                <td>{{ $measurements->id }}</td>
                <td style="max-width:300px;overflow:scroll">{{ $measurements->unit }}</td>
                <td style="max-width:600px;overflow:scroll">{{ $measurements->description }}</td>
                <td>
                    <span>
                        <a href="{{ url('/getmeasurement/' . $measurements->id) }}" class="btn btn-success btn-sm">Edit</a>
                        <a href="{{ url('/measurement/delete/' . $measurements->id) }}" class="btn btn-danger btn-sm">Delete</a>
                    </span>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<div class="d-flex justify-content-center mt-4">
    {{ $measurement->onEachSide(1)->links('pagination::bootstrap-4') }}
</div>
