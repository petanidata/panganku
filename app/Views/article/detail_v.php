
    <br> <!--untuk memberi jeda header dan konten main-->

  <!--==========================
    Article Section
  ============================-->

  <section id="features" class="padd-section text-center wow fadeInUp">
    <div class="container">
      <div class="d-flex">
        <a href="/article" class="btn btn-success"> Kembali ke Halaman Artikel</a>
        <?php if((session()->get('is_admin')=="Y" )) { ?>
        <a href="/article/edit/<?=$artikeluser['id_artikel'];?>" class="btn btn-warning ml-auto mr-2"> Edit Artikel</a>
        <form action="/article/delete/<?=$artikeluser['id_artikel'];?>" method="post">
          <?= csrf_field()?>
          <input type="hidden" name="_method" value="DELETE">
          <button type="submit" class="btn btn-danger" > Hapus Artikel </button>
        </form>
        <?php }?>
      </div>
      <div class="section-title text-center">
        <h2><b><?=$artikeluser['judul'];?></b></h2>
        <p class="separator"> oleh </p><b><?=$artikeluser['username'];?></b>
      </div>
      
      <img src="<?php echo base_url('img/article/'.$artikeluser['gambar'])?>" alt="artikel1" width="75%">
      <p class="feature-block text-wrap text-justify" style=’text-align:justify;’>
           <?=nl2br($artikeluser['isi']);?>
        </p> 
        </div>
      </div>
    </div>
  </section>

