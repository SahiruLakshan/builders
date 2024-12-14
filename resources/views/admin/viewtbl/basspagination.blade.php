<div class="table-responsive">
    <div class="container">
        <div class="row">
            <div class="col-md-12 "style="margin-left:100px;width:800px;">
                <h1>Services</h1>
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
                        {{-- @foreach ($serviceProviders as $service) --}}
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    @if ($service->longitude && $service->latitude)
                                        <a href="https://www.google.com/maps?q={{ $service->latitude }},{{ $service->longitude }}"
                                            target="_blank" class="btn btn-link">View Location</a>
                                    @else
                                        N/A
                                    @endif
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
                                    <a href="{{ route('service.destroy', $service->id) }}"
                                        class="btn btn-danger btn-sm">Delete</a>
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
