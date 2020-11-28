<section id="features" class="padd-section text-center wow fadeInUp">

<div class="container">
  <div class="section-title text-center">
    <h2><b>Form Tambah Resep</b></h2>
  </div>
  <div class="row text-left align-self-left">
    <div class="w-100">
    <form action="/recipe/update/<?= $resep['id_resep'];?>" method="post" enctype="multipart/form-data">
    <?= csrf_field(); ?>
<!-- user sementara-->    
<input type="hidden" class="form-control" id="id_user" name="id_user" value="1">
        <div class="form-group row">
            <label for="judul" class="col-sm-2" >Nama Makanan</label>
            
            <div class="col-sm-10">
                <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : '' ;?>" id="judul" name="judul" placeholder="masukan judul masakan anda disini" autofocus value="<?= $resep['judul']?>">
                <div class="invalid-feedback">
                    <?=$validation->getError('judul');?>
                </div>
            </div>
        </div>
        <div class="form-group row">
        <label for="porsi" class="col-sm-2" >Jumlah Porsi</label>
            <div class="col-sm-10">
                <input type="number" class="form-control <?= ($validation->hasError('porsi')) ? 'is-invalid' : '' ;?>" id="porsi" name="porsi" placeholder="Masukkan jumlah porsi" value="<?= $resep['porsi']?>">
                <div class="invalid-feedback">
                    <?=$validation->getError('porsi');?>
                </div>
            </div>
        </div>
        <div class="form-group row">
        <label for="lama_memasak" class="col-sm-2" >Lama Memasak</label>
            <div class="col-sm-8">
                <input type="Text" class="form-control <?= ($validation->hasError('lama_memasak')) ? 'is-invalid' : '' ;?>" id="lama_memasak" name="lama_memasak" placeholder="Masukkan waktu memasak" value="<?= $resep['lama_memasak']?>">
                <div class="invalid-feedback">
                    <?=$validation->getError('lama_memasak');?>
                </div>
            </div>
            <div class="col-sm-2 text-left">menit</div>

        </div>
        <div class="form-group row">
        <label for="bahan" class="col-sm-2">Bahan</label>
            <div class="col-sm-10">
            <textarea class="form-control <?= ($validation->hasError('bahan')) ? 'is-invalid' : '' ;?>" id="bahan" name="bahan" rows="3" placeholder="Masukkan Bahan" ><?= $resep['bahan']?></textarea>
            <div class="invalid-feedback">
                    <?=$validation->getError('bahan');?>
                </div>
            </div>

        </div>
        <div class="form-group row">
        <label for="tutorial" class="col-sm-2">Cara Memasak</label>
            <div class="col-sm-10">
            <textarea class="form-control <?= ($validation->hasError('tutorial')) ? 'is-invalid' : '' ;?>" id="tutorial" name="tutorial" rows="3" placeholder="Masukkan Cara memasak"><?= $resep['tutorial']?></textarea>
                <div class="invalid-feedback">
                        <?=$validation->getError('tutorial');?>
                </div>
            </div>

        </div>

        <div class="form-group row">
            <label for="gambar_banner" class="col-sm-2">Masukkan Gambar banner <br><p color=red>*wajib diisi</p></label>
            <div class="col-sm-10">
                <div class="form-control">
                <input type="hidden" name="gambar_banner_old" value="<?= $resep['gambar_banner']?>">
                    <input type="file" class="form-control-file <?= ($validation->hasError('gambar_banner')) ? 'is-invalid' : '' ;?>" id="gambar_banner" name="gambar_banner">
                    <div class="invalid-feedback">
                        <?=$validation->getError('gambar_banner');?>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="gambar_tutorial" class="col-sm-2">Masukkan Gambar Tutorial <br><p color=red>(jika ada)</p></label>
            <div class="col-sm-10">
                <div class="form-control">
                    <input type="hidden" name="gambar_tutorial_old" value="<?= $resep['gambar_tutorial']?>">
                    <input type="file" class="form-control-file <?= ($validation->hasError('gambar_tutorial')) ? 'is-invalid' : '' ;?>" id="gambar_tutorial" name="gambar_tutorial">
                    <div class="invalid-feedback">
                        <?=$validation->getError('gambar_tutorial');?>
                    </div>
                </div>
            </div>
        </div
        <div class="text-center">
        <button type="submit" class="btn btn-success" >Ubah Resep</button>
        <a href="<?=base_url('/recipe/'.$resep['id_resep']);?>"  class="btn btn-primary" >Batal Simpan</a>
        </div>
        </form>
    </div>
  </div>
</div>
</section>