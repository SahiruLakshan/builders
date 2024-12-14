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
            <th style="max-width: 40%;">City</th>
            <th style="max-width: 40%;">Zip Code</th>
            <th style="max-width: 40%;">DOB</th>
            <th style="max-width: 40%;">LinkedIn Link</th>
            <th style="max-width: 40%;">Job Title</th>
            <th style="max-width: 40%;">Experience Level</th>
            <th style="max-width: 40%;">Year Of Experience</th>
            <th style="max-width: 40%;">Specializations</th>
            <th style="max-width: 40%;">Skills</th>
            <th style="max-width: 40%;">Certifications</th>
            <th style="max-width: 40%;">Professional L.Number</th>
            <th style="max-width: 10%;">Actions</th>
            <th style="max-width: 10%;">Actions 2</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($prof as $professional)
            <tr>
                <td>{{ $professional->professional_number }}</td>
                <td style="max-width:300px;overflow:scroll">{{ $professional->name }}</td>
                <td style="max-width:600px;overflow:scroll">
                    <img src="{{asset('assets/profile/'.$professional->profile_image)}}" alt="Profile Image" style="max-width: 100px; max-height: 100px;">
                </td>
                <td>{{ $professional->phone }}</td>
                <td>{{ $professional->email }}</td>
                <td>{{ $professional->address }}</td>
                <td>{{ $professional->district }}</td>
                <td>{{ $professional->city }}</td>
                <td>{{ $professional->zip }}</td>
                <td>{{ $professional->dob }}</td>
                <td>
                    <a href="{{ strpos($professional->linkedin, 'http') === 0 ? $professional->linkedin : 'https://' . $professional->linkedin }}" target="_blank">
                        LinkedIn Profile
                    </a>
                </td>
                
                
                <td>{{ $professional->job_title }}</td>
                <td>{{ $professional->experience_level }}</td>
                <td>{{ $professional->years_of_experience }}</td>
                <td>{{ $professional->specializations }}</td>
                <td>{{ $professional->skills }}</td>
                <td>{{ $professional->certifications }}</td>
                <td>{{ $professional->license_number }}</td>
                <td>
                    <span>
                        <a href="" class="btn btn-success btn-sm">Edit</a>
                        <form action="" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </span>
                </td>
                <td>
                    {{-- <span>
                        <a href="" class="btn btn-success btn-sm">Add project</a>
                        <form action="" method="POST" style="display:inline;">
                            @csrf
                            @method('')
                            <button type="submit" class="btn btn-danger btn-sm">Add Project</button>
                        </form>
                    </span> --}}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>


{{-- <div class="d-flex justify-content-center mt-4">
    {{ $brands->onEachSide(1)->links('pagination::bootstrap-4') }}
</div> --}}
