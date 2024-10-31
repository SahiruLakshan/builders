@extends('webpages.index')
@section('content')
<style>
.border {
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 10px;
  }
  .custom-form-style {
        background-color: #ffffff;
        border: 2px solid #0d0d0d;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 20px;
        border-radius: 8px; /* Optional: Adds rounded corners */
      }
</style>

<div class="container mt-5 mb-5">
    <div class="text-center">
        <h3 class="display-4 text-primary font-weight-bold">BUILDERS.LK</h3>
        <h4 class="display-6 text-secondary font-weight-bold">
            Construction Professional Registration 
        </h4>
      </div>
      <div class="custom-form-style border px-5">
        <form class="border p-4" >
            <!-- Personal Information -->
            <h4>Personal Information</h4>
            <div class="mb-3">
              <label for="fullName" class="form-label">Full Name</label>
              <input type="text" class="form-control" id="fullName" placeholder="Enter full name" required>
            </div>
      
            <div class="row mb-3">
              <div class="col-md-6">
                <label for="phoneNumber" class="form-label">Phone Number</label>
                <input type="tel" class="form-control" id="phoneNumber" placeholder="Enter phone number" required>
              </div>
              <div class="col-md-6">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email address" required>
              </div>
            </div>
      
            <div class="mb-3">
              <label for="address" class="form-label">Address</label>
              <input type="text" class="form-control" id="address" placeholder="Street Address">
            </div>
      
            <div class="row mb-3">
              <div class="col-md-4">
                <label for="city" class="form-label">City</label>
                <input type="text" class="form-control" id="city" placeholder="City">
              </div>
              <div class="col-md-4">
                <label for="state" class="form-label">State</label>
                <input type="text" class="form-control" id="state" placeholder="State">
              </div>
              <div class="col-md-4">
                <label for="zip" class="form-label">Zip Code</label>
                <input type="text" class="form-control" id="zip" placeholder="Zip Code">
              </div>
            </div>
      
            <div class="mb-3">
              <label for="dob" class="form-label">Date of Birth</label>
              <input type="date" class="form-control" id="dob">
            </div>
      
            <div class="mb-3">
              <label for="linkedin" class="form-label">LinkedIn Profile or Professional Website</label>
              <input type="url" class="form-control" id="linkedin" placeholder="URL to profile">
            </div>
      
            <!-- Professional Details -->
            <h4>Professional Details</h4>
            <div class="mb-3">
              <label for="jobTitle" class="form-label">Job Title/Role</label>
              <input type="text" class="form-control" id="jobTitle" placeholder="e.g., Architect, Engineer" required>
            </div>
      
            <div class="mb-3">
              <label for="experienceLevel" class="form-label">Experience Level</label>
              <select class="form-select" id="experienceLevel" required>
                <option value="" disabled selected>Select experience level</option>
                <option value="Junior">Junior</option>
                <option value="Mid-level">Mid-level</option>
                <option value="Senior">Senior</option>
              </select>
              <script>
                document.getElementById('experienceLevel').addEventListener('change', function() {
                  if (this.value !== '') {
                    this.removeAttribute('disabled');
                  } else {
                    this.setAttribute('disabled', true);
                  }
                });
              </script>
            </div>
      
            <div class="mb-3">
              <label for="yearsOfExperience" class="form-label">Years of Experience</label>
              <input type="number" class="form-control" id="yearsOfExperience" placeholder="Enter number of years">
            </div>
      
            <div class="mb-3">
              <label for="specializations" class="form-label">Specializations</label>
              <select multiple class="form-select select2" id="specializations">
                <option value="Civil Engineering">Civil Engineering</option>
                <option value="Electrical Work">Electrical Work</option>
                <option value="Structural Analysis">Structural Analysis</option>
              </select>
              <script>
                $(document).ready(function() {
                  $('#specializations').select2({
                    placeholder: "Select Specializations",
                    allowClear: true
                  });
                });
              </script>
            </div>
      
            <div class="mb-3">
              <label for="skills" class="form-label">Skills</label>
              <textarea class="form-control" id="skills" rows="3" placeholder="List skills like CAD, project management, etc."></textarea>
            </div>
      
            <div class="mb-3">
              <label class="form-label">Certifications</label>
              <div class="row">
                <div class="col-md-4">
                  <input type="text" class="form-control mb-2" placeholder="Certification Name">
                </div>
                <div class="col-md-4">
                  <input type="text" class="form-control mb-2" placeholder="Issuing Authority">
                </div>
                <div class="col-md-2">
                  <input type="date" class="form-control mb-2" placeholder="Date Issued">
                </div>
                <div class="col-md-2">
                  <input type="date" class="form-control mb-2" placeholder="Expiration Date">
                </div>
              </div>
            </div>
      
            <div class="mb-3">
              <label for="licenseNumber" class="form-label">Professional License Number</label>
              <input type="text" class="form-control" id="licenseNumber" placeholder="License Number (if applicable)">
            </div>
      
            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary mt-3 mb-2">Submit</button>
          </form>

      </div>
    
  </div>

@endsection