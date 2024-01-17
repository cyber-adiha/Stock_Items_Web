
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg">
                <div class="p-5">
                  <h1 class="h4 text-gray-900 mb-4"><center>LOGIN PAGE</center></h1>

                   <?= $this->session->flashdata('message'); ?>
                  
      
      <div class="card-body">

        <form class="user" method="post" action="<?= base_url('Auth'); ?>">

          <div class="form-group">
              <input type="text" id="email" class="form-control form-control-user" placeholder="Email address..." name="email" value="<?= set_value('email'); ?>" >
              <?= form_error('email', '<small class="text-danger pl-2">', '</small>'); ?>
          </div>

          <div class="form-group">
              <input type="password" id="password" class="form-control form-control-user" placeholder="Password..." name="password">
              <?= form_error('password', '<small class="text-danger pl-2">', '</small>'); ?>
          </div>
          <br>
          <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
        </form>

        <div class="text-center" style="font-size: 25px">
          <a class="d-block small mt-3" href="<?= base_url('auth/registrasi'); ?>">Register an Account</a>
          <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>
      </div>
    </div>
  </div>

