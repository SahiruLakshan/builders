@extends('admin.sidebar')
@section('content')
    <!-- row -->
    <div class="row row-sm d-flex justify-content-center align-items-center">
        <div class="col-lg-8 col-xl-8 col-md-12 col-sm-12">
            <div class="card box-shadow-0">
                <div class="card-header">
                    <h4 class="card-title mb-1">Add New User</h4>
                    <p class="mb-2">Enter the name of the User</p>
                </div>
                <div class="card-body pt-0">
                    <form class="form-horizontal" id="adduser">
                        <!-- Name Field -->
                        <div class="form-group">
                            <label for="name">Name*</label>
                            <input type="text" class="form-control" id="name" placeholder="Name" required />
                            <small class="form-text text-muted">Enter the name. This field is
                                required.</small>
                        </div>

                        <!-- Email Field -->
                        <div class="form-group">
                            <label for="email">Email Address*</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter Your Email"
                                required />
                            <small class="form-text text-muted">Enter a valid email address for this brand. Required
                                field.</small>
                        </div>

                        <!-- Password Field -->
                        <div class="form-group">
                            <label for="password">Password*</label>
                            <input type="password" class="form-control" id="password" placeholder="Enter Your Password"
                                required />
                            <small class="form-text text-muted">Enter a valid password for this brand. Required field.
                            </small>
                        </div>

                        <!-- Role Field -->
                        <div class="form-group">
                            <label for="role">Role*</label>
                            <select class="form-control" id="role" name="role" required>
                                <option value="admin">Admin</option>
                                <option value="user">User</option>
                            </select>
                            <small class="form-text text-muted">Select the role for this user. Required field.</small>
                        </div>

                        <!-- Submit Buttons -->
                        <div class="form-group mb-0 mt-3 justify-content-end">
                            <div>
                                <button type="submit" id="submitButton" class="btn btn-primary">
                                    Add User
                                </button>

                                <button type="reset" id="resetButton" class="btn btn-secondary ms-4">
                                    Cancel
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
@endsection
