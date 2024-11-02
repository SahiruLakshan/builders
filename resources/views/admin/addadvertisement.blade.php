{{-- @extends('admin.sidebar')

@section('content')
<div class="row row-sm mt-5 d-flex justify-content-center align-items-center">
    <div class="col-lg-8 col-xl-8 col-md-12 col-sm-12">
        <div class="card box-shadow-0">
            <div class="card-header">
                <h4 class="card-title mb-1">Add New Advertisement</h4>
                <p class="mb-2">Upload Images for Left, Middle, and Right sections</p>
            </div>
            <div class="card-body pt-0">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <h6 class="card-title mb-1">Drag and Drop File Upload</h6>
                            <p class="text-muted card-sub-title">You can drag and drop multiple files into the boxes below to upload them.</p>
                        </div>

                        <!-- File Upload Forms with Labels -->
                        <div class="row mb-4">
                            <!-- Left Side Image Upload -->
                            <div class="col-sm-12 col-md-4">
                                <label for="my-dropzone">Left Side Image</label>
                                <form action="{{ route('upload') }}" method="POST" class="dropzone" id="my-dropzone" enctype="multipart/form-data">
                                    @csrf
                                    <div class="dz-message needsclick">
                                        <i class="text-muted bx bx-cloud-upload"></i>
                                        <h6>Drop files here or click to upload</h6>
                                        <span class="text-muted">(You can drag & drop or click to upload.)</span>
                                    </div>
                                </form>
                            </div>

                            <!-- Middle Image Upload -->
                            <div class="col-sm-12 col-md-4">
                                <label for="my-dropzone2">Middle Image</label>
                                <form action="{{ route('upload') }}" method="POST" class="dropzone" id="my-dropzone2" enctype="multipart/form-data">
                                    @csrf
                                    <div class="dz-message needsclick">
                                        <i class="text-muted bx bx-cloud-upload"></i>
                                        <h6>Drop files here or click to upload</h6>
                                        <span class="text-muted">(You can drag & drop or click to upload.)</span>
                                    </div>
                                </form>
                            </div>

                            <!-- Right Side Image Upload -->
                            <div class="col-sm-12 col-md-4">
                                <label for="my-dropzone3">Right Side Image</label>
                                <form action="{{ route('upload') }}" method="POST" class="dropzone" id="my-dropzone3" enctype="multipart/form-data">
                                    @csrf
                                    <div class="dz-message needsclick">
                                        <i class="text-muted bx bx-cloud-upload"></i>
                                        <h6>Drop files here or click to upload</h6>
                                        <span class="text-muted">(You can drag & drop or click to upload.)</span>
                                    </div>
                                    
                                </form>
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-primary">Submit Advertisement</button>
                            </div>
                            

                            </div>
                        </div>

                    </div>
                </div>    
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    Dropzone.autoDiscover = false;

    $(document).ready(function() {
        // Initialize Dropzones
        var myDropzone = new Dropzone("#my-dropzone", {
            url: "{{ route('upload') }}",
            maxFiles: 5,
            acceptedFiles: ".jpg, .png, .jpeg",
            headers: { 'X-CSRF-TOKEN': "{{ csrf_token() }}" }
        });

        var myDropzone2 = new Dropzone("#my-dropzone2", {
            url: "{{ route('upload') }}",
            maxFiles: 5,
            acceptedFiles: ".jpg, .png, .jpeg",
            headers: { 'X-CSRF-TOKEN': "{{ csrf_token() }}" }
        });

        var myDropzone3 = new Dropzone("#my-dropzone3", {
            url: "{{ route('upload') }}",
            maxFiles: 5,
            acceptedFiles: ".jpg, .png, .jpeg",
            headers: { 'X-CSRF-TOKEN': "{{ csrf_token() }}" }
        });
    });
</script>

@endpush --}}
{{-- 
@extends('admin.sidebar')

@section('content')
<div class="row row-sm mt-5 d-flex justify-content-center align-items-center">
    <div class="col-lg-8 col-xl-8 col-md-12 col-sm-12">
        <div class="card box-shadow-0">
            <div class="card-header">
                <h4 class="card-title mb-1">Add New Advertisement</h4>
                <p class="mb-2">Upload Images for Left, Middle, and Right sections</p>
            </div>
            <div class="card-body pt-0">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <h6 class="card-title mb-1">Drag and Drop or Click to Select Files</h6>
                            <p class="text-muted card-sub-title">You can drag and drop or click to upload files.</p>
                        </div>

                        <!-- Combined Form -->
                        <form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data" id="advertisement-form">
                            @csrf
                            <div class="row mb-4">
                                <!-- Left Side Image Upload -->
                                <div class="col-sm-12 col-md-4">
                                    <label for="left_image">Left Side Image</label>
                                    <input type="file" class="form-control" name="left_image" id="left_image" accept=".jpg, .png, .jpeg">
                                </div>

                                <!-- Middle Image Upload -->
                                <div class="col-sm-12 col-md-4">
                                    <label for="middle_image">Middle Image</label>
                                    <input type="file" class="form-control" name="middle_image" id="middle_image" accept=".jpg, .png, .jpeg">
                                </div>

                                <!-- Right Side Image Upload -->
                                <div class="col-sm-12 col-md-4">
                                    <label for="right_image">Right Side Image</label>
                                    <input type="file" class="form-control" name="right_image" id="right_image" accept=".jpg, .png, .jpeg">
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="row">
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-primary" id="submit-advertisement">Submit Advertisement</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>    
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        // Handle form submission
        $("#advertisement-form").on("submit", function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                url: "{{ route('upload') }}",
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    alert("All images uploaded successfully!");
                    // Optionally, do other post-upload actions here
                },
                error: function(xhr, status, error) {
                    console.log(xhr.responseText);
                }
            });
        });
    });
</script>
@endpush
 --}}

 @extends('admin.sidebar')

 @section('content')
 <div class="row row-sm mt-5 d-flex justify-content-center align-items-center">
     <div class="col-lg-8 col-xl-8 col-md-12 col-sm-12">
         <div class="card box-shadow-0">
             <div class="card-header">
                 <h4 class="card-title mb-1">Add New Advertisement</h4>
                 <p class="mb-2">Upload Images for Left, Middle, and Right sections</p>
             </div>
             <div class="card-body pt-0">
                 <div class="card">
                     <div class="card-body">
                         <div>
                             <h6 class="card-title mb-1">Drag and Drop or Click to Select Files</h6>
                             <p class="text-muted card-sub-title">You can drag and drop or click to upload files.</p>
                         </div>
 
                         <!-- Combined Form -->
                         <form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data" id="advertisement-form">
                             @csrf
                             <div class="row mb-4">
                                 <!-- Left Side Image Upload -->
                                 <div class="col-sm-12 col-md-4">
                                     <label for="my-dropzone">Left Side Image</label>
                                     <div class="dropzone" id="my-dropzone"></div>
                                     <input type="file" class="form-control mt-2" name="left_image[]" id="left_image" accept=".jpg, .png, .jpeg" multiple>
                                 </div>
 
                                 <!-- Middle Image Upload -->
                                 <div class="col-sm-12 col-md-4">
                                     <label for="my-dropzone2">Middle Image</label>
                                     <div class="dropzone" id="my-dropzone2"></div>
                                     <input type="file" class="form-control mt-2" name="middle_image[]" id="middle_image" accept=".jpg, .png, .jpeg" multiple>
                                 </div>
 
                                 <!-- Right Side Image Upload -->
                                 <div class="col-sm-12 col-md-4">
                                     <label for="my-dropzone3">Right Side Image</label>
                                     <div class="dropzone" id="my-dropzone3"></div>
                                     <input type="file" class="form-control mt-2" name="right_image[]" id="right_image" accept=".jpg, .png, .jpeg" multiple>
                                 </div>
                                 <div>
                                    <label for="day_count">How Many Day Do You Want To Show</label>
                                    <input type="number" class="form-control" name="day_count" id="day_count">
                                 </div>
                             </div>
 
                             <!-- Submit Button -->
                             <div class="row">
                                 <div class="col-12 text-center">
                                     <button type="submit" class="btn btn-primary" id="submit-advertisement">Submit Advertisement</button>
                                 </div>
                             </div>
                         </form>
 
                     </div>
                 </div>    
             </div>
         </div>
     </div>
 </div>
 @endsection
 
 @push('scripts')
 <script>
     Dropzone.autoDiscover = false;
 
     $(document).ready(function() {
         // Initialize Dropzones
         var leftDropzone = new Dropzone("#my-dropzone", {
             url: "{{ route('upload') }}",
             autoProcessQueue: false,
             maxFiles: 5,
             acceptedFiles: ".jpg, .png, .jpeg",
             headers: { 'X-CSRF-TOKEN': "{{ csrf_token() }}" },
             addRemoveLinks: true,
             paramName: "left_image[]"
         });
 
         var middleDropzone = new Dropzone("#my-dropzone2", {
             url: "{{ route('upload') }}",
             autoProcessQueue: false,
             maxFiles: 5,
             acceptedFiles: ".jpg, .png, .jpeg",
             headers: { 'X-CSRF-TOKEN': "{{ csrf_token() }}" },
             addRemoveLinks: true,
             paramName: "middle_image[]"
         });
 
         var rightDropzone = new Dropzone("#my-dropzone3", {
             url: "{{ route('upload') }}",
             autoProcessQueue: false,
             maxFiles: 5,
             acceptedFiles: ".jpg, .png, .jpeg",
             headers: { 'X-CSRF-TOKEN': "{{ csrf_token() }}" },
             addRemoveLinks: true,
             paramName: "right_image[]"
         });
 
         // Handle form submission
         $("#advertisement-form").on("submit", function(e) {
             e.preventDefault(); // Prevent the default form submission
 
             // Process each Dropzone's file queue
             leftDropzone.processQueue();
             middleDropzone.processQueue();
             rightDropzone.processQueue();
 
             // Listen for completion of all Dropzones
             leftDropzone.on("queuecomplete", function() {
                 middleDropzone.on("queuecomplete", function() {
                     rightDropzone.on("queuecomplete", function() {
                         alert("All images uploaded successfully!");
                     });
                 });
             });
         });
     });
 </script>
 @endpush
 