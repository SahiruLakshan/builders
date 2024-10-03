@extends('admin.sidebar')

@section('content')
<div class="row row-sm mt-5 d-flex justify-content-center align-items-center">
    <div class="col-lg-8 col-xl-8 col-md-12 col-sm-12">
        <div class="card box-shadow-0">
            <div class="card-header">
                <h4 class="card-title mb-1">Add New Advertisement</h4>
                <p class="mb-2">Enter The Name Of The Advertisement You Want to Add</p>
            </div>
            <div class="card-body pt-0">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <h6 class="card-title mb-1">Drag and Drop File Upload</h6>
                            <p class="text-muted card-sub-title">You can drag and drop multiple files into the box below to upload them.</p>
                        </div>

                        <!-- Dropzone form -->
                        <div class="row mb-4">
                            <div class="col-sm-12 col-md-4">
                                <form action="{{ route('upload') }}" class="dropzone" id="my-dropzone">
                                    <div class="dz-message needsclick">
                                        <i class="text-muted bx bx-cloud-upload"></i>
                                        <h6>Drop files here or click to upload</h6>
                                        <span class="text-muted">(This is just a demo drop zone. Selected files are <strong>actually</strong> uploaded.)</span>
                                    </div>
                                </form>
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
        var myDropzone = new Dropzone("#my-dropzone", {
            url: "{{ route('upload') }}",  // The upload URL
            maxFiles: 5,
            acceptedFiles: ".jpg, .png, .jpeg",
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"  // Include CSRF token for Laravel
            },
            init: function() {
                this.on("addedfile", function(file) {
                    console.log("File added: " + file.name);
                });
            },
            success: function(file, response) {
                if(response.success) {
                    console.log("File uploaded successfully: " + response.file);
                } else {
                    console.log("File upload failed: " + response.message);
                }
            },
            error: function(file, response) {
                console.log("Error: " + response);
            }
        });
    });
</script>
@endpush
