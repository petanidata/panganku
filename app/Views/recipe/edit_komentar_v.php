<section id="features" class="padd-section text-center wow fadeInUp">

<div class="container">

  <div class="row text-left align-self-left">
    <div class="w-100">
    <form action="/recipe/komentarUpdate/<?= $komentar['id_komentar'];?>" method="post" enctype="multipart/form-data">
    <?= csrf_field(); ?>
<!-- user sementara-->    
            <textarea class="form-control <?= ($validation->hasError('komentar')) ? 'is-invalid' : '' ;?>" id="komentar" name="komentar" rows="3" placeholder="Masukkan komentar anda"><?= old('komentar')?><?= $komentar['komentar'];?></textarea>
            <div class="invalid-feedback">
                <?=$validation->getError('komentar');?>
            </div>

            <div class="form-group">
                <label for="gambar">Masukkan Foto (jika ada)</label>
                <input type="file" class="form-control-file <?= ($validation->hasError('gambar')) ? 'is-invalid' : '' ;?>" id="gambar" name="gambar">
                <div class="invalid-feedback">
                    <?=$validation->getError('gambar');?>
                </div>
            </div>
            <input type="hidden" id="id_resep" name="id_resep" value="<?=$komentar['id_resep']?>">
            <input type="hidden" id="gambarOld" name="gambarOld" value="<?=$komentar['gambar']?>">
          <button type="submit" class="btn btn-success"> Kirim Komentar </button>
      </form>
        </form>
    </div>
  </div>
</div>
</section>