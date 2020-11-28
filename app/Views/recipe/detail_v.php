
    <br> <!--untuk memberi jeda header dan konten main-->

  <!--==========================
    Article Section
  ============================-->

  <section id="features" class="padd-section text-center wow fadeInUp">
  <div class="container">
        <div class="section-title text-center">
            <?php if(session()->getFlashData('pesan')) :?>
              <div class="alert alert-success" role="alert">
                <?= session()->getFlashData('pesan') ?>
              </div>
            <?php endif;?>
        </div>
    </div>
    <div class="container">
    <div class="d-flex">
        <a href="/recipe" class="btn btn-success"> Kembali ke resep</a>
        <a href="/recipe/edit/<?=$resep['id_resep'];?>" class="btn btn-warning ml-auto mr-2"> Edit Resep</a>
        <form action="/recipe/delete/<?=$resep['id_resep'];?>" method="post">
          <?= csrf_field()?>
          <input type="hidden" name="_method" value="DELETE">
          <button type="submit" class="btn btn-danger" > Hapus Resep </button>
        </form>
        
        
      </div>
      <div class="section-title text-center">
        <h2><b><?= $resep['judul'];?></b></h2>
        <p class="separator"> oleh </p><b><?= $resep['username'];?></b>
      </div>
      <div class="row text-center align-self-center">
        <div class="col-md-12 col-lg-12">
          <div class="feature-block w-100">
            <img src="<?php echo base_url('/img/recipe/'.$resep['gambar_banner']); ?>" alt="artikel1" width="75%">
            <H4> Bahan - Bahan </h4>
            <h5 ><?= nl2br($resep['bahan']);?></h5>
            <br />
            <H4> Cara memasak </h4>
            <h5><?php echo nl2br($resep['tutorial']);?></h5>
            
          </div>
        </div>
        <div class="col-md-12 col-lg-12 mt-2">
          <H4> Gambar Tutorial </h4>
        </div>
        <?php $i=1; $tutorial = explode(",",$resep['gambar_tutorial']);foreach ($tutorial as $t) { ?>
          <div class="col-md-3 col-lg-3 w-100 my-2">
          <img src="<?php echo base_url('img/recipe/'.$t); ?>" alt="img<?= $i++; ?>" width="100%" >
          </div>
        <?php } ?> 
      </div>
    </div>
  </section>


