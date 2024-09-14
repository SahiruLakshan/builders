
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=0"
    />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="IE=9" />
    <meta
      name="Description"
      content="Bootstrap Responsive Admin Web Dashboard HTML5 Template"
    />
    <meta name="Author" content="Spruko Technologies Private Limited" />
    <meta
      name="Keywords"
      content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4"
    />

    <!-- Title -->
    <title>Builder.lk</title>

    <!-- Favicon -->
    <link
      rel="icon"
      href="{{ asset('assets/img/brand/favicon.png') }}"
      type="image/x-icon"
    />

    <!-- Icons css -->
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" />

    <!-- Bootstrap css -->
    <link
      href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}"
      rel="stylesheet"
    />

    <!-- style css -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />

    <!--- Animations css-->
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet" />
  </head>
  <div class="row">
    <div class="col"></div>
    <div class="col-md-4 col-sm-12">
      <div class="card box-shadow-0" style="margin-top: 10%;">
        <div class="card-header">
          <h4 class="card-title mb-1">Login</h4>
          <p class="mb-2">login to your account.
          </p>
        </div>
        <div class="card-body pt-0">
          <form>
            <div class="">
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input
                  type="email"
                  class="form-control"
                  id="exampleInputEmail1"
                  placeholder="Enter email"
                />
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input
                  type="password"
                  class="form-control"
                  id="exampleInputPassword1"
                  placeholder="Password"
                />
              </div>
            </div>
            <div class="form-group mb-0 mt-3 justify-content-end">
              <div>
                <button type="button" id="submitButton" class="btn btn-primary  ms-5">
                  Login
                </button>
                <button type="button" id="singInButton" class="btn btn-secondary me-5 ms-5">
                  Sign In
                </button>
                

              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="col"></div>
  </div>
  

