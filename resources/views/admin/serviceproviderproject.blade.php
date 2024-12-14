@extends('admin.sidebar')
@section('content')     
<div class="main-content app-content">
    <!-- container -->
    <div class="main-container container-fluid">
        <!-- breadcrumb -->
        <!-- breadcrumb -->
        <div class="row row-sm  mt-5 d-flex justify-content-center align-items-center">
            <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                <!-- row -->
                {{-- <div class="col-lg-12 col-md-12">    --}}
                    <form method="POST" action="">
                        @csrf
                        <h5>Project History</h5>
                        <hr>
                        <div class="table-responsive">
                            <table class="table" id="projectTable">
                                <thead>
                                    <tr>
                                        <th scope="col">Project Name</th>
                                        <th scope="col">Location</th>
                                        <th scope="col">Value</th>
                                        <th scope="col">Contact Person</th>
                                        <th scope="col">Contact Number</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody id="projectHistory">
                                 
                                        <tr>
                                            <td>
                                                <input type="text" class="form-control" name="projectName[]" value="" />
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="projectLocation[]" value="" />
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="projectValue[]" value="" />
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="contactPerson[]" value="" />
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="contactNumber[]" value="" />
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-danger" onclick="removeRow(this)">
                                                    Remove
                                                </button>
                                            </td>
                                        </tr>
                                  
                                </tbody>
                            </table>
                        </div>
            
                        <button type="button" class="btn btn-success" onclick="addProjectRow()">
                            Add Project
                        </button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
            </div>
        </div>
    </div>
        
       
<script>
    // Function to add a new project row
    function addProjectRow() {
        const tableBody = document.getElementById("projectHistory");
        const newRow = `
        <tr>
          <td><input type="text" class="form-control" name="projectName[]" placeholder="Project Name" /></td>
          <td><input type="text" class="form-control" name="projectLocation[]" placeholder="Location" /></td>
          <td><input type="text" class="form-control" name="projectValue[]" placeholder="Value" /></td>
          <td><input type="text" class="form-control" name="contactPerson[]" placeholder="Contact Person" /></td>
          <td><input type="text" class="form-control" name="contactNumber[]" placeholder="Contact Number" /></td>
          <td><button type="button" class="btn btn-danger" onclick="removeRow(this)">Remove</button></td>
        </tr>
      `;
        tableBody.insertAdjacentHTML("beforeend", newRow);
    }

    // Function to remove a project row
    function removeRow(button) {
        button.closest("tr").remove();
    }

    // Handle form submission
    document
        .getElementById("builderForm")
        .addEventListener("submit", function(event) {
            event.preventDefault();
            // Gather form data for submission here (can use FormData for AJAX submission)
            alert("Form submitted with project data!");
        });
</script>
@endsection