<br> <!--untuk memberi jeda header dan konten main-->

<!--==========================
  Article Section
============================-->

<section id="features" class="padd-section text-center wow fadeInUp">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-sm-auto" style="margin-top: auto;">
              <div class="shadow mb-5 bg-white rounded" style="width: 24rem;">
                <div class="card" style="width: 24rem;">
                  <div class="card-body">
                    <h3 class="card-title text-center" style="padding-top: auto; margin-bottom: 10px;">Daftar Pengguna</h3>
                      <form style="margin-top: 0px;">
                        <div class="form-group">
                          <label for="email">Email address</label>
                          <input type="email" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : '' ;?>" id="email" name="judul" placeholder="masukan email masakan anda disini" autofocus value="<?= old('email')?>">
                          <div class="invalid-feedback">
                            <?=$validation->getError('email');?>
                        </div>
                        </div>
                        <div class="form-group">
                          <label for="username">Username</label>
                          <input type="email" class="form-control" id="username" name="username">
                        </div>
                        <div class="form-group">
                          <label for="password">Password</label>
                          <input type="password" class="form-control" id="password" placeholder="minimal 8 karakter">
                        </div>
                        <div class="row justify-content-between">
                          <div class="col-sm-auto">
                            <button type="submit" class="btn btn-primary">Daftar</button>
                          </div>
                          <div class="col-sm-auto">
                            <a class="nav-link" href="login-pengguna.html">Sudah punya akun ?</a>
                          </div>
                        </div>                 
                      </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
                <img src="<?=base_url('img/daftar-pengguna.png')?>" class="float-right" style="width: 280%; height: auto; padding-top: 40%;">
            </div>
        </div>
    </div>
</section>
