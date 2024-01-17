
  <div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
      <div class="card-body p-0">
        <div class="row">
          <div class="col-lg">
            <div class="p-5">
      <h1 class="h4 text-gray-900 mb-4"><center>Registrasi PAGE</center></h1>
      <div class="card-body">

        <form class="user" method="post" action="<?= base_url('auth/registrasi'); ?>">
          
          <div class="form-group">
              <input type="text" id="fullname" class="form-control form-control-user" placeholder="Full Name" name="name" value="<?= set_value('name'); ?>">
              <?= form_error('name', '<small class="text-danger pl-2">', '</small>'); ?>
          </div>

          <div class="form-group">
              <input type="text" id="Email" class="form-control form-control-user" placeholder="Email address" name="email" value="<?= set_value('email'); ?>" >
              <?= form_error('email', '<small class="text-danger pl-2">', '</small>'); ?>
          </div>

          <div class="form-group row">
              <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="password" id="password1" class="form-control form-control-user" placeholder="Password" name="password1" value="<?= set_value('password1'); ?>">
                  <?= form_error('password1', '<small class="text-danger pl-2">', '</small>'); ?>
              </div>
              <div class="col-sm-6">
                  <input type="password" id="password2" class="form-control form-control-user" placeholder="Confirm password" name="password2">
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary btn user btn-block">Register</button>
        </form>
        <div class="text-center" style="font-size: 25px">
          <a class="d-block small mt-3" href="<?= base_url('auth'); ?>">Sudah punya Akun? LOGIN</a>
          <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>
