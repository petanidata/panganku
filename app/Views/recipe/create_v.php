<section id="features" class="padd-section text-center wow fadeInUp">

<div class="container">
  <div class="section-title text-center">
    <h2><b>Form Tambah Resep</b></h2>
  </div>
  <div class="row text-left align-self-left">
    <div class="w-100">
    <form action="/recipe/save" method="post">
    <?= csrf_field(); ?>
        <div class="form-group row">
            <label for="judul" class="col-sm-2" >Nama Makanan</label>
            <div class="col-sm-10">
                <input type="type" class="form-control" id="judul" name="judul" placeholder="masukan judul masakan anda disini" autofocus>
            </div>
        </div>
        <div class="form-group row">
        <label for="porsi" class="col-sm-2" >Jumlah Porsi</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="porsi" name="porsi">
            </div>
        </div>
        <div class="form-group row">
        <label for="lama_memasak" class="col-sm-2" >Lama Memasak</label>
            <div class="col-sm-8">
                <input type="Text" class="form-control" id="lama_memasak" name="lama_memasak">
            </div>
            <div class="col-sm-2 text-left">menit</div>
        </div>
        <div class="form-group row">
        <label for="bahan" class="col-sm-2">Bahan</label>
            <div class="col-sm-10">
            <textarea class="form-control" id="bahan" name="bahan" rows="3"></textarea>
            </div>
        </div>
        <div class="form-group row">
        <label for="tutorial" class="col-sm-2">Cara Memasak</label>
            <div class="col-sm-10">
            <textarea class="form-control" id="tutorial" name="tutorial" rows="3"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="gambar_banner" class="col-sm-2">Masukkan Gambar banner <br><p color=red>*wajib diisi</p></label>
            <div class="col-sm-10">
                <input type="file" class="form-control" id="gambar_banner" name="gambar_banner">
            </div>
        </div>
        <div class="form-group row">
            <label for="gambar_tutorial" class="col-sm-2">Masukkan Gambar Tutorial <br><p color=red>(jika ada)</p></label>
            <div class="col-sm-10">
                <input type="file" class="form-control" id="gambar_tutorial" name="gambar_tutorial">
            </div>
        </div>
        <div class="text-center">
        <button type="submit" class="btn btn-success" >Simpan Resep</button>
        <button type="button" class="btn btn-primary" >Batal Simpan</button>
        </div>
        </form>
    </div>
  </div>
</div>
</section>