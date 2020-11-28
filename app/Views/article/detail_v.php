
    <br> <!--untuk memberi jeda header dan konten main-->

  <!--==========================
    Article Section
  ============================-->

  <section id="features" class="padd-section text-center wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">
        <h2><b><?=$artikel['judul'];?></b></h2>
        <p class="separator"> oleh </p><b><?=$artikel['username'];?></b>
      </div>
      <div class="row text-center align-self-center">
        <div class="col-md-12 col-lg-12 ">
          <div class="feature-block w-100">
            <img src="<?php echo base_url($artikel['gambar'])?>" alt="artikel1" width="75%">
            <p><?=$artikel['isi'];?></p>
          </div>
        </div>


      </div>
    </div>
  </section>

