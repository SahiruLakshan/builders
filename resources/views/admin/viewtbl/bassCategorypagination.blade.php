<table class="table table-bordered border text-nowrap mb-0 mt-3" style="margin-left:300px;width:800px;">
    <thead>
        <tr>
            <th style="max-width: 15%;">Bass Category ID</th>
            <th style="max-width: 40%;">Category Name</th>
            <th style="max-width: 35%;">Description</th>
            <th style="max-width: 10%;">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($basscate as $bass)
            <tr>
                <td>{{ $bass->id }}</td>
                <td style="max-width:300px;overflow:scroll">{{ $bass->name }}</td>
                <td style="max-width:600px;overflow:scroll">{{ $bass->description }}</td>
                <td>
                    <span>
                        <a href="" class="btn btn-success btn-sm">Edit</a>
                        
                    <form action="{{ route('bassCategory.delete', $bass->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                    
                    </span>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<div class="d-flex justify-content-center mt-4">
    {{ $basscate->onEachSide(1)->links('pagination::bootstrap-4') }}
</div>
