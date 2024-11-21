<div class="table-responsive">
    <div class="container">
        <div class="row">
            <div class="col-md-12 "style="margin-left:100px;width:800px;">
                <h1>Services</h1>
                <table class="table table-bordered border text-nowrap mb-0 mt-3" >
                    <thead>
                        <tr>
                        
                            <th>ServiceProvider Number</th>  
                            <th>Name</th>
                            <th>Grade</th>
                            <th>Address</th>
                            <th>Select Category</th>
                            <th>Select District</th>
                            <th>City</th>
                            <th>Telephone</th>
                            <th>Mobile</th>
                            <th>WhatsApp</th>
                            <th>Company Name</th>
                            <th>BR</th>
                            <th>NOF</th>
                            <th>Maximum Project Value</th>
                            <th>Action 1</th>
                            <th>Actions 2</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($services as $service)
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
                                <td> <button class="btn btn-sm"> approve</button></td>
                                <td>
                                    <a href="{{ route('services.update', $service->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('services.destroy', $service->id) }}" method="POST" style="display:inline-block;">
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
                    {{ $services->onEachSide(1)->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
</div>
