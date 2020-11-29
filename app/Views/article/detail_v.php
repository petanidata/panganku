
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
      <div class="row text-center align-self-center">
        <div class="col-md-12 col-lg-12 w-100 h-100">
          <div class="feature-block w-100">
            <img src="<?php echo base_url('img/article/'.$artikeluser['gambar'])?>" alt="artikel1" width="75%">
            
          </div>
          <div class="feature-block w-100 justify">
          <?=$artikeluser['isi'];?>
            
          </div>
          
        </div>
      </div>
    </div>
  </section>

