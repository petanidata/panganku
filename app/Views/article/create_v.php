<section id="features" class="padd-section text-center wow fadeInUp">

<div class="container">
  <div class="section-title text-center">
    <h2><b>Form Tambah Artikel</b></h2>
  </div>
  <div class="row text-left align-self-left">
    <div class="w-100">
    <form action="/article/save" method="post" enctype="multipart/form-data">
    <?= csrf_field(); ?>
<!-- user sementara-->    
<input type="hidden" class="form-control" id="id_user" name="id_user" value="<?=session()->get('id_user')?>">
        <div class="form-group row">
            <label for="judul" class="col-sm-2" >Judul</label>
            
            <div class="col-sm-10">
                <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : '' ;?>" id="judul" name="judul" placeholder="masukan judul Artikel anda disini" autofocus value="<?= old('judul')?>">
                <div class="invalid-feedback">
                    <?=$validation->getError('judul');?>
                </div>
            </div>
        </div>

        <div class="form-group row">
        <label for="isi" class="col-sm-2">Isi</label>
            <div class="col-sm-10">
            <textarea class="form-control <?= ($validation->hasError('isi')) ? 'is-invalid' : '' ;?>" id="isi" name="isi" rows="5" placeholder="Masukkan Isi Artikel" ><?= old('isi')?></textarea>
            <div class="invalid-feedback">
                    <?=$validation->getError('isi');?>
                </div>
            </div>
        </div>

        <div class="form-group row">
            <label for="gambar" class="col-sm-2">Masukkan Gambar Artikel <br><p color=red>*wajib diisi</p></label>
            <div class="col-sm-10">
                <div class="form-control">
                    <input type="file" class="form-control-file <?= ($validation->hasError('gambar')) ? 'is-invalid' : '' ;?>" id="gambar" name="gambar">
                    <div class="invalid-feedback">
                        <?=$validation->getError('gambar');?>
                    </div>
                </div>
            </div>
        </div> 

        <div class="text-center">
        <button type="submit" class="btn btn-success" >Simpan Artikel</button>
        <button type="button" class="btn btn-primary" >Kembali</button>
        </div>
        </form>
    </div>
  </div>
</div>
</section>