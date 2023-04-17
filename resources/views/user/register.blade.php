@include('partial.registerheader')
<form class="vh-100 gradient-custom" action="/store" method="POST">
    @csrf
     
    @error('email')
    <b><p style="text-align:center; color:red"> Must fill up the fields</p></b>
    @enderror

  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Register</h2>
              <p class="text-white-50 mb-5">Create your account here (Any Email will do)</p>
              <div class="form-outline form-white mb-4">
                <input type="text"  placeholder="Sample"  class="form-control form-control-lg" name="name"/>
                <label  for="name" class="form-label">Name</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="email" placeholder="Sample@gmail.com" id="typeEmailX" class="form-control form-control-lg" name="email"/>
                <label class="form-label" for="typeEmailX">Email</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="password" placeholder="Min: 6 Characters" id="typePasswordX" class="form-control form-control-lg" name="password"/>
                <label class="form-label" for="typePasswordX">Password</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="password" id="typePasswordX" placeholder="Min: 6 Characters"  class="form-control form-control-lg" name="password_confirmation"/>
                <label for="confirmpassword" class="form-label" >Confirm Password</label>
              </div>

              <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>

              <button class="btn btn-outline-light btn-lg px-5" type="submit">Register</button>

              <div class="d-flex justify-content-center text-center mt-4 pt-1">
                <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
              </div>

            </div>

            <div>
              <p class="mb-0">Already have an account? <a href="/login" class="text-white-50 fw-bold">Login</a>
              </p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</form>