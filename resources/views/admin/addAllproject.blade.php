@extends('admin.sidebar')
@section('content')     
<div class="main-content app-content">
    <!-- container -->
    <div class="main-container container-fluid">
        <div class="row row-sm mt-5 d-flex justify-content-center align-items-center">
            <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                <form method="POST" action="" enctype="multipart/form-data">
                    @csrf
                    <h5> Add Project </h5>
                    <hr>
                    <div class="d-flex flex-wrap" >
                        <div class="form-group">
                            {{-- metana penna oni kataa project add krnne kiylaa --}}
                            <input type="text" class="form-control" name="projectOwner" placeholder="Project owner">

                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table" id="projectTable">
                            <thead>
                                <tr>
                                    <th scope="col">Project Name</th>
                                    <th scope="col">Location</th>
                                    <th scope="col">Value</th>
                                    <th scope="col">Contact Person</th>
                                    <th scope="col">Contact Number</th>
                                    <th scope="col">Images</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody id="projectHistory">
                                <tr>
                                    <td>
                                        <input type="text" class="form-control" name="projectName[]" placeholder="Project Name" />
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" name="projectLocation[]" placeholder="Location" />
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" name="projectValue[]" placeholder="Value" />
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" name="contactPerson[]" placeholder="Contact Person" />
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" name="contactNumber[]" placeholder="Contact Number" />
                                    </td>
                                    <td>
                                        <input 
                                            type="file" 
                                            class="form-control" 
                                            name="projectImages[]" 
                                            accept="image/*" 
                                            multiple 
                                            capture="camera" 
                                            onchange="previewImages(this)" 
                                        />
                                        <div class="preview-container mt-2"></div>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-outline-danger btn-sm" onclick="removeRow(this)">Remove</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <button type="button" class="btn btn-success" onclick="addProjectRow()">Add Project</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
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
          <td>
            <input 
              type="file" 
              class="form-control" 
              name="projectImages[]" 
              accept="image/*" 
              multiple 
              capture="camera" 
              onchange="previewImages(this)" 
            />
            <div class="preview-container mt-2"></div>
          </td>
          <td><button type="button" class="btn btn-outline-danger btn-sm" onclick="removeRow(this)">Remove</button></td>
        </tr>
      `;
        tableBody.insertAdjacentHTML("beforeend", newRow);
    }

    // Function to remove a project row
    function removeRow(button) {
        button.closest("tr").remove();
    }

    // Function to preview selected images
    function previewImages(input) {
        const previewContainer = input.nextElementSibling; // Get the preview container
        previewContainer.innerHTML = ""; // Clear existing previews

        if (input.files) {
            Array.from(input.files).forEach(file => {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const img = document.createElement("img");
                    img.src = e.target.result;
                    img.style.maxWidth = "100px";
                    img.style.marginRight = "10px";
                    img.style.marginTop = "5px";
                    img.style.border = "1px solid #ddd";
                    img.style.borderRadius = "5px";
                    previewContainer.appendChild(img);
                };
                reader.readAsDataURL(file);
            });
        }
    }
</script>
@endsection
