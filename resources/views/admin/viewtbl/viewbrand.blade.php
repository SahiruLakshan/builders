@extends('admin.sidebar')

@section('content')

<div class="col-lg-8 col-xl-8 col-md-12 col-sm-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Brand Table</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered border text-nowrap mb-0" id="basic-edit">
                    <thead>
                        <tr>
                            <th>Brand</th>
                            <th>Country Of Origin</th>
                            <th>Company Name</th>
                            <th>Address</th>
                            <th>Email Address</th>
                            <th>Contact Number</th>
                            <th>Product Source</th>
                            <th>Description</th>
                            <th>Brand Image</th>
                            <th>Actions</th> <!-- New column for buttons -->
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Bella</td>
                            <td>Chloe</td>
                            <td>System Developer</td>
                            <td>2018/03/12</td>
                            <td>$654,765</td>
                            <td>b.Chloe@datatables.net</td>
                            <td>
                                <button class="btn btn-success btn-sm approve-btn">Approve</button>
                                <button class="btn btn-warning btn-sm update-btn" data-bs-toggle="modal" data-bs-target="#editModal">Update</button>
                                <button class="btn btn-danger btn-sm delete-btn">Delete</button>
                            </td>
                        </tr>
                        <!-- Repeat rows -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Update Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel">Edit Row</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="editForm">
            <div class="mb-3">
              <label for="firstName" class="form-label">First Name</label>
              <input type="text" class="form-control" id="firstName">
            </div>
            <div class="mb-3">
              <label for="lastName" class="form-label">Last Name</label>
              <input type="text" class="form-control" id="lastName">
            </div>
            <div class="mb-3">
              <label for="position" class="form-label">Position</label>
              <input type="text" class="form-control" id="position">
            </div>
            <div class="mb-3">
              <label for="startDate" class="form-label">Start Date</label>
              <input type="date" class="form-control" id="startDate">
            </div>
            <div class="mb-3">
              <label for="salary" class="form-label">Salary</label>
              <input type="number" class="form-control" id="salary">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email">
            </div>
            <input type="hidden" id="rowIndex">
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" id="saveChanges">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  $(document).ready(function() {
    // Initialize DataTable
    var table = $('#basic-edit').DataTable();

    // Handle 'Approve' button click
    $('#basic-edit tbody').on('click', '.approve-btn', function() {
        var row = $(this).closest('tr');
        alert("Approved: " + table.row(row).data()[0]);
        // Additional approval logic can be added here
    });

    // Handle 'Delete' button click
    $('#basic-edit tbody').on('click', '.delete-btn', function() {
        var row = $(this).closest('tr');
        table.row(row).remove().draw();
        alert("Row deleted");
    });

    // Handle 'Update' button click
    $('#basic-edit tbody').on('click', '.update-btn', function() {
        var row = $(this).closest('tr');
        var data = table.row(row).data();

        // Fill the form with the row data
        $('#firstName').val(data[0]);
        $('#lastName').val(data[1]);
        $('#position').val(data[2]);
        $('#startDate').val(data[3]);
        $('#salary').val(data[4]);
        $('#email').val(data[5]);
        $('#rowIndex').val(table.row(row).index());

        $('#editModal').modal('show');
    });

    // Save changes from modal form
    $('#saveChanges').on('click', function() {
        var rowIndex = $('#rowIndex').val();
        var newData = [
            $('#firstName').val(),
            $('#lastName').val(),
            $('#position').val(),
            $('#startDate').val(),
            $('#salary').val(),
            $('#email').val(),
            '<button class="btn btn-success btn-sm approve-btn">Approve</button> <button class="btn btn-warning btn-sm update-btn" data-bs-toggle="modal" data-bs-target="#editModal">Update</button> <button class="btn btn-danger btn-sm delete-btn">Delete</button>'
        ];
        
        // Update the row in DataTable
        table.row(rowIndex).data(newData).draw();

        // Hide modal
        $('#editModal').modal('hide');
    });
});
  

@endsection