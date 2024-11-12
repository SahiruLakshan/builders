<table class="table table-bordered border text-nowrap mb-0 mt-3" style="margin-left:300px;width:800px;">
    <thead>
        <tr>
            <th style="max-width: 15%;">Professional ID</th>
            <th style="max-width: 40%;">Professional Name</th>
            <th style="max-width: 40%;">Professional Image</th>
            <th style="max-width: 40%;">Phone Number</th>
            <th style="max-width: 40%;">Email</th>
            <th style="max-width: 40%;">Address</th>
            <th style="max-width: 40%;">District</th>
            <th style="max-width: 40%;">city</th>
            <th style="max-width: 40%;">Zip Code</th>
            <th style="max-width: 40%;">DOB</th>
            <th style="max-width: 40%;">LinkedInd Link</th>
            <th style="max-width: 40%;">Job Title</th>
            <th style="max-width: 40%;">Experience Level</th>
            <th style="max-width: 40%;">Year Of Experience</th>
            <th style="max-width: 40%;">Specializations</th>
            <th style="max-width: 40%;">Skills</th>
            <th style="max-width: 40%;">Certification</th>
            <th style="max-width: 40%;">Professional L.Number</th>
            <th style="max-width: 40%;">District</th>
            <th style="max-width: 10%;">Actions</th>
        </tr>
    </thead>
    <tbody>
        {{-- @foreach ($products as $product) --}}
            <tr>
                <td></td>
                <td style="max-width:300px;overflow:scroll"></td>
                <td style="max-width:600px;overflow:scroll"></td>
                <td>
                    <span>
                        <a href="" class="btn btn-success btn-sm">Edit</a>
                        <a href="" class="btn btn-danger btn-sm">Delete</a>
                    </span>
                </td>
            </tr>
        {{-- @endforeach --}}
    </tbody>
</table>

<div class="d-flex justify-content-center mt-4">
    {{-- {{ $products->onEachSide(1)->links('pagination::bootstrap-4') }} --}}
</div>
