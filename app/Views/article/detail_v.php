
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

      <div class="card d-flex" style="border: none">
        <h2><b><?=$artikeluser['judul'];?></b></h2>
        <h4 class="separator"> oleh <br/>
        <b><?=$artikeluser['username'];?></b></h4><br/>
        <div>
        <img src="<?php echo base_url('img/article/'.$artikeluser['gambar'])?>" alt="gambar_artikel" width="75%">
        </div>
        <div class="justify">
         <?=nl2br($artikeluser['isi']);?>
        </div>
      </div>
    </div>
  </section>

