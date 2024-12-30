<div class="table-responsive">
    <div class="container">
        <div class="row">
            <div class="col-md-12 "style="margin-left:100px;width:800px;">
                <h1>Bass</h1>
                <table class="table table-bordered border text-nowrap mb-0 mt-3">
                    <thead>
                        <tr>
                            <th>Bass Number</th>
                            <th>NIC No</th>
                            <th>Full Name</th>
                            <th>NIC Image</th>
                            <th>Back Side NIC</th>
                            <th>Profile Image</th>
                            <th>Telephone Number</th>
                            <th>Phone Number</th>
                            <th>Email Address</th>
                            <th>Address</th>
                            <th>District</th>
                            <th>City</th>
                            <th>Zip Code</th>
                            <th>Date of Birth</th>
                            <th>LinkedIn Profile or FaceBook Link</th> <!-- New Location Column -->
                            <th>Job Title/Role</th>
                            <th>Experience Level</th>
                            <th>Years of Experience</th>
                            <th>Specializations</th>
                            <th>Working Area</th>
                            <th>Skills</th>
                            <th>Certifications</th>
                            <th>Action 1</th>
                            <th>Actions 2</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bass as $bass)
                            <tr>
                                <td>{{ $bass->number }}</td>
                                <td>{{ $bass->nic }}</td>
                                <td>{{ $bass->fullname }}</td>
                                <td><img src="{{ asset('assets/bass/' . $bass->nic_image) }}" alt="NIC Image"
                                        width="50"></td>
                                <td><img src="{{ asset('assets/bass/' . $bass->back_nic_image) }}" alt="Back NIC Image"
                                        width="50"></td>
                                <td><img src="{{ asset('assets/bass/' . $bass->profile_image) }}" alt="Profile Image"
                                        width="50"></td>
                                <td>{{ $bass->telephone_number }}</td>
                                <td>{{ $bass->phone_number }}</td>
                                <td>{{ $bass->b_email }}</td>
                                <td>{{ $bass->b_address }}</td>
                                <td>{{ $bass->district->dis_name }}</td>
                                <td>{{ $bass->city->ds_name }}</td>
                                <td>{{ $bass->zip }}</td>
                                <td>{{ $bass->dob }}</td>
                                <td>{{ $bass->linkedin }}</td>
                                <td>{{ $bass->jobTitle }}</td>
                                <td>{{ $bass->experienceLevel }}</td>
                                <td>{{ $bass->yearsOfExperience }}</td>
                                <td>{{ implode(', ', json_decode($bass->specialization, true) ?? []) }}</td>
                                <td>{{ implode(', ', json_decode($bass->workingArea, true) ?? []) }}</td>
                                <td>{{ $bass->skills }}</td>
                                <td>
                                    @foreach (json_decode($bass->certifications, true) ?? [] as $certification)
                                        <a href="{{ asset('assets/bass/' . $certification) }}"
                                            target="_blank">View</a><br>
                                    @endforeach
                                </td>

                                <td>
                                    @if ($service->status == 'Approved')
                                        <span class="badge bg-success">Approved</span>
                                    @elseif ($service->status == 'Not Approved')
                                        <span class="badge bg-warning">Not Approved</span>
                                    @else
                                        <span class="badge bg-danger">Rejected</span>
                                    @endif
                                </td>
                                <td>
                                    @if ($service->status == 'Not Approved' || $service->status == 'Rejected')
                                        <form action="{{ route('services.approve', $service->id) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-success">Approve</button>
                                        </form>
                                    @else
                                        <form action="{{ route('services.reject', $service->id) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-danger">Reject</button>
                                        </form>
                                    @endif
                                    {{-- addbassproject blade form  need to link to here... --}}
                                    <form action="" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-success">Add Projects</button>
                                    </form>
                                </td>

                                <td>
                                    <a href="{{ route('services.update', $service->id) }}"
                                        class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('bass.delete', $bass->id) }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>



                <div class="d-flex justify-content-center mt-4">
                    {{-- {{ $serviceProviders->onEachSide(1)->links('pagination::bootstrap-4') }} --}}
                </div>
            </div>
        </div>
    </div>
</div>
