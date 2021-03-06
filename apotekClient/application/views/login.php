<?=
form_open('login/proses_login');
?>
  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-5 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                  </div>
                  <form class="user">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-lg rounded-0" name="uname" id="uname" required="" placeholder="Username">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-lg rounded-0" name="pwd" id="pwd" required="" autocomplete="new-password" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block" id="btnLogin">Login</button> 
                    <hr>
                    
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
<?=
form_close();
?>


