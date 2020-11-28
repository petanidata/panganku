<br> <!--untuk memberi jeda header dan konten main-->

<!--==========================
  Article Section
============================-->

<section id="features" class="padd-section text-center wow fadeInUp">
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-sm-auto" style="padding-top: 10%;">
        <div class="shadow mb-5 bg-white rounded" style="width: 24rem;">
          <div class="card" style="width: 24rem;">
            <div class="card-body">
              <h3 class="card-title text-center" style="padding-top: auto;">Login Pengguna</h3>
              <br>
              
              <form method="POST" action="/user/auth" id="form"></form>
              <?= csrf_field(); ?>
                <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" id="username" name="username">
                </div>
                
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" name="email">
                </div>
                <div class="row justify-content-between">
                  <div class="col-sm-auto w-100 ">
                    <button type="submit" class="btn btn-primary w-100" id="submit">Login</button>
                  </div>
                  <div class="col-sm-auto">
                    <a class="nav-link" href="/register">Belum punya akun ?</a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <img src="<?=base_url('img/login-pengguna.png')?>" class="float-right" style="width: 280%; height: auto; padding-top: 5%;">
      </div>
    </div>
  </div>
</section>