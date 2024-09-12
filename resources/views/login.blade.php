@extends('admin.header')
@section('section')
<div
class="card box-shadow-0"
style="
  max-width: 400px;
  width: 100%;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  border-radius: 10px;
"
>
<!-- Logo -->
<div class="card-header text-center">
  <img
    src="path-to-your-logo/logo.png"
    alt="Builder.lk Logo"
    style="width: 100px"
  />
</div>
<div class="card-header text-center">
  <h4 class="card-title mb-1">User Login</h4>
  <p class="mb-2">Welcome back! Please login to your account.</p>
</div>
<div class="card-body pt-0">
  <form id="loginForm" method="POST" action="/login">
    <div class="alert alert-danger" role="alert" hidden></div>
    <div class="form-group">
      <label for="email">Email Address</label>
      <input
        type="email"
        class="form-control"
        id="email"
        name="email"
        placeholder="Enter email"
        required
      />
      <div class="invalid-feedback">
        Please enter a valid email address.
      </div>
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input
        type="password"
        class="form-control"
        id="password"
        name="password"
        placeholder="Password"
        required
      />
      <div class="invalid-feedback">Password is required.</div>
    </div>
    <div class="d-flex justify-content-between">
      <button type="submit" class="btn btn-primary mt-3 mb-0">
        Login
      </button>
      <a href="/register" class="btn btn-secondary mt-3 mb-0">Register</a>
    </div>
  </form>
</div>
</div>

<script>
// Front-end validation
(function () {
  "use strict";
  window.addEventListener(
    "load",
    function () {
      var form = document.getElementById("loginForm");
      form.addEventListener(
        "submit",
        function (event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add("was-validated");
        },
        false
      );
    },
    false
  );
})();
</script>
@endsection