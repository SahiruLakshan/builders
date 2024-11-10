@extends('admin.sidebar')
@section('content')
<div class="main-content app-content">
    <!-- container -->
    <div class="main-container container-fluid">
        <div class="row row-sm  mt-5 d-flex justify-content-center align-items-center">
            <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                <div class="card box-shadow-0">
                    <div class="card-header">
                        <h4 class="card-title mb-1">Add New Services Provider </h4>
                        <p class="mb-2">
                            Enter the name of the Service Provider you want to add
                        </p>
                    </div>
                    <div class="card-body pt-0">
                        {{-- <form class="border p-4" method="POST" action="{{ route('addserviceprovider.store') }}"> --}}
                            <form class="p-4" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                                <!-- Personal Information -->
                                <h4>Personal Information</h4>
                                <hr>
                                {{-- this one need to auto fill from our side like that PR00001 --}}
                                {{-- <div class=" mb-3">
                                  <label for="fullName" class="form-label">Professional Number</label>
                                  <input type="text" class="form-control" id="professionalNumber" name="professionalNumber" >
                                </div> --}}
                                <div class="mb-3">
                                  <label for="fullName" class="form-label">Full Name</label>
                                  <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Enter full name" required>
                                </div>
                                
                                <div class="mb-3 d-flex">
                                  <label for="profileImage" class="form-label">Profile Image:</label>
                                  <input type="file" id="profileImage" name="profileImage" accept="image/*" onchange="previewImage()" required>
                                  <div class="preview-box" id="imagePreview">
                                    <span>Image Preview</span>
                                  </div>
                                </div>
                                
                                <div class="row mb-3">
                                  <div class="col-12 col-md-6">
                                    <label for="phoneNumber" class="form-label">Phone Number</label>
                                    <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Enter phone number" required>
                                  </div>
                                  <div class="col-12 col-md-6">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address" required>
                                  </div>
                                </div>
                            
                                <div class="mb-3">
                                  <label for="address" class="form-label">Address</label>
                                  <input type="text" class="form-control" id="address" name="address" placeholder="Street Address">
                                </div>
                            
                                <div class="row mb-3">
                                  <div class="row">
                                    <div class="col-5">
                                      <label for="district">Select District:</label>
                                      <select id="district" name="district" class="form-select">
                                      </select>
                                    </div>
                                    <div class="col-5">
                                      <label for="city">City:</label>
                                      <select id="city" name="city" class="form-select disabled" disabled>
                                        <option value="">Select City</option>
                                      </select>
                                    </div>
                                  </div> 
                                  <div class="col-md-4">
                                    <label for="zip" class="form-label">Zip Code</label>
                                    <input type="text" class="form-control" id="zip" name="zip" placeholder="Zip Code">
                                  </div>
                                </div>
                            
                                <div class="col-12-mb-3">
                                  <label for="dob" class="form-label">Date of Birth</label>
                                  <input type="date" class="form-control" id="dob" name="dob">
                                </div>
                            
                                <div class="mb-3">
                                  <label for="linkedin" class="form-label">LinkedIn Profile or Professional Website</label>
                                  <input type="url" class="form-control" id="linkedin" name="linkedin" placeholder="URL to profile">
                                </div>
                            
                                <!-- Professional Details -->
                                <h4>Professional Details</h4>
                                <hr>
                                <div class="mb-3">
                                  <label for="jobTitle" class="form-label">Job Title/Role</label>
                                  <input type="text" class="form-control" id="jobTitle" name="jobTitle" placeholder="e.g., Architect, Engineer" required>
                                </div>
                            
                                <div class="mb-3">
                                  <label for="experienceLevel" class="form-label">Experience Level</label>
                                  <select class="form-select" id="experienceLevel" name="experienceLevel" required>
                                    <option value="" disabled selected>Select experience level</option>
                                    <option value="Junior">Junior</option>
                                    <option value="Mid-level">Mid-level</option>
                                    <option value="Senior">Senior</option>
                                  </select>
                                </div>
                            
                                <div class="mb-3">
                                  <label for="yearsOfExperience" class="form-label">Years of Experience</label>
                                  <input type="number" class="form-control" id="yearsOfExperience" name="yearsOfExperience" placeholder="Enter number of years">
                                </div>
                            
                                <div class="mb-3">
                                  <label for="specializations" class="form-label">Specializations</label>
                                  <select multiple class="form-select select2" id="specializations" name="specializations[]">
                                    <option value="Civil Engineering">Civil Engineering</option>
                                    <option value="Electrical Work">Electrical Work</option>
                                    <option value="Structural Analysis">Structural Analysis</option>
                                  </select>
                                </div>
                            
                                <div class="mb-3">
                                  <label for="skills" class="form-label">Skills</label>
                                  <textarea class="form-control" id="skills" name="skills" rows="3" placeholder="List skills like CAD, project management, etc."></textarea>
                                </div>
                            
                                <div class="mb-3">
                                  <label class="form-label">Certifications</label>
                                  <div class="row">
                                    <div class="col-md-4">
                                      <input type="text" class="form-control mb-2" name="certificationName" placeholder="Certification Name">
                                    </div>
                                    <div class="col-md-4">
                                      <input type="text" class="form-control mb-2" name="issuingAuthority" placeholder="Issuing Authority">
                                    </div>
                                    <div class="col-md-2">
                                      <input type="date" class="form-control mb-2" name="dateIssued" placeholder="Date Issued">
                                    </div>
                                    <div class="col-md-2">
                                      <input type="date" class="form-control mb-2" name="expirationDate" placeholder="Expiration Date">
                                    </div>
                                  </div>
                                </div>
                            
                                <div class="mb-3">
                                  <label for="licenseNumber" class="form-label">Professional License Number</label>
                                  <input type="text" class="form-control" id="licenseNumber" name="licenseNumber" placeholder="License Number (if applicable)">
                                </div>
                            
                                <!-- Submit Button -->
                                <button type="submit" class="btn btn-primary mt-3 mb-2">Submit</button>
                                <button type="reset" class="btn btn-secondary mt-3 mb-2" > Cancel</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    

    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
@endsection
