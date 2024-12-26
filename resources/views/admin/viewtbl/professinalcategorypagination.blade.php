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
        @foreach ($professionalCategories as $professionalCategory)
            <tr>
                <td>{{ $professionalCategory->id }}</td>
                <td style="max-width:300px;overflow:scroll">{{ $professionalCategory->name }}</td>
                <td style="max-width:600px;overflow:scroll">{{ $professionalCategory->description }}</td>
                <td>
                    <span>
                        <a href="{{ url('/getprofessionalcategories/' . $professionalCategory->id) }}" class="btn btn-success btn-sm">Edit</a>
                        <a href="{{ url('/deleteprofessionalcategories/'. $professionalCategory->id) }}" class="btn btn-danger btn-sm">Delete</a>
                    </span>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<div class="d-flex justify-content-center mt-4">
    {{ $professionalCategories->onEachSide(1)->links('pagination::bootstrap-4') }}
</div>
